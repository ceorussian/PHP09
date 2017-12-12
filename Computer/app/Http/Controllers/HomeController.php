<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use DB,Cart;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Http\Requests\UserRequest;
use App\Http\Requests\AccessoriesRequest;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;
use App\Product;
use App\Category;
use App\User;
use App\RoleUser;
use App\Accessories;
use App\CategoryAccessories;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    
    public function index()
    {
        $paginates = Product::paginate(8);
        $totail = count(Cart::content());
        return view('center',compact('paginates','totail'));
    }
    public function CategoryProduct($category_id)
    {
        $product = Product::all()->where('category_id',$category_id);

        $totail = count(Cart::content());
        return view('category_product',compact('product','totail'));
    }
    public function GetLogin()
    {
        if(isset(Auth::User()->email) or isset(Auth::User()->name)){
            return redirect()->route('index');
        }
        return view('login_customer');
    }
    public function PostLogin(Request $Request)
    {
        $email = $Request->email;
        $password = $Request->password;
        if(Auth::attempt(['email'=>$email,'password'=>$password,'role_id'=>2])){
            return redirect()->route('index');
        }else{
            return redirect()->route('login_customer');
        }
    }
    public function GetRegister()
    {
        $totail = count(Cart::content());
        return view('register',compact('totail'));
    }
    public function PostRegister(UserRequest $Request)
    {
        $member = new User();
        $member->name = $Request->name;
        $member->email = $Request->email;
        $member->password = bcrypt($Request->password);
        $member->address = $Request->address;
        $member->phone = $Request->phone;
        $member->role_id = 2;
        $member->save();
        return redirect()->route('login_customer');
    }
    public function DetailProduct($id)
    {
        $product = Product::find($id);
        $totail = count(Cart::content());
        $category_product = Product::all()->where('category_id',$product->category_id);
        return view('detail_product',compact('product','totail','category_product'));
    }
    public function SeachProduct(Request $Request)
    {
           $totail = count(Cart::content());
           $product = Product::where('name','like','%'.$Request->search.'%')->orWhere('price',$Request->search)->get();
           return view('search',compact('product','totail'));
    }
}

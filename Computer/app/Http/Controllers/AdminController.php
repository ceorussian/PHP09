<?php
namespace App\Http\Controllers;

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
use App\Carts;
use App\Cart_detail;

class AdminController extends Controller
{
    public function HomeAdmin()
    {
       if(!isset(Auth::User()->email)){
        return redirect()->route('login');
       }
        $role = RoleUser::all();
    	$total = Product::all();
        $QuanlityProduct = count($total);
        $user  = User::all();
        $QuanlityUser = count($user);
        $QuanlityAccessories = count(Accessories::all());
        $category = Category::all();
        $category_accessories = CategoryAccessories::all();
        $cart = Carts::all();
        $qty_cart = count($cart);

    	return view('layouts.master',compact('QuanlityProduct','QuanlityUser','category','role','category_accessories','QuanlityAccessories','qty_cart'));
    
    }
}

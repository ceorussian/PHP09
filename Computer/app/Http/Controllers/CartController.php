<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use DB,Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Product;
use App\Category;
use App\Accessories;
use App\RoleUser;
use App\CategoryAccessories;
use App\User;
use App\Cart_detail;
use App\Carts;


class CartController extends Controller
{
    public function ListCart()
    {
        $category = Category::all();
        $product = Product::all();
        $QuanlityProduct = count($product);
        $users = User::all();
        $QuanlityUser = count($users);
        $QuanlityAccessories = count(Accessories::all());
        $role = RoleUser::all();
        $category_accessories = CategoryAccessories::all();
        $cart = Carts::all();
        $qty_cart = count($cart);
       return view('carts.list_cart',compact("QuanlityProduct","product","users","QuanlityUser","category","role","category_accessories","QuanlityAccessories","cart","qty_cart"));
    }
    public function DetailCart($id)
    {
       $category = Category::all();
        $product = Product::all();
        $QuanlityProduct = count($product);
        $users = User::all();
        $QuanlityUser = count($users);
        $QuanlityAccessories = count(Accessories::all());
        $role = RoleUser::all();
        $category_accessories = CategoryAccessories::all();
        $cart = Carts::all();
        $qty_cart = count($cart);
        $cart_detail = Cart_detail::all()->where('cart_id',$id);
        return view('carts.detail_cart',compact("QuanlityProduct","product","users","QuanlityUser","category","role","category_accessories","QuanlityAccessories","cart","qty_cart","cart_detail"));
    }
    public function Buy($id)
    {
        $Products = Product::find($id);
        Cart::add(array('id'=>$id,'name'=>$Products->name,'price'=>number_format($Products->price),'qty'=>1,'options'=>array('image'=>$Products->image)));
        
        return redirect()->route('index');
    }
    public function Cart()
    {
         $list_cart = Cart::content();
         $totail = count(Cart::content());
         $result = Cart::total();
         $total = 0;
        foreach ($list_cart as $key => $value) {
            $total += ($value->price * $value->qty); 
        }
        return view('cart',compact('list_cart','totail','total','result'));
    }
    public function DeleteCart($rowId)
    {
        Cart::remove($rowId);
        return redirect()->route('cart');
    }
    public function Order()
    {
        if(!isset(Auth::User()->email)){
            return redirect()->route('login_customer');
        }
        $total_product = Cart::content();
        $user_id = Auth::User()->id;
        $total = 0;
        foreach ($total_product as $key => $value) {
            $total += ($value->price * $value->qty); 
        }
        $date = date('d/m/Y');
        $cart = new Carts;
        
        $cart->user_id = $user_id;
        $cart->total_product = count($total_product);
        $cart->quanlity_price = $total;
        $cart->created = $date;
        $cart->save();
        $cart_id = $cart->id;
        // them vao cart detail
        foreach ($total_product as $value) {
           $cart_detail = new Cart_detail;
           $cart_detail->cart_id = $cart_id;
           $cart_detail->product_id = $value->name;
           $cart_detail->quanlity = $value->qty;
           $cart_detail->price = $value->price;
           $cart_detail->save();
        }
        
    }
}

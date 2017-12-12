<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Http\Requests\UserRequest;
use App\Http\Requests\AccessoriesRequest;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;
use App\Product;
use App\Category;
use App\User;
use App\Carts;
use App\RoleUser;
use App\Accessories;
use App\CategoryAccessories;

class UserController extends Controller
{
    public function ListUser()
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
        return view('users.list_user',compact("QuanlityProduct","product","users","QuanlityUser","category","role","category_accessories","QuanlityAccessories","qty_cart"));
    }
    public function GetAddUser()
    {
        $role_id = RoleUser::all();
        return view('users.add_user',compact('role_id'));
    }
    public function PostAddUser(UserRequest $Request)
    {
        $user = new User();
        $user->name = $Request->name;
        $user->email = $Request->email;
        $user->phone = $Request->phone;
        $user->address = $Request->address;
        $user->password = bcrypt($Request->password);
        $user->role_id = $Request->role_id;
        $user->save();
        return redirect()->route('list_user');
    }
    public function GetEditUser($id)
    {
        $user = User::find($id);
        $role_id = RoleUser::all();
        return view('users.edit_user',compact('user','role_id'));
    }
    public function PostEditUser(UserRequest $Request)
    {
        $id = $Request->id;
        $user = User::findOrFail($id);
        $user->name = $Request->name;
        $user->email = $Request->email;
        $user->phone = $Request->phone;
        $user->address = $Request->address;
        $user->password = $Request->password;
        $user->role_id = $Request->role_id;
        $user->save();
        return redirect()->route('list_user');
    }
    public function RoleUser($roleuser)
    {
        $role = RoleUser::all();
        $category = Category::all();
        $product = Product::all();
        $QuanlityProduct = count($product);
        $QuanlityAccessories = count(Accessories::all());
        $users = User::all();
        $QuanlityUser = count($users);
        $role_id = User::all()->where('role_id',$roleuser);
        $category_accessories = CategoryAccessories::all();
        $cart = Carts::all();
        $qty_cart = count($cart);
        return view('users.role_user',compact('role_id','QuanlityProduct','product','QuanlityUser','category','role','category_accessories','QuanlityAccessories','qty_cart'));
    }
    public function DeleteUser(Request $Request)
    {
        $id = $Request->id;
        User::find($id)->delete();
        return redirect()->route('list_user');
    }
}

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
use App\RoleUser;
use App\Accessories;
use App\CategoryAccessories;

class AccessoriesController extends Controller
{
    public function ListAccessories()
    {
        $role = RoleUser::all();
        $product = Product::all();
        $QuanlityProduct = count($product);
        $users = User::all();
        $QuanlityUser = count($users);
        $QuanlityAccessories = count(Accessories::all());
        $accessories = Accessories::all();
        $category = Category::all();
        $category_accessories = CategoryAccessories::all();
        $cart = Carts::all();
        $qty_cart = count($cart);
        return view('accessories.list_accessories',compact('product','QuanlityProduct','QuanlityUser','category','role','accessories','category_accessories','QuanlityAccessories','qty_cart'));
    }
    public function GetAddAccessories()
    {
        $accessories = CategoryAccessories::all();
        return view('accessories.add_accessories',compact('accessories'));
    }
    public function PostAddAccessories(AccessoriesRequest $Request)
    {
        $accessories = new Accessories;
        $accessories->name = $Request->name;
        $accessories->description = $Request->description;
        $accessories->price = $Request->price;
        if($Request->hasFile('image')){
            $file = $Request->file('image');
            $namefile = $file->getClientOriginalName();
            $file->move('img/linhkien',$namefile);
            $accessories->image = $namefile;
        }
        $accessories->category_id = $Request->category_id;
        $accessories->save();
        return redirect()->route('list_accessories');
    }
    public function GetEditAccessories($id)
    {
        $accessories = CategoryAccessories::all();
        $accessory = Accessories::find($id);
        return view('accessories.edit_accessories',compact('accessory','accessories'));
    }
    public function PostEditAccessories(AccessoriesRequest $Request)
    {
        $id = $Request->id;
        $accessories = Accessories::findOrFail($id);
        $accessories->name = $Request->name;
        $accessories->description = $Request->description;
        $accessories->price = $Request->price;
        if($Request->hasFile('image')){
            $file = $Request->file('image');
            $namefile = $file->getClientOriginalName();
            $file->move('img/linhkien',$namefile);
            $accessories->image = $namefile;
        }
        $accessories->category_id = $Request->category_id;
        $accessories->save();
        return redirect()->route('list_accessories');
    }
    public function DeleteAccessories($id)
    {
        $accessory = Accessories::find($id);
        $accessory->delete();
        return redirect()->route('list_accessories');
    }
                                                    //categories_accessories
    public function ListCategoriesAccessories()
    {
        $role = RoleUser::all();
        $product = Product::all();
        $QuanlityProduct = count($product);
        $users = User::all();
        $QuanlityUser = count($users);
        $QuanlityAccessories = count(Accessories::all());
        $accessories = Accessories::all();
        $category = Category::all();
        $category_accessories = CategoryAccessories::all();
        return view('accessories.list_categories_accessories',compact('product','QuanlityProduct','QuanlityUser','category','role','accessories','category_accessories','QuanlityAccessories'));
    }
    public function GetAddCategoryAccessories()
    {
        $role = RoleUser::all();
        $product = Product::all();
        $QuanlityProduct = count($product);
        $users = User::all();
        $QuanlityUser = count($users);
        $QuanlityAccessories = count(Accessories::all());
        $accessories = Accessories::all();
        $category = Category::all();
        $category_accessories = CategoryAccessories::all();
        return view('accessories.add_categories_accessories',compact('product','QuanlityProduct','QuanlityUser','category','role','accessories','category_accessories','QuanlityAccessories'));
    }
    public function PostAddCategoryAccessories(Request $Request)
    {
        $accessories = new CategoryAccessories();
        $accessories->name = $Request->name;
        $accessories->save();
        return redirect()->route('list_categories_accessories');
    }
    public function GetEditCategoryAccessories($id)
    {
        $role = RoleUser::all();
        $product = Product::all();
        $QuanlityProduct = count($product);
        $totaluser  = User::all();
        $QuanlityUser = count($totaluser);
        $QuanlityAccessories = count(Accessories::all());
        $category = Category::all();
        $category_accessories = CategoryAccessories::all();
        $categoryofaccessories = CategoryAccessories::find($id);
        return view('accessories.edit_categories_accessories',compact('categoryofaccessories','product','QuanlityProduct','QuanlityUser','category','role','accessories','category_accessories','QuanlityAccessories'));
    }
    public function PostEditCategoryAccessories(Request $Request)
    {
        $id = $Request->id;
        $accessories = CategoryAccessories::findOrFail($id);
        $accessories->name = $Request->name;
        $accessories->save();
        return redirect()->route('list_categories_accessories');
    }
    public function DeleteCategoryAccessories($id)
    {

        $accessories = CategoryAccessories::find($id);
        $accessories->delete();
        return redirect()->route('list_categories_accessories');
    }
    public function ListAccessoriesOfCategory($category_id)
    {
        $role = RoleUser::all();
        $product = Product::all();
        $QuanlityProduct = count($product);
        $totaluser  = User::all();
        $QuanlityUser = count($totaluser);
        $QuanlityAccessories = count(Accessories::all());
        $category = Category::all();
        $category_accessories = CategoryAccessories::all();
        $accessories = Accessories::all()->where('category_id',$category_id);
        return view('accessories.category_accessories',compact('accessories','product','QuanlityProduct','QuanlityUser','category','role','accessories','category_accessories','QuanlityAccessories'));
    }
}

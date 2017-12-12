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
use App\Carts;
class MyController extends Controller
{ 
    public function ListProduct()
    {
        $role = RoleUser::all();
    	$product = Product::paginate(5);
        $pagination = Product::all();
        $QuanlityProduct = count($pagination);
        $totaluser  = User::all();
        $QuanlityUser = count($totaluser);
        $QuanlityAccessories = count(Accessories::all());
        $category = Category::all();
        $category_accessories = CategoryAccessories::all();
        $cart = Carts::all();
        $qty_cart = count($cart);
        
    	return view('products.list_product',compact("QuanlityProduct","product",'QuanlityUser','category','role','category_accessories','QuanlityAccessories','pagination','qty_cart'));
    }
    public function GetAddProduct()
    {
        $Categories = Category::all();
  		return view('products.add_product',compact('Categories'));
    }
    public function PostAddProduct(ProductRequest $Request)
    {
        $product = new Product;
        $product->name = $Request->name;
        $product->description = $Request->description;
        $product->warranty = $Request->warranty;
        $product->price = $Request->price;
        if($Request->hasFile('image')){
            $file = $Request->file('image');
            $namefile = $file->getClientOriginalName();
            $file->move('img',$namefile);
            $product->image = $namefile;
        }
        $product->discout = $Request->discout;
        $product->category_id = $Request->category_id;
        $product->save();
        return redirect()->route('list-product');
    }
    public function GetDeleteProduct($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->back();
    }
    public function GetEditProduct($id)
    {
        $product = product::find($id);
        $Categories = Category::all();
        return view('products.edit_product',compact('product','Categories'));
    }
    public function PostEditProduct(ProductRequest $Request)
    {
        $id = $Request->id;
        $product = Product::find($id);
        $product->name = $Request->name;
        $product->description = $Request->description;
        $product->warranty = $Request->warranty;
        $product->price = $Request->price;
        if($Request->hasFile('image')){
            $file = $Request->file('image');
            $namefile = $file->getClientOriginalName();
            $file->move('img',$namefile);
            $product->image = $namefile;
        }
        $product->discout = $Request->discout;
        $product->category_id = $Request->category_id;
        $product->save();
        return redirect()->route('list-product');
    }
    public function GetCategoriesProduct($category_id)
    {
        $role = RoleUser::all();
        $product = product::all();
        $QuanlityProduct = count($product);
        $totaluser  = User::all();
        $QuanlityUser = count($totaluser);
        $QuanlityAccessories = count(Accessories::all());
        $category = Category::all();
        $categorys = product::all()->where('category_id',$category_id);
        $cart = Carts::all();
        $qty_cart = count($cart);
        $category_accessories = CategoryAccessories::all();
        return view('products.categories_product',compact('categorys','category','QuanlityProduct','QuanlityUser','role','category_accessories','QuanlityAccessories','qty_cart'));
    }   
                                                 //Categories_product        
    public function ListCategoriesProduct()
    {
        $role = RoleUser::all();
        $product = Product::all();
        $QuanlityProduct = count($product);
        $users = User::all();
        $QuanlityUser = count($users);
        $QuanlityAccessories = count(Accessories::all());
        $category = Category::all();
        $category_accessories = CategoryAccessories::all();
        $cart = Carts::all();
        $qty_cart = count($cart);
        return view('products.list_categories_product',compact('product','QuanlityProduct','QuanlityUser','category','role','category_accessories','QuanlityAccessories','qty_cart'));
    }
    public function GetAddCategory()
    {
        $role = RoleUser::all();
        $product = Product::all();
        $QuanlityProduct = count($product);
        $users = User::all();
        $QuanlityUser = count($users);
        $QuanlityAccessories = count(Accessories::all());
        $category = Category::all();
        $category_accessories = CategoryAccessories::all();
        $cart = Carts::all();
        $qty_cart = count($cart);
        return view('products.add_category',compact('product','QuanlityProduct','QuanlityUser','category','role','category_accessories','QuanlityAccessories','qty_cart'));
    }
    public function PostAddCategory(Request $Request)
    {
        $category = new Category();
        $category->name = $Request->name;
        $category->save();
        return redirect()->route('list_categories');
    }
    public function GetEditCategory($id)
    {
        $role = RoleUser::all();
        $product = Product::all();
        $QuanlityProduct = count($product);
        $users = User::all();
        $QuanlityUser = count($users);
        $QuanlityAccessories = count(Accessories::all());
        $category = Category::find($id);
        $cart = Carts::all();
        $qty_cart = count($cart);
        $category_accessories = CategoryAccessories::all();
        return view('products.edit_category',compact('product','QuanlityProduct','QuanlityUser','category','role','category_accessories','QuanlityAccessories','qty_cart'));
    }
    public function PostEditCategory(Request $Request )
    {
        $id = $Request->id;
        $category = Category::findOrFail($id);
        $category->name = $Request->name;
        $category->save();
        return redirect()->route('list_categories');
    }
    public function DeleteCategory($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('list_categories');
    }
    public function Seach(Request $Request)
    {
        $role = RoleUser::all();
        $product = Product::all();
        $QuanlityProduct = count($product);
        $users = User::all();
        $QuanlityUser = count($users);
        $QuanlityAccessories = count(Accessories::all());
        $category = Category::all();
        $category_accessories = CategoryAccessories::all();
        $cart = Carts::all();
        $qty_cart = count($cart);
        $seach_product = Product::where('name','like','%'.$Request->seach.'%')->orWhere('price',$Request->seach)->get();
        return view('products.seach',compact('seach_product','product','QuanlityProduct','QuanlityUser','category','role','category_accessories','QuanlityAccessories','qty_cart'));
    }
    
}

<?php

namespace App;
use App\Category;
use App\Cart_detail;
use App\Carts;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   protected $table = 'products';
   protected $fillable = ['id','name','image','description','warranty','price','discout','category_id'];
   public $timestamps = false;

   public function category()
   {
   		return $this->belongsTo(Category::class);
   }
}

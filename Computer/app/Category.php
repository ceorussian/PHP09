<?php

namespace App;
use App\Product;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
   protected $table = 'categories';
   protected $fillable = ['id','name'];
   public $timestamps = false;

   public function products()
   {
   		return $this->hasMany(Product::class);
   }
}

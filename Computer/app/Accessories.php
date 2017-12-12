<?php

namespace App;
use App\CategoryAccessories;
use Illuminate\Database\Eloquent\Model;

class Accessories extends Model
{
    protected $table = 'accessories';
    protected $fillable = [
    	'id','name','price','description','image','category_id'
    ];
    public $timestamps = false;
    public function category()
    {
  		return $this->belongsTo(CategoryAccessories::class);
    }
}

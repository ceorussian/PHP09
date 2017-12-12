<?php

namespace App;
use App\Carts;
use App\Product;
use Illuminate\Database\Eloquent\Model;

class Cart_detail extends Model
{
	protected $table = 'cart_details';
    protected $fillable = [
        'id', 'cart_id', 'product_id','quanlity','price'
    ];
	public $timestamps = false;
    public function cart()
    {
    	return $this->belongsTo('App\Carts','cart_id');
    }
    
}

<?php

namespace App;
use App\User;
use App\Cart_detail;
use App\Product;
use Illuminate\Database\Eloquent\Model;
class Carts extends Model
{
	protected $table = 'carts';
    protected $fillable = [
        'id', 'user_id', 'total_product','quanlity_price','created'
    ];
    public $timestamps = false;
    public function user()
    {
    	return $this->belongsTo(User::class);
    }
    public function cart_detail()
    {
        return $this->hasMany('App\Cart_detail','id');
    }
}

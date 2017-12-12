<?php

namespace App;
use App\Accessories;
use Illuminate\Database\Eloquent\Model;

class CategoryAccessories extends Model
{
    protected $table = 'category_accessories';
    protected $fillable = [
    	'id','name'
    ];
    public $timestamps = false;
    public function accessories()
    {

  		return $this->hasMany(Accessories::class);
    }
}

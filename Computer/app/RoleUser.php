<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class RoleUser extends Model
{
    protected $table = 'role_users';
    protected $fillable = ['id','name'];
    public $timestamps = false;
    public function users()
    {
    	return $this->hasMany('App\User','id');
    }
}

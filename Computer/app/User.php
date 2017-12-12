<?php

namespace App;
use App\RoleUser;
use App\Carts;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users';
    protected $fillable = [
        'name', 'email', 'password','role_id','phone','address','id_facebook'
    ];
    public $timestamps = false;
    public $remember_token = false;
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    public function roles(){
        return $this->belongsTo('App\RoleUser','role_id');
    }
    public function cart()
    {
        return $this->hasMany(Carts::class);
    }

}

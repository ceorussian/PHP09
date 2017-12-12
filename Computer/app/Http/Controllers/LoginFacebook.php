<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Socialite;
use App\User;
use Illuminate\Support\Facades\Auth;
class LoginFacebook extends Controller
{
     public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();   
    }   

    public function handleProviderCallback()
    {
        // Sau khi xác thực Facebook chuyển hướng về đây cùng với một token
        // Các xử lý liên quan đến đăng nhập bằng mạng xã hội cũng đưa vào đây.
         $user = Socialite::driver('facebook')->user();
        // var_dump($user->getNickName()); 

         $name =  $user->getname();
         $id_facebook = $user->getId();
         $member = new User;
         $check = User::where('id_facebook',$id_facebook)->first();
         if(isset($check)){
            Auth::login($check);
            return redirect()->route('index');
         }else{
            $member->name = $name;
            $member->id_facebook = $id_facebook;
            $member->save();
            return redirect()->route('index');
        }
         
    }
}

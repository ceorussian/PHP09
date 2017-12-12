<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use App\User;

class LoginController extends Controller
{
    public function GetLogin()
    {
        if(isset(Auth::User()->email)){
            return redirect()->route('home_admin');
        }else{
         return view('login.login');    
       }
    }
    public function PostLogin(Request $Request)
    {
        $email = $Request->email;
        $password = $Request->password;
        if(Auth::attempt(['email'=>$email,'password'=>$password,'role_id'=>1])){
            return redirect()->route('home_admin');
        }else{
            return redirect()->back();
        }
    }
    public function getLogout() {
        Auth::logout();
        return redirect()->route('login');
    }  
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
class SocialController extends Controller
{
    public function redirect(){
       return Socialite::driver('google')->redirect();
    }
    public function googleCallback(){
        $user = Socialite::driver('google')->stateless()->user();
        $finduser = \App\Models\User::where('email', '=', $user->email)->first();
        
        if ($finduser) {
            // dd($user);
            Auth::login($finduser);
            return view('google-logged-in', [
                'user' => $user,
            ]);
        } else {
            // dd($user);
            $newUser = \App\Models\User::create([
                'name' => $user->name,
                'username' => $user->email,
                'email' => $user->email,
                'avatar' => $user->avatar,
                'password' => bcrypt($user->token)  
            ]);
            Auth::login($newUser);
            return redirect()->intended('/google-logged-in');
        }
    }
    public function facebookRedirect(){
       return Socialite::driver('facebook')->redirect();
    }
    public function facebookCallback(){
        $user = Socialite::driver('facebook')->stateless()->user();
        $finduser = \App\Models\User::where('email', '=', $user->email)->first();
        
        if ($finduser) {
            // dd($user);
            Auth::login($finduser);
            return view('/google-logged-in', [
                'user' => $user,
            ]);
        } else {
            // dd($user);
            $newUser = \App\Models\User::create([
                'name' => $user->name,
                'username' => $user->email,
                'email' => $user->email,
                'avatar' => $user->avatar,
                'password' => bcrypt($user->token)  
            ]);
            Auth::login($newUser);
        }
    }
    
}

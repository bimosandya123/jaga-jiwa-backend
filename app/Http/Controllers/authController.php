<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class authController extends Controller
{
    public function register()
    {
        return view('register');
    }
    public function registerPost(Request $request){
        $user = new User();

        $user->name = $request->name;
        $user->username = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        return back()->with('success', 'Register successfully');
    }
    public function login()
    {
        return view('login');
    }
    public function loginPost(Request $request)
    {
        $credetials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if (Auth::attempt($credetials)) {
            if(Auth::user()->role == 'USER'){
                return redirect('google-logged-in')->with('success', 'Login berhasil');
            }else {
                return redirect('facebook-logged-in')->with('success', 'Login berhasil');
            }
        }

        return back()->with('error', 'Email or Password salah');
    }
    public function logout()
    {
        Auth::logout();

        return redirect()->intended('/');
    }
}

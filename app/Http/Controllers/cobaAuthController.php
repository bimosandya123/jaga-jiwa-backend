<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Validator;
use Auth;

class cobaAuthController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Ada kesalahan',
                'data' => $validator->errors()
            ]);
        }

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $input['username'] = $input['name'];
        $user = User::create($input);

        $success['remember_token'] = $user->createToken('remember_token')->plainTextToken;
        $success['name'] = $user->name;

        return response()->json([
            'success' => true,
            'message' => 'Sukses register',
            'data' => $success
        ]);

    }
    public function login(Request $request)
    {
        
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
           
            $success['remember_token'] = $user->createToken('remember_token')->plainTextToken;
            $success['name'] = $user->name;
            $success['email'] = $user->email;

            if(Auth::user()->role == 'USER'){
                return response()->json([
                    'user' => auth()->user(),
                    'redirect_url' => '/google-logged-in' 
                ]);
            }else {
                return response()->json([
                    'user' => auth()->user(),
                    'redirect_url' => 'facebook-logged-in'
                ]);
            }
            return response()->json([
                'user' => auth()->user(),
                'redirect_url' => '/google-logged-in' // Misalnya, arahkan ke '/google-logged-in' setelah login berhasil
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Cek email dan password lagi',
                'data' => null
            ]);
        }
    }
}
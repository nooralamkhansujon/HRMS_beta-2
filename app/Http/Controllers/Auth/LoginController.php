<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function login(Request $request){
        $request->validate([
            'email' => 'string|email',
            'password'=> 'string|min:6'
        ]);

        ///log in the if credential is correct
        $logincredentials = ['email' => $request->input('email'), 'password' => $request->input('password') ];
        if(Auth::attempt( $logincredentials)){
            $user             = Auth::user();
            $user->last_login = now();
            return response()->json(compact('user'));
        }
        else{
            return response()->json(['error'=>"Email or Password is not valid"],422);
        }
    }


}
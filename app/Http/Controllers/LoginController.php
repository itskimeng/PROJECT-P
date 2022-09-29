<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required'
        ]);
        $email = $request->email;
        $password = $request->password;

        if (Auth::attempt(['email'=>$email,'password'=>$password,])){
            return response()->json(Auth::user(), 200);
        }
        throw ValidationException::withMessages([
            'email' =>['Username and password are incorrect.'.$password.''.$email]
        ]);
    }
    public function logout()
    {
        Auth::logout();
    }
}

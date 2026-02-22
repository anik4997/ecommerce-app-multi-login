<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function showLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('/dashboard');
        }

        return back()->with('error', 'Invalid credentials');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function gotoFoodpanda()
    {
        $user = Auth::user();

        $customClaims = [
            'name'  => $user->name,
            'email' => $user->email,
        ];

        $token = JWTAuth::claims($customClaims)->fromUser($user);

        return redirect("http://127.0.0.1:8001/sso-login?token=".$token);
    }
}

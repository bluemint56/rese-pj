<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Request\RegisterRequest;
use App\Http\Request\LoginRequest;


class AuthenticationController extends Controller
{
    public function showRegister(Request $request)
    {
        return view('register');
    }
    public function register(RegisterRequest $request)
    {
        
    }
    public function thanks(Request $request)
    {
        return view('thanks');
    }
    public function showLogin(Request $request)
    {
        return view('login');
    }
    public function login(LoginRequest $request)
    {

    }
    public function logout(Request $request)
    {

    }
}

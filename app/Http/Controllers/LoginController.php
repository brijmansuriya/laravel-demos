<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('Login');
    }
    public function sub(Request $Request)
    {
        $user = $Request->input('username');
        $Request->session()->put('username', $user);
        return redirect('profile');
    }
}

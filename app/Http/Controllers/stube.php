<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class stube extends Controller
{
     public function index()
    {
        echo "stubs";
        return $companies = User::all();
    }
}

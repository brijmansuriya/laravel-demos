<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequesController extends Controller
{

    public function index()
    {
        return view('Reques');
    }

    public function sub(Request $Request)
    {
        return $Request->all();
    }

}

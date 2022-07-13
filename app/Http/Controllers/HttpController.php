<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HttpController extends Controller
{
    public function index()
    {
        $result= Http::get("https://reqres.in/api/users?page=1")->body();
        return view('httpclient', ['data'=>$result]);
    }

}

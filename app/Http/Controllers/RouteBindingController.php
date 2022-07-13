<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShowtableModel;

class RouteBindingController extends Controller
{
    public function index(ShowtableModel $key)
    {
        $key;
        return view('RouteBinding',['key'=>$key]);
        //return $user=ShowtableModel::all();
    }
    
}
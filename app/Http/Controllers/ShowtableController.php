<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShowtableModel;

class ShowtableController extends Controller
{
    public function index()
    {
       $user=ShowtableModel::all();

        return view('Showtable',['users'=>$user]);
    }
    
}

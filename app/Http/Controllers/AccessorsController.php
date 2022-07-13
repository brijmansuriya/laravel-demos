<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AccessorsModel;

class AccessorsController extends Controller
{
    public function index()
    {
        $user=AccessorsModel::all();
        return view('accessors',['data'=>$user]);
    }
    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DemoModel;

class SearchAPIController extends Controller
{
    public function index($name)
    {
        return DemoModel::where("name","like","%".$name."%")->get();
    }
    
}
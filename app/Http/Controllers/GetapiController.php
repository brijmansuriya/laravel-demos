<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DemoModel;

class GetapiController extends Controller
{
    public function index($name="")
    {
        return DemoModel::where("name","like","%".$name."%")->get();
    }
    
    
}

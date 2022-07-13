<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DemoModel;

class ModelController extends Controller
{
    public function index()
    {
        return DemoModel::all();
    }
    
}

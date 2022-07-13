<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employes;
use App\Models\User;


class OnetoManyController extends Controller
{
    public function index()
    {
        return $companies = User::all();
    }
    
}

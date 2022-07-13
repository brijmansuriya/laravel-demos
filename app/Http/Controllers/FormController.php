<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    
    public function index(Request $request)
    {
       echo $fname = $request->input('fname');
       echo $lname = $request->input('lname');
        return;
    }
    
    
}

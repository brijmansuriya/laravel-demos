<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class validationController extends Controller
{

    public function index(Request $Request)
    {
        $Request->validate([
            'fname' => 'required',
            'lname' => 'required',
        ]);
        echo "Fast Name :- ";
        echo $fname = $Request->input('fname'); 
        echo "<br>";
        echo "Last Name :- ";
        echo $lname = $Request->input('lname');
        return;
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function index(Request $request)
    {
        return $fname = 'Upload This File = '.$request->file('Image')->store('img');

    }
   
}

<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ApiFileUploadController extends Controller
{
    public function index(Request $request)
    {
        $fname = $request->file('Image')->store('apiimg');
        return ['success'=>'Image uplode','fname'=>$fname];
    }
}

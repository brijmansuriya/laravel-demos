<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MutatorModel;

class MutatorController extends Controller
{
    public function index(Request $Request)
    {
        $user= new MutatorModel;
        $user->name=$Request->fname;
        $user->save();

        return view('Mutator');
    }
    
}

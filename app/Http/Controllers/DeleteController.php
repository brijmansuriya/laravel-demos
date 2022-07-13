<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\ShowtableModel;

class DeleteController extends Controller
{
    public function index()
    {
       $user=ShowtableModel::all();

        return view('Delete',['users'=>$user]);
    }
    
    public function delete($id)
    {
       $user=ShowtableModel::find($id);
        $user->delete();
        return Redirect::back();
    }
    
}

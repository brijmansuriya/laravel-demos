<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShowtableModel;

class UpdateController extends Controller
{
    public function index()
    {
        $user=ShowtableModel::all();
        return view('Update',['users'=>$user]);
    }
    
    public function Update($id)
    {
        $user=ShowtableModel::find($id);
        return view('UpdateForm',['users'=>$user]);
       
    }
    public function Updatedata(Request $Request)
    {
        $user=ShowtableModel::find($Request->id);
        $user->name = $Request->Username;
        $user->password = $Request->Password;
        $user->save();
        return Redirect('updatedata');
       
    }
    
}

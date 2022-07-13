<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employes;
use App\Models\User;


class OnetooneController extends Controller
{
    public function index()
    {
       
       
        $phone = User::find(1)->phone;
        $phone = json_decode($phone,true );

        $otm = User::with(['pro'])->get();
        $otm = json_decode($otm,true );
        return view('onetoone',['phone'=>$phone,'otm'=>$otm]);
       
       
    }
    public function index1()
    {
       
        $phone = User::find(1)->phone;
        $phone = json_decode($phone,true );
        return view('onetoone',['phone'=>$phone]);
       
       
    }
    
}

<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ViewControllers extends Controller
{
    public function index($data){
        return view('ViewDemo',['data'=>$data]);
    }
}

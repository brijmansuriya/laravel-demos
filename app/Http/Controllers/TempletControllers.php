<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class TempletControllers extends Controller
{
    public function index(){
        
        $data=['Karan','Raj','Jay'];
        return view('Templet',['name'=>'Blade','users'=>['Karan','Raj','Jay'],'data'=>$data]);
    }
    public function templet(){
        
        $data=['Karan','Raj','Jay'];
        return view('Templet2',['name'=>'Blade','users'=>['Karan','Raj','Jay'],'data'=>$data]);
    }
}

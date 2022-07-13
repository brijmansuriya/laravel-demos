<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
class MaxminController extends Controller
{
    public function index()
    {
       $result['data'] = DB::table('wallet')->get();
       $result['sum'] = DB::table('wallet')->sum('amount');
       $result['min'] = DB::table('wallet')->min('amount');
       $result['max'] = DB::table('wallet')->max('amount');
       $result['avg'] = DB::table('wallet')->avg('amount');
       return view('Maxmin', $result);
        
    }
}
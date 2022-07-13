<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
class QueryBuilderController extends Controller
{
    public function index()
    {
        // return $user= DB::table('demomodel')->get();
        // return $user= DB::table('demomodel')->where('id',33)->get();
        // return $user= DB::table('demomodel')->where('name','admin')->get();
        // return $user= (array)DB::table('demomodel')->find(29);
       // return $user= DB::table('demomodel')->count();

        // return $user= DB::table('demomodel')->insert([
        //         'name'=>'ajay',
        //         'password'=>'ajay@123',
        //     ]);

        //  return $user= DB::table('demomodel')->where('id',29)->update([
        //         'name'=>'raj',
        //         'password'=>'patel',
        //     ]);

        return $user= DB::table('demomodel')->where('id',29)->delete();

        // return view('QueryBuilder',['users'=>$user]);
    }
   
}

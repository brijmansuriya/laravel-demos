<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class DatashowController extends Controller
{
    public function index()
    {
        $users = DB::table('user')->get();
        return view('datashow', ['users' => $users]);
    }
}
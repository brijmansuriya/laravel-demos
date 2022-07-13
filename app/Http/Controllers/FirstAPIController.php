<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class FirstAPIController extends Controller
{
    public function index()
    {
        echo $users = DB::table('emp')->get();
    }
}
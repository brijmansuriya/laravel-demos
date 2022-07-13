<?php

namespace App\Http\Controllers;

use DB;

class JoinsController extends Controller
{
    public function index()
    {
        $data['users'] = DB::table('employes')->join('company', 'employes.companyid', '=', 'company.id')->get();
        $data['user'] = DB::table('employes')->join('company', 'employes.companyid', '=', 'company.id')->where('employes.id', 2)->get();
        return view('joins', $data);
    }
}

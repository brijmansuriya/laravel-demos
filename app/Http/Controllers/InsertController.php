<?php

namespace App\Http\Controllers;

use App\Models\InsertModel;
use Illuminate\Http\Request;

class InsertController extends Controller
{

    public function index(Request $request)
    {
        $InsertModel = new InsertModel;
        $InsertModel->name = $request->Username;
        $InsertModel->password = $request->Password;
        $InsertModel->save();
        return redirect()->back();
    }
    //$request->input()
}

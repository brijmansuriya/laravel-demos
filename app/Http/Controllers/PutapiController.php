<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InsertModel;

class PutapiController extends Controller
{
    
    public function index(Request $request)
    {
        $InsertModel=InsertModel::find($request->id);
        $InsertModel->name = $request->name;
        $regalt=$InsertModel->save();
        if($regalt==1){
            return ["Result"=>"Update Successfully "];
        }else{
            return ["Result"=>"Not Update"];
        }
    }
   
}

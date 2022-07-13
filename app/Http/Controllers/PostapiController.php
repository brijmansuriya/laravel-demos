<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InsertModel;

class PostapiController extends Controller
{
    
    public function index(Request $request)
    {
      
        $InsertModel=new InsertModel;
        $InsertModel->name = $request->name;
        // $InsertModel->password = $request->Password;
        $regalt=$InsertModel->save();
     
        if($regalt==1){
            return ["Result"=>"Add Successfully "];
        }else{
            return ["Result"=>"Not Add"];
        }
    }
   
}

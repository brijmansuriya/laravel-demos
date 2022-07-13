<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\InsertModel;
class ValidationapiController extends Controller
{
    
    public function index(Request $request)
    {
        $regalt=array(
            "Username"=>"Required",
        );
        $velidate=validator::make($request->all(),$regalt);

        if($velidate->fails()){
            return $velidate->errors();
        }else{
            $InsertModel=new InsertModel;
            $InsertModel->name=$request->Username;
            $regalt=$InsertModel->save();
         
            if($regalt==1){
                return ["Result"=>"Add Successfully "];
            }else{
                return ["Result"=>"Not Add"];
            }

        }

    }
   
}

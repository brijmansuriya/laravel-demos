<?php

namespace App\Http\Controllers;

use App\Models\ApiModel;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function SearchApi($name = "")
    {
        return ApiModel::where("name", "like", "%" . $name . "%")->get();
    }
    public function GetApi()
    {
        return ApiModel::get();
    }

    public function InsertPostApi(Request $request)
    {
        $ApiModel = new ApiModel;
        $ApiModel->name = $request->name;
        $regalt = $ApiModel->save();

        if ($regalt == 1) {
            return ["Result" => "Add Successfully"];
        } else {
            return ["Result" => "Not Added"];
        }
    }

    public function PutApi(Request $request)
    {
        $ApiModel = ApiModel::find($request->id);
        $ApiModel->name = $request->name;
        $regalt = $ApiModel->save();
        if ($regalt == 1) {
            return ["Result" => "Update Successfully "];
        } else {
            return ["Result" => "Not Update"];
        }
    }

    public function DeleteApi($id)
    {
        $ApiModel = ApiModel::find($id);
        $regalt = $ApiModel->delete();
        if ($regalt == 1) {
            return ["Result" => "Delete Successfully "];
        } else {
            return ["Result" => "Not Delete"];
        }
    }
}

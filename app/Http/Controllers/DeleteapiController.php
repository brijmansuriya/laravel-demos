<?php

namespace App\Http\Controllers;

use App\Models\InsertModel;

class DeleteapiController extends Controller
{
    public function index($id)
    {
        $InsertModel = InsertModel::find($id);
        $regalt = $InsertModel->delete();

        if ($regalt == 1) {
            return ["Result" => "Delete Successfully "];
        } else {
            return ["Result" => "Not Delete"];
        }
    }

}

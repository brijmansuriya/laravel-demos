<?php

namespace App\Http\Controllers;

use App\Models\DemoModel;
use Illuminate\Http\Request;

class ResourceController extends Controller
{

    public function index()
    {
        echo $data = DemoModel::all();
    }

    public function store(Request $request)
    {
        $DemoModel = new DemoModel;
        $DemoModel->name = $request->name;
        $regalt = $DemoModel->save();

        if ($regalt == 1) {
            return ["Result" => "Add Successfully "];
        } else {
            return ["Result" => "Not Add"];
        }
    }

    public function update(Request $request, $id)
    {
        $DemoModel = DemoModel::find($id);
        $DemoModel->name = $request->name;
        $regalt = $DemoModel->save();
        if ($regalt == 1) {
            return ["Result" => "Update Successfully "];
        } else {
            return ["Result" => "Not Update"];
        }
    }

    public function destroy($id)
    {
        $DemoModel = DemoModel::find($id);
        $regalt = $DemoModel->delete();
        if ($regalt == 1) {
            return ["Result" => "Delete Successfully "];
        } else {
            return ["Result" => "Not Delete"];
        }
    }
}

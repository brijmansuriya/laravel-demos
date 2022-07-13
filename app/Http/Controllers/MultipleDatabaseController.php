<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\MultipleModel;

class MultipleDatabaseController extends Controller
{
    public function __construct()
    {
        $this->MultipleModel = new MultipleModel();
    }
    public function index()
    {
        $result['db1'] = $this->MultipleModel->GetData();
        $result['db2'] = $this->MultipleModel->GetData2();
        return view('MultipleDatabase',$result);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\VendorsModel;
use Illuminate\Http\Request;
use DB;
class VendorsController extends Controller
{
    // private $table = 'tbl_vendor';
    private $url = "vendors/";
    public function __construct()
    {

        $this->VendorsModel = new VendorsModel();
    }
    public function index()
    {
        $result['vendorsdata'] = $this->VendorsModel->GetData();
        $result['Count'] = DB::table('vendor')->select('*')->where('active', 0)->Count();
        return view('vendors/index', $result);
    }
    public function addvendors($id = '')
    {
        $result['data'] ="";
     
        $result['id'] ="";
        if ($id != '') {
            $result['data'] = DB::table('vendor')->where('id',$id)->first();
            $result['id'] = $id;
        }
      
        return view('vendors/add', $result);
    }
    public function savevendors(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:vendor,name,' . $request->id,
        ]);

        $id = $request->id;
        if ($id != '') {
            if ($this->VendorsModel->updatedata($request)) {
                request()->session()->flash('success_msg', ' Updated Successfully');
            } else {
                request()->session()->flash('error_msg', 'Failed To Update ');
            }
        } else {
            $id = $this->VendorsModel->insert($request);
            if ($id != '') {
                request()->session()->flash('success_msg', ' Added Successfully');
            } else {
                request()->session()->flash('error_msg', 'Failed To Add ');
            }
        }
        return redirect('vendors');

    }
    public function deletevendors($id)
    {
        $vendor = DB::table('vendor')->delete($id);
        if ($vendor != '') {
            request()->session()->flash('success_msg', 'Deleted Successfully');
        } else {
            request()->session()->flash('error_msg', 'Failed To Delete');
        }
        return redirect()->back();
    }

}

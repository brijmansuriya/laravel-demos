<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\PaginationModel;

class PaginationController extends Controller
{
    public function index()
    {
        $this->PaginationModel = new PaginationModel();
        $users= $this->PaginationModel->GetData();
        return view('Pagination',['users'=>$users]);
    }
    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
class FlashController extends Controller
{
    public function index(Request $request)
    {
        $fname = $request->input('fname');
        $lname = $request->input('lname');
        $fullname = $fname.' '.$lname;
        $request->session()->flash('fname', $fullname);
        return redirect('FlashSession');
    }

    public function Delete(Request $request)
    {
        Session::flush('fname');
        return redirect('FlashSession');
    }
    
}

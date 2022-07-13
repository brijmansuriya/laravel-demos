<?php

namespace App;

namespace App\Models;

use DB;
use Illuminate\Database\Eloquent\Model;

class VendorsModel extends Model
{

    public function Getdata()
    {
        $data = DB::table('vendor')->select('*')
            ->where('active', 0)
            ->get();
      
        return $data;
    }

    public function Insert($request)
    {
        $name = $request->name;
        $email = $request->email;

        $vendor = DB::table('vendor')->insert([
            'name' => $name,
            'email' => $email,
        ]);

        return $vendor;
    }
    public function updatedata($request)
    {

        $name = $request->name;
        $email = $request->email;
        $id = $request->id;

        $vendor = DB::table('vendor')->where('id', $id)->update([
            'name' => $name,
            'email' => $email,
        ]);
        return $vendor;
    }
}

<?php

namespace App;
namespace App\Models;

use DB;
use Illuminate\Database\Eloquent\Model;

class MultipleModel extends Model
{

    public function Getdata()
    {
        $data = DB::table('emp')->get();
      
        return $data;
    }
    public function Getdata2()
    {
        $data = DB::connection('mysql2')->table('student')->get();
        return $data;
    }

    
}

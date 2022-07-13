<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccessorsModel extends Model
{
    public $timestamps = false;
    public $table ='wallet';

    public function getnameAttribute($value)
    {
        return ucfirst($value);
    }
    
  
}

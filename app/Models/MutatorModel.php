<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MutatorModel extends Model
{
    public $timestamps = false;
    public $table ='wallet';

    public function setnameAttribute($value)
    {
        return $this->attributes['name']='Mr.'.$value;
    }
  
}

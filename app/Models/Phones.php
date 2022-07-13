<?php
namespace App;

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Phones extends Model
{
    /**
     * Get the user that owns the phone.
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
<?php

namespace App;

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable
{
    use HasFactory,HasApiTokens,Notifiable;

    public $table ='user';
    public $timestamps = false;

   
    protected $fillable = [
        'name', 'email', 'password',
    ];


  
    protected $hidden = [
        'password', 'remember_token',
    ];


   
    public function phone()
    {
        return $this->hasOne('App\Models\Phones');
    }
}


?>

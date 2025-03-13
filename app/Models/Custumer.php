<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Custumer extends Model
{
    protected $table = "custumers";
    protected $fillable = [

        'phone',
        'email' ,
        'addres',
    ];

   
}

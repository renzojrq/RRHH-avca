<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nomina extends Model
{
    //
        protected $table = "nominas";

    protected $fillable = ['fecha','tipo','estatus'];
            
}

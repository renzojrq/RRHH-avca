<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Variable extends Model
{
    //
                protected $table = "variables";

    protected $fillable = ['nombre','valor','monto_fijo','base_calculo','cantidad_dias'];

}

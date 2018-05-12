<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TabuladorSalarial extends Model
{
    protected $table = "tabuladores_salariales";

    protected $fillable = ['nivel', 'sueldo_base','interescala'];



     public function cargos {

                  return $this->hasMany('App\Models\Cargo');
            }

}

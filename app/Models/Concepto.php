<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Concepto extends Model
{
    //
    protected $table = "conceptos";

    protected $fillable = ['tipo_concepto','descripcion','porcentaje','valor_fijo','valor_variable','bono_vacacional','prestaciones','isl'];
            
}

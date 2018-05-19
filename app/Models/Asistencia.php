<?php

namespace App\MOdels;

use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    //
    //
    //
      protected $table = "asistencias";


      protected $fillable = [  
		'h_extras_diurnas',
        'h_faltantes_diurnas',
        'h_extras_nocturnas',
        'h_faltantes_nocturnas',
        'f_h_extras_diurnas',
        'f_h_faltantes_diurnas',
        'f_h_extras_nocturnas',
        'f_h_faltantes_nocturnas',
        'empleado_id'  ];    


 public function empleado()
    {
        return $this->belongsTo('App\Models\Empleado');
    }


}
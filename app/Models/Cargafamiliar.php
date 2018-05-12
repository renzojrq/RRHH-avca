<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Cargafamiliar extends Model
{
    
   protected $table = "cargas_familiares";

    protected $fillable =  [
            
            'nommbre', 			
            'apellido', 		
            'cedula_beneficiario', 
            'fecha_nacimiento', 
            'estatus', 			
            'genero', 			
            'parentesco', 		 
            'empleado_id'		
	        ];


	        public function empleado()
    {
        return $this->belongsTo('App\Models\Empleado');
    }

}

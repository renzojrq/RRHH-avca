<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    //
    
           protected $table = "empleados";

    protected $fillable = [
            
            'foto',
            'nombre',
            'apellido',
            'cedula',                               
            'estado',
            'ciudad',
            'direccion',
            'tipo_discapacidad',
            'email',
            'password',
            'fecha_nacimiento',
            'genero',
            'estado_civil',
            'nacionalidad',
            'telefono_fijo',
            'telefono_movil',
            'cod_empleado',
            'condicion_laboral',
            'banco',
            'cuenta_bancaria',
            'tipo_empleado',
            'nivel_academico',
            'tipo_horario',
            'profesion',
            'cargo_id',
            'perfil_id'
            ];


            public function conceptos (){
                  return $this->belongsToMany('App\Models\Concepto');
            }


            public function cargasfamiliares(){
              return $this->hasMany('App\Models\Cargafamiliar');
             }


             public function cargo () {
                  return $this->belongsTo('App\Models\Cargo');
            }

            public function vouchers(){
              return $this->hasMany('App\Models\Voucher');
             }
}

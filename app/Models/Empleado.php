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
            'genero'=>'masculino',
            'estado_civil'=> 'solter@',
            'nacionalidad'=>'V',
            'telefono_fijo'=> 02936421817,
            'telefono_movil'=>04167834720,
            'cod_empleado'=>123;
            'condicion_laboral'=>'fijo',
            'banco'=> 'banesco',
            'cuenta_bancaria'=>'01340000000000000000',
            'tipo_empleado' => 'administrativo',
            'nivel_academico' =>'profesional',
            'tipo_horario' => 'fijo',
            'profesion' =>'bachiller',
            'cargo_id'  => 1,
            'perfil_id' => 24
            ]

}

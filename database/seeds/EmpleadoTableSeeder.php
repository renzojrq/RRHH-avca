<?php

use Illuminate\Database\Seeder;

class EmpleadoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('empleados')->insert([
           
            [
            
            'foto'=>'foto',
            'nombre'=>'renzo',
            'apellido'=>'rojas',
            'cedula'=>'10708472',                               
            'estado'=>'sucre',
            'ciudad'=>'cumana',
            'direccion'=>'camcamure',
            'tipo_discapacidad' => 'visual',
            'email'=> 'rojas@hotmail.com',
            'password'=>'12345',
            'fecha_nacimiento'=>'1990-10-01',
            'genero'=>'masculino',
            'estado_civil'=> 'solter@',
            'nacionalidad'=>'V',
            'telefono_fijo'=> '02936421817',
            'telefono_movil'=>'04167834720',
            'cod_empleado'=> '123',
            'condicion_laboral'=>'fijo',
            'banco'=> 'banesco',
            'cuenta_bancaria'=>'01340000000000000000',
            'tipo_empleado' => 'administrativo',
            'nivel_academico' =>'profesional',
            'tipo_horario' => 'fijo',
            'profesion' =>'bachiller',
            'cargo_id'  => 1,
            'perfil_id' => 24
            ],
            
             
       ]);


    }
}

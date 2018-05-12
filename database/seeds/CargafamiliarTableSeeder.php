<?php

use Illuminate\Database\Seeder;

class CargafamiliarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        
         DB::table('cargas_familiares')->insert([
      
      		[
            
            'nommbre' 				=> 'hijo1',
            'apellido' 				=> 'hijo1',
            'cedula_beneficiario' 	=> '1111111', 
            'fecha_nacimiento' 		=> '2000-01-01',
            'estatus' 				=> 1,
            'genero' 				=> 'masculino',
            'parentesco' 			=> 'hijos', 
            'empleado_id'			=> 1
	        ],

       		[
            
            'nommbre' 				=> 'hijo2',
            'apellido' 				=> 'hijo2',
            'cedula_beneficiario' 	=> '222222', 
            'fecha_nacimiento' 		=> '2010-01-01',
            'estatus' 				=> 1,
            'genero' 				=> 'masculino',
            'parentesco' 			=> 'hijos', 
            'empleado_id'			=> 1
	        ],

        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class NominaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('nominas')->insert([
        [
        'tipo' 		=> 'regular',
        'estatus' 	=> 'calculada'   
        ],
        [
        'tipo'      => 'vacaciones',
        'estatus'   => 'calculada'   
         ],
        [
        'tipo'    => 'utilidades',
        'estatus'   => 'calculada'   
        ],
        [
        'tipo'    => 'prestaciones',
        'estatus'   => 'calculada'   
        ], 
         [
        'tipo'    => 'liquidacion',
        'estatus'   => 'calculada'   
        ],
        [
        'tipo'    => 'ARC',
        'estatus'   => 'calculada'   
        ],
        [
        'tipo'    => 'especial',
        'estatus'   => 'calculada'   
        ]
      
        ]);
        
    }
}

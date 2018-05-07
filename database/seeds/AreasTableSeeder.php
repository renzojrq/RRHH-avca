<?php

use Illuminate\Database\Seeder;

class AreasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
    	 DB::table('areas')->insert([

    	[
        'nombre'=>'administrativa',
        'slug'  =>'administrativa',
        'foto' 	=>'administrativa'
    	],


    	[
        'nombre'=>'Apoyo logistico',
        'slug'  =>'apoyo-logistico',
        'foto' 	=>'apoyo-logistico'
    	],


		[
        'nombre'=>'operativo',
        'slug'  =>'operativo',
        'foto' 	=>'operativo'
    	],

    	[
        'nombre'=>'Personal de oficina',
        'slug'  =>'personal-oficina',
        'foto' 	=>'Personal de oficina'
    	],
    	[
        'nombre'=>'Telematica',
        'slug'  =>'telematica',
        'foto' 	=>'telematica'
    	],

		[
        'nombre'=>'Tripulacion',
        'slug'  =>'tripulacion',
        'foto' 	=>'tripulacion'
    	],    	


    ]);

	}
}

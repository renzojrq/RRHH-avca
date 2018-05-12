<?php

use Illuminate\Database\Seeder;

class NominaConceptoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i=1;$i<22;$i++){

         DB::table('nominas_conceptos')->insert([
        [
        'nomina_id' 	 => 1,
		'concepto_id' 	 => $i,
        'fecha'          => '2018-01-01'  
    	],
	
      
        ]);
    	}   


    }
}

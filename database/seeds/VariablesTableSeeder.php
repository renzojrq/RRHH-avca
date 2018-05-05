<?php

use Illuminate\Database\Seeder;

class VariablesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
         DB::table('variables')->insert([
           
        [
			'nombre'        => 'Unidad Tributria',
            'valor'			=> null,
            'monto_fijo'    => 850,
            'base_calculo'  => null,
            'cantidad_dias' => null, 
			],

		[
			'nombre'        => 'Hora Extra diurna',
            'valor'			=> 50,
            'monto_fijo'    => null,
            'base_calculo'  => null,
            'cantidad_dias' => null 
			],
		[
			'nombre'        => 'Hora Nocturna',
            'valor'			=> 30,
            'monto_fijo'    => null,
            'base_calculo'  => null,
            'cantidad_dias' => null 
			],
		[
			'nombre'        => 'Día Feriado',
            'valor'			=> 50,
            'monto_fijo'    => null,
            'base_calculo'  => null,
            'cantidad_dias' => null 
			],
		[
			'nombre'        => 'Bono vacacional',
            'valor'			=> null,
            'monto_fijo'    => null,
            'base_calculo'  => null,
            'cantidad_dias' => 90 
			],
		[
			'nombre'        => 'Utilidades',
            'valor'			=> null,
            'monto_fijo'    => null,
            'base_calculo'  => null,
            'cantidad_dias' => 90 
			],
		[
			'nombre'        => 'Base de cálculo Cesta Ticket',
            'valor'			=> null,
            'monto_fijo'    => null,
            'base_calculo'  => 61,
            'cantidad_dias' => null 
			],

        ]);
	       
    }
}

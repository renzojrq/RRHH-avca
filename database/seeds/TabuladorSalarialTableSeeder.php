<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TabuladorSalarialTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('tabuladores_salariales')->truncate();

        DB::table('tabuladores_salariales')->insert([
            [
                'cod_nivel'      => 101,
                'nivel' => 'auxiliar',
                'sueldo_base'=> 1000.00,
                'interescala' => 10,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'cod_nivel'      => 201,
                'nivel' => 'técnico 3',
                'sueldo_base'=> 1100.00,
                'interescala' => 10,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'cod_nivel'      => 202,
                'nivel' => 'técnico 2',
                'sueldo_base'=> 1210.00,
                'interescala' => 10,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'cod_nivel'      => 203,
                'nivel' => 'técnico 1',
                'sueldo_base'=> 1331.00,
                'interescala' => 10,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'cod_nivel'      => 204,
                'nivel' => 'operador de radio',
                'sueldo_base'=> 1464.10,
                'interescala' => 10,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'cod_nivel'      => 205,
                'nivel' => 'jefe de taller',
                'sueldo_base'=> 1610.51,
                'interescala' => 10,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'cod_nivel'      => 206,
                'nivel' => 'jefe base auxiliar',
                'sueldo_base'=> 1771.56,
                'interescala' => 10,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'cod_nivel'      => 207,
                'nivel' => 'especialista aviación 3',
                'sueldo_base'=> 1948.71,
                'interescala' => 10,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'cod_nivel'      => 208,
                'nivel' => 'especialista aviación 2',
                'sueldo_base'=> 2143.59,
                'interescala' => 10,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'cod_nivel'      => 209,
                'nivel' => 'especialista aviación 1',
                'sueldo_base'=> 2357.95,
                'interescala' => 10,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'cod_nivel'      => 210,
                'nivel' => 'despachador de aviones',
                'sueldo_base'=> 2593.74,
                'interescala' => 10,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'cod_nivel'      => 211,
                'nivel' => 'despachador instructor',
                'sueldo_base'=> 2853.11,
                'interescala' => 10,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'cod_nivel'      => '212',
                'nivel' => 'auxiliar de servicio a bordo',
              'sueldo_base'=> 3138.43,
                'interescala' => 10,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'cod_nivel'      => '213',
                'nivel' => 'técnico especialista de abasteciminto',
                'sueldo_base'=> 3452.27,
                'interescala' => 10,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],            
            [
                'cod_nivel'      => '301',
                'nivel' => 'profesional especializado 2',
              'sueldo_base'=> 5178.40,
                'interescala' => 10,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'cod_nivel'      => '302',
                'nivel' => 'profesional especializado 2',
              'sueldo_base'=> 5696.25,
                'interescala' => 10,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'cod_nivel'      => '303',
                'nivel' => 'profesional universitario',
              'sueldo_base'=> 6265.87,
                'interescala' => 10,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'cod_nivel'      => 304,
                'nivel' => 'piloto instructor',
                'sueldo_base'=> 6892.46,
                'interescala' => 10,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'cod_nivel'      => 305,
                'nivel' => 'inspector técnico',
                'sueldo_base'=> 7581.70,
                'interescala' => 10,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'cod_nivel'      => 306,
                'nivel' => 'copiloto',
                'sueldo_base'=> 8339.87,
                'interescala' => 10,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'cod_nivel'      => 307,
                'nivel' => 'piloto',
                'sueldo_base'=> 9173.86,
                'interescala' => 10,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'cod_nivel'      => 401,
                'nivel' => 'jefe de grupo 1',
                'interescala' => 10,
                'sueldo_base'=> 1196,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'cod_nivel'      => 402,
                'nivel' => 'jefe de grupo 2',
                'interescala' => 10,
                'sueldo_base'=> 1553,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'cod_nivel'      => 403,
                'nivel' => 'director',
                'interescala' => 10,
                'sueldo_base'=> 2014.9,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]
        ]);
    }
}

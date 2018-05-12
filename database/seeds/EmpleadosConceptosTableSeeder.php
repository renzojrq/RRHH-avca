<?php

use Illuminate\Database\Seeder;

class EmpleadosConceptosTableSeeder extends Seeder
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
        DB::table('concepto_empleado')->insert([
        [
        'empleado_id'  =>'1',
        'concepto_id'  =>$i
        ],
    ]);
        }

    }
}

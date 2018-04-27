<?php

use Illuminate\Database\Seeder;

class TipoExpedienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('tipo_expediente')->insert([
           
            ['nombre'  => 'amonestaciones'],
            ['nombre'  => 'reconocimientos'],
            ['nombre'  => 'formacion'],
            ['nombre'  => 'nombramiento'],
            ['nombre'  => 'accidente laboral'],
            ['nombre'  => 'licencias']
             
       ]);


    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsistenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asistencias', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('h_extras_diurnas');
            $table->integer('h_faltantes_diurnas');
            $table->integer('h_extras_nocturnas');
            $table->integer('h_faltantes_nocturnas');

            $table->integer('f_h_extras_diurnas');
            $table->integer('f_h_faltantes_diurnas');
            $table->integer('f_h_extras_nocturnas');
            $table->integer('f_h_faltantes_nocturnas');

            $table->integer('empleado_id')->unsigned();

            $table->foreign('empleado_id')->references('id')->on('empleados');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asistencias');
    }
}

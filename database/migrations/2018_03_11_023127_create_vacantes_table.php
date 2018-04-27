<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVacantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacantes', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha_publicacion');
            $table->enum('nivel_academico', ['bachiller', 'tsu', 'licdo', 'licda', 'ing', 'm.sc', 'dr', 'dra']);
            $table->boolean('estatus')->default(1);
            $table->integer('cargo_id')->unsigned();
            $table->integer('sucursal_id')->unsigned();
            $table->foreign('cargo_id')->references('id')->on('cargos');
            $table->foreign('sucursal_id')->references('id')->on('sucursales');
        
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
        Schema::dropIfExists('vacantes');
    }
}

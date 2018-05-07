<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCargosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cargos', function (Blueprint $table) {
            $table->increments('id');
            $table->mediumText('titulo');            
            $table->string('perfil')->nullable();
            $table->integer('tabulador_salarial_id')->unsigned();
            $table->foreign('tabulador_salarial_id')->references('id')->on('tabuladores_salariales');

            $table->integer('area_id')->unsigned();
            $table->foreign('area_id')->references('id')->on('areas');
            
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
        Schema::dropIfExists('cargos');
    }
}

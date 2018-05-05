<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNominasConceptosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nominas_conceptos', function (Blueprint $table) {
            $table->increments('id');
$table->integer('nomina_id')->unsigned();
            $table->integer('concepto_id')->unsigned();
            
            $table->foreign('nomina_id')->references('id')->on('nominas');

            $table->foreign('concepto_id')->references('id')->on('conceptos');
            
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
        Schema::dropIfExists('nominas_conceptos');
    }
}

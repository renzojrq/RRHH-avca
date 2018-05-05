<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConceptosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conceptos', function (Blueprint $table) {
            $table->increments('id');

            $table->string('tipo_concepto');
            $table->string('descripcion',255);
            $table->float('porcentaje')->nullable();
            $table->double('valor_fijo')->nullable();
            $table->float('valor_variable')->nullable();
            $table->enum('bono_vacacional',['si','no']);
            $table->enum('utilidades',['si','no']);
            $table->enum('prestaciones',['si','no']);
            $table->enum('isl',['si','no']);
                      
            
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
        Schema::dropIfExists('conceptos');
    }
}

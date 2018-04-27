<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAspirantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aspirantes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cedula_aspirante')->unique();
            $table->string('apellido',50);
            $table->string('nombre',50);
            $table->string('email',60)->unique();
            $table->enum('nivel_academico', ['bachiller', 'tsu', 'licdo', 'licda', 'ing', 'm.sc', 'dr', 'dra']);
            $table->string('direccion',255);
            $table->string('estado',50);
            $table->string('ciudad',50);
            $table->string('telefono_movil',50);
            $table->string('telefono_fijo',50);
            $table->string('curriculum');
            $table->boolean('estatus');
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
        Schema::dropIfExists('aspirantes');
    }
}

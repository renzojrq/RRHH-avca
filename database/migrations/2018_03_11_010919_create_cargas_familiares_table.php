<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCargasFamiliaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cargas_familiares', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nommbre');
            $table->string('apellido');
            $table->string('cedula_beneficiario');
            $table->date('fecha_nacimiento');
            $table->integer('estatus');
            $table->enum('genero',['masculino','femenino']);
            $table->enum('parentesco', ['hijos', 'padres', 'conyugue']);
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
        Schema::dropIfExists('cargas_familiares');
    }
}

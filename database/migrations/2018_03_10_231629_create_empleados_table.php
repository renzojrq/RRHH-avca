<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('foto');
            $table->string('nombre');
            $table->string('apellido');
            $table->integer('cedula')->unique();                                
            $table->string('estado');
            $table->string('ciudad');
            $table->string('direccion');
            $table->enum('tipo_discapacidad', ['trastorno del habla y lenguaje', 'visual', 'motriz', 'auditiva']);
            $table->string('email', 60)->unique();
            $table->string('password', 60);
            $table->date('fecha_nacimiento');
            $table->enum('genero', ['femenino', 'masculino']);
            $table->enum('estado_civil', ['solter@', 'casad@', 'divorciad@', 'viud@', 'concubin@']);
            $table->enum('nacionalidad', ['V','E']);
            $table->string('telefono_fijo', 15);
            $table->string('telefono_movil', 15);
            $table->string('cod_empleado')->unique();
            $table->enum('condicion_laboral', ['fijo', 'contratado', 'inactivo', 'suplente']);
            $table->string('banco', 100);
            $table->bigInteger('cuenta_bancaria');
            $table->enum('tipo_empleado', ['administrativo', 'operativo', 'tripulacion']);
            $table->enum('nivel_academico', ['bachiller', 'tsu', 'profesional', 'especialista 1', 'especialista 2']);
            $table->enum('tipo_horario', ['fijo', 'rotativo']);
            $table->string('profesion');
            $table->integer('cargo_id')->unsigned();
            $table->integer('perfil_id')->unsigned();
            $table->timestamps();       

            $table->foreign('cargo_id')->references('id')->on('cargos');
                 

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
}

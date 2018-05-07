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
            $table->integer('cedula')->unique();
            $table->enum('nacionalidad', ['v', 'e']);
            $table->date('fecha_nacimiento');
            $table->enum('sexo', ['f', 'm']);
            $table->string('apellido',50);
            $table->string('nombre',50);
            $table->string('email',60)->unique();
            $table->string('telefono_movil',50);
            $table->string('telefono_fijo',50);
            $table->string('curriculum');
            $table->enum('estatus', [
                'registrados', 'verificados', 'convocados', 'entrevistados', 'seleccionados', 'por contratar'
            ]);

            $table->integer('vacante_id')->unsigned();
            $table->foreign('vacante_id')->references('id')->on('vacantes');
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

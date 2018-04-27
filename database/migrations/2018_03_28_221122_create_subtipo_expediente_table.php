<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubtipoExpedienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subtipo_expediente', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->integer('tipo_expediente_id')->unsigned();
            $table->foreign('tipo_expediente_id')->references('id')->on('tipo_expediente');
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
        Schema::dropIfExists('subtipo_expediente');
    }
}

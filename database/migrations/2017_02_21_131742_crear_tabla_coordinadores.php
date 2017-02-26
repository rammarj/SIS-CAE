<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaCoordinadores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('coordinadores', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('carrera_id')->unsigned()->unique();
            $table->integer('usuario_id')->unsigned()->unique();

            //referencias
            $table->foreign('carrera_id')->references('id')->on('carreras');
            $table->foreign('usuario_id')->references('id')->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('coordinadores');
    }
}

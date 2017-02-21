<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaAlumnos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('alumnos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('carrera_id')->unsigned();
            $table->integer('usuario_id')->unsigned()->unique();
            $table->integer('tutor_id')->unsigned();
            $table->string('matricula',20)->unique();
            //referencias
            $table->foreign('carrera_id')->references('id')->on('carreras');
            $table->foreign('usuario_id')->references('id')->on('usuarios');
            $table->foreign('tutor_id')->references('id')->on('tutores');
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
        Schema::dropIfExists('alumnos');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaVotos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('votos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('solicitud_id')->unsigned();
            $table->integer('usuario_id')->unsigned();
            $table->boolean('voto'); //a favor, o en contra
            $table->timestamps();
            //referencias
            $table->foreign('solicitud_id')->references('id')->on('solicitudes');
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
        Schema::dropIfExists('votos');
    }
}

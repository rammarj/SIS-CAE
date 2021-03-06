<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('rol_id')->unsigned();
            $table->string('nombre', 50);
            $table->string('apellido_paterno',50);
            $table->string('apellido_materno',50);
            $table->string('email',60)->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            //relaciones
            $table->foreign('rol_id')->references('id')->on('roles');
        });

        DB::insert('insert into usuarios (rol_id, nombre, apellido_paterno, apellido_materno, email, password) values (?, ?, ?, ?, ?, ?)', ['1','Admin', 'Admin', 'Admin', 'cae@upp.edu.mx', bcrypt('admin')]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('usuarios');
    }
}

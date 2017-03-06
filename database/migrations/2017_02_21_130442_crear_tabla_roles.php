<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaRoles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rol',50)->unique();
        });

        DB::insert('insert into roles (rol) values ( ?)', ['Administrador']);
        DB::insert('insert into roles (rol) values ( ?)', ['Alumno']);
        DB::insert('insert into roles (rol) values ( ?)', ['Coordinador']);
        DB::insert('insert into roles (rol) values ( ?)', ['Tutor']);
        DB::insert('insert into roles (rol) values ( ?)', ['']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('roles');
    }
}

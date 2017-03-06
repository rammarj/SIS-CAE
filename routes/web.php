<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::group(['prefix' => 'usuario'], function () {
    Route::get('/', 'UsuarioController@index')->name('home_usuario');
    Route::get('perfil', 'UsuarioController@perfil')->name('perfil_usuario');
    
    //admin
    Route::resource('usuarios','Usuarios\Admin\UsuariosController', ['names' => [
        'index' => 'usuarios.index',
        'show'  => 'usuarios.mostrar',
        'create'  => 'usuarios.crear',
        'edit'  => 'usuarios.editar',
        'destroy'  => 'usuarios.eliminar'
    ]]);
});

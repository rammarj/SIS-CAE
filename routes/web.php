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
    
    //obtención de info
    Route::get('get-tutores', 'InfoController@getTutores');
    Route::get('get-carreras', 'InfoController@getCarreras');

    //configuracion
    Route::group(['prefix' => 'configuracion'], function () {
        Route::get('/', 'Usuarios\Admin\AdminController@configuracion')->name('admin_configuracion');
        Route::resource('carreras','Usuarios\Admin\CarrerasController', ['names' => [
            'index' => 'carreras_index',
            'show'  => 'carreras_mostrar',
            'store' => 'carreras_guardar',
            'create'  => 'carreras_crear',
            'edit'  => 'carreras_editar',
            'update'  => 'carreras_actualizar',
            'destroy'  => 'carreras_eliminar'
        ]]);
    });
    //admin
    Route::resource('usuarios','Usuarios\Admin\UsuariosController', ['names' => [
        'index' => 'usuarios_index',
        'show'  => 'usuarios_mostrar',
        'store' => 'usuarios_guardar',
        'create'  => 'usuarios_crear',
        'edit'  => 'usuarios_editar',
        'update'  => 'usuarios_actualizar',
        'destroy'  => 'usuarios_eliminar'
    ]]);

    Route::resource('solicitudes','Usuarios\Admin\SolicitudesController', ['names' => [
        'index' => 'admin_solicitudes_index',
        'show'  => 'admin_solicitudes_mostrar',
        'create'  => 'admin_solicitudes_crear',
        'edit'  => 'admin_solicitudes_editar',
        'update'  => 'carreras_actualizar',
        'destroy'  => 'admin_solicitudes_eliminar'
    ]]);

});

<?php

namespace App\Http\Controllers\Usuarios\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsuariosController extends \App\Http\Controllers\UsuarioController
{
    public function __construct() {
        parent::__construct();
    }
    //
    public function index() {
        $usuarios = \App\User::paginate(10);
        return view('usuario.admin.usuarios.index',['usuarios'=>$usuarios]);
    }
    
    public function show($id) {
        $usuario = \App\User::find($id);
        return view('usuario.admin.usuarios.show',['usuario'=>$usuario]);
    }
    //formulario de creacion del usuario
    public function create() {
        
    }
    //peticion de creacion de usuario
    public function store(Request $request) {
        
    }
    //peticion de actualizacion
    public function update(Request $request) {
        
    }
    //peticion de aliminacion
    public function destroy($id) {
        
    }
}

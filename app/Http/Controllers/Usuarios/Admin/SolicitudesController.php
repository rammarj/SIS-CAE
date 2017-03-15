<?php

namespace App\Http\Controllers\Usuarios\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SolicitudesController extends \App\Http\Controllers\UsuarioController
{
    //
    public function __construct() {
        parent::__construct();
    }
    //
    public function index() {
        $solicitudes = \App\Solicitud::paginate(10);
        return view('usuario.admin.solicitudes.index',['solicitudes'=>$solicitudes]);
    }
    
    public function show($id) {
        $solicitud = \App\Solicitud::find($id);
        return view('usuario.admin.solicitudes.show',['solicitud'=>$solicitud]);
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

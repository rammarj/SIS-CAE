<?php

namespace App\Http\Controllers\Usuarios\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Rol;
use App\Tutor;
use App\Coordinador;
use App\Carrera;
use App\Alumno;

class UsuariosController extends \App\Http\Controllers\UsuarioController
{
    public function __construct() {
        parent::__construct();
    }

    //
    public function index() {
        $usuarios = User::paginate(10);
        return view('usuario.admin.usuarios.index', ['usuarios'=>$usuarios]);
    }
    
    public function show($id) {
        $usuario = User::find($id);
        return view('usuario.admin.usuarios.show', ['usuario' => $usuario]);
    }
    //formulario de creacion del usuario
    public function create() {
        $roles = Rol::all();
        return view('usuario.admin.usuarios.create', ['roles'=>$roles]);
    }
    //peticion de creacion de usuario
    public function store(Request $request) {
        $this->crearActualizar($request);
    }
    //peticion de actualizacion
    public function update(Request $request, $id) {
        $this->crearActualizar($request, false, $id);
    }
    //peticion de aliminacion
    public function destroy($id) {
        $user = User::find($id);
        if ($user) {
            $user->destroy();
        }
    }

    private function crearActualizar( $request, $crear = true, $id = NULL){ //true para crear. False para actualizar
        $this->validate($request, [
            'nombre' => 'required|max:50|min:4|alpha',
            'apellido_paterno' => 'required|max:50|min:4|alpha',
            'apellido_materno' => 'required|max:50|min:4|alpha',
            'email' => 'required|email|max:60|min:6|unique:usuarios',
            'password' => 'required|min:6|confirmed',
            'rol' => 'required|exists:roles,id',
            // en caso de ser alumno o coordinador
            'matricula' => 'requiredif:rol,2', //requerido cuando es un alumno
            'carrera' => 'requiredif:rol,2,3' //requerido cuando el rol es 2 (Alumno), 3 (Coordinador)

        ]);
       

        $user = NULL;
        if ($crear) {
            $user = new User;
        }
        else{
            $user = User::find($id);
        }
        $user->nombre = $request->nombre;
        $user->apellido_materno = $request->apellido_materno;
        $user->apellido_paterno = $request->apellido_paterno;
        $user->email = $request->email;
        $user->password = $request->password;
        $rol = Rol::find($request->rol);
        $user->rol()->associate($rol);

        //tablas que dependen de usuario
        if (in_array(strtolower($rol->rol), ['alumno', 'coordinador', 'tutor'] )) {
            $carrera = Carrera::find($request->carrera);
            if (strtolower($rol->rol) == 'alumno' ) {
                $alumno = ($crear)? new Alumno() : Alumno::where('user_id', $id);
                $alumno->matricula = $request->matricula;
                $alumno->carrera()->associate($carrera);
                $alumno->usuario()->associate($user);
                $alumno->save(); //guardar el alumno                
            }
            else if (strtolower($rol->rol) == 'coordinador' ) { 
                $coordinador = ($crear)? new Coordinador() : Coordinador::where('user_id', $id);
                $coordinador->carrera()->associate($carrera);
                $coordinador->save();
            }
            else if ($crear) {
                $tutor = new Tutor;
                $tutor->usuario()->associate($user);
                $tutor->save();
            }
        }

        $user->save(); //guardar el usuario
    }
}

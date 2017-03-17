<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Carrera;
use App\Rol;

class UsuarioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index() {
        return view('usuario.index');
    }
 
    public function perfil() {
        $user = Auth::user();
        $carreras = Carrera::all();
        $roles = Rol::all();
        return view('usuario.perfil', ['usuario'=>$user, 'carreras'=>$carreras, 'roles'=>$roles]);
    }
    
}

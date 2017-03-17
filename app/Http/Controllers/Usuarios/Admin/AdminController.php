<?php

namespace App\Http\Controllers\Usuarios\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    //
    public function configuracion(){
    	$carreras = \App\Carrera::all();
    	return view('usuario.admin.configuracion', ['carreras'=>$carreras]);
    }
}

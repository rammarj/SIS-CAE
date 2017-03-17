<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoController extends Controller {
    /**
     * Devuelve todos los usuarios tutores en formato JSON
     */
    public function getTutores() {
        $tutores = \App\Tutor::all();
        $usuarios = [];
        foreach ($tutores as $tutor) {
            $usuarios[] = $tutor->usuario;
        }
        return response()->json(['tutores'=>$usuarios]);
    }    

    
    
    
}

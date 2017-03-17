<?php

namespace App\Http\Controllers\Usuarios\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Carrera;

class CarrerasController extends Controller {

    private function validar(Request $data) {
        $this->validate($data, [
            'carrera' => 'required|max:70|min:4|alpha'
        ]);
    }

    public function index() {
        $carreras = Carrera::all();
        return response()->json(['carreras' => $carreras]);
    }

    public function show($id) {
        $carrera = Carrera::find(intval($id));
        return response()->json(['carrera' => $carrera]);
    }

    public function store(Request $request) {
        $this->validar($request);
        $carrera = new Carrera;
        $carrera->carrera = $request->carrera;
        $carrera->save();
    }

    public function update(Request $reques, $id) {
        $this->validar($request);
        $carrera = Carrera::find(intval($id));
        if ($carrera) {
            $carrera->carrera = $request->carrera;
            $carrera->save();
        }
    }

}

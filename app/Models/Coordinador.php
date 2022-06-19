<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coordinador extends Model
{
    //tabla de base dedatos    
    protected $table = 'coordinadores';
    
    //relacion con la tabla usuarios
    public function usuario()
    {
        return $this->belongsTo('App\Models\User', 'usuario_id');
    }    
    
    //relacion con la tabla carreras
    public function carrera() {
        return $this->belongsTo('App\Models\Carrera', 'carrera_id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coordinador extends Model
{
    //tabla de base dedatos    
    protected $table = 'coordinadores';
    
    //relacion con la tabla usuarios
    public function usuario()
    {
        return $this->belongsTo('App\User', 'usuario_id');
    }    
    
    //relacion con la tabla carreras
    public function carrera() {
        return $this->belongsTo('App\Carrera', 'carrera_id');
    }
}

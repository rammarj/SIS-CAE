<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    //tabla de base dedatos    
    protected $table = 'tutores';
    
    //relacion con la tabla usuarios
    public function usuario()
    {
        return $this->belongsTo('App\User', 'usuario_id');
    }
    
    //relacion con la tabla alumnos
    public function alumnos() {
        return $this->hasMany('App\Alumno', 'usuario_id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    //tabla de base dedatos    
    protected $table = 'alumnos';
    
    //relacion con la tabla usuarios
    public function getUsuario()
    {
        return $this->belongsTo('App\User', 'usuario_id');
    }
    
    //relacion con la tabla carreras
    public function carrera() {
        return $this->belongsTo('App\Carrera', 'carrera_id');
    }
    
    //relacion con la tabla tutores
    public function tutor() {
        return $this->belongsTo('App\Tutor', 'tutor_id');
    }
    
    public function solicitudes() {
        return $this->hasMany('App\Solicitud', 'alumno_id');
    }
    
}

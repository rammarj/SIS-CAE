<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    //tabla de base dedatos    
    protected $table = 'solicitudes';
        
    //relacion con la tabla votos
    public function votos() {
        return $this->hasMany('App\Voto', 'solicitud_id');
    }
    
    public function alumno() {
        return $this->belongsTo('App\Alumno', 'alumno_id');
    }
}

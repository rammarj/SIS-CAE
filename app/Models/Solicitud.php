<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    //tabla de base dedatos    
    protected $table = 'solicitudes';
        
    //relacion con la tabla votos
    public function votos() {
        return $this->hasMany('App\Models\Voto', 'solicitud_id');
    }
    
    public function alumno() {
        return $this->belongsTo('App\Models\Alumno', 'alumno_id');
    }
}

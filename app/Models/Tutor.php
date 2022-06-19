<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    //tabla de base dedatos    
    protected $table = 'tutores';
    
    protected $hidden = [
        'created_at', 'updated_at'
    ];
    //relacion con la tabla usuarios
    public function usuario()
    {
        return $this->belongsTo('App\User', 'usuario_id');
    }
    
    //relacion con la tabla alumnos
    public function alumnos() {
        return $this->hasMany('App\Models\Alumno', 'usuario_id');
    }
}

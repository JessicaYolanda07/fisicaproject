<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProgramacionLabestu extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User', 'id_usu_estudiante');
    }
    public function materia()
    {
        return $this->belongsTo('App\Materia', 'id_materia_lab');
    }
    public function users()
    {
        return $this->hasMany('App\User');
    }
}

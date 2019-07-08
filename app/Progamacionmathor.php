<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Progamacionmathor extends Model
{
   public function materia()
    {
        return $this->belongsTo('App\Materia', 'id_materia');

    }
    public function horario()
    {
        return $this->belongsTo('App\Horario', 'id_horario');
    }
}

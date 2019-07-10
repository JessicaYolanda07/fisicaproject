<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    public function progamacionmathors()
    {
        return $this->hasMany('App\Progamacionmathor');
    }
}

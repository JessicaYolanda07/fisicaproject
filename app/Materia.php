<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    public function progamacionmathors()
    {
        return $this->hasMany('App\Progamacionmathor');
    }
}

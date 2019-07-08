<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
   public function progamacionmathors()
   {
       return $this->hasMany('App\Progamacionmathor');
   }
}

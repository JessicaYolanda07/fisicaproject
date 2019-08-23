<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProgramacionNormalEstu extends Model
{
    /*public function users()
    {
        return $this->belongsTo('App\User', 'id_usuario_est');
    }*/
    public function users()
    {
        return $this->hasMany('App\User');
    }
}

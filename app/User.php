<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    //relaciones para la programacion del estudiante
    /*public function programacionlabestu()
    {
        return $this->hasMany('App\ProgramacionLabestu', 'id_usu_estudiante');
    }
    public function programacionnormalestu()
    {
        return $this->hasMany('App\ProgramacionNormalEstu', 'id_usuario_est');
    }*/
    public function programacionlabestu()
    {
        return $this->belongsTo('App\ProgramacionLabestu', 'id');
    }
    public function programacionnormalestu()
    {
        return $this->belongsTo('App\ProgramacionNormalEstu', 'id');
    }

}

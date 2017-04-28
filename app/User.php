<?php

namespace intranet;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use intranet\Modelos\Cargos;
use intranet\Modelos\INT_TRABAJADORES;
use intranet\Modelos\Noticias;
use intranet\Clases\Fechas;

use Illuminate\Support\Facades\DB;
use intranet\Modelos\Sucursales;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'INT_USUARIOS';
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    // relaciones

    //|INT_TRABAJADORES| - |INT_USUARIOS|
    public function int_trabajadores()
    {
        return $this->hasOne( INT_TRABAJADORES::class, 'CORREOELEC', 'email' );
    }


    // | noticias | >- | users | // el usuario tiene muchas noticias
    public function noticias()
    {
        return $this->hasMany(Noticias::class,'user_id', 'id');
    }


}

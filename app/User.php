<?php

namespace intranet;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use intranet\Modelos\Cargos;
use intranet\Modelos\Noticias;
use intranet\Clases\Fechas;

use Illuminate\Support\Facades\DB;
use intranet\Modelos\Sucursales;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    // relaciones
    // | noticias | >- | users | // el usuario tiene muchas noticias
    public function noticias()
    {
        return $this->hasMany(Noticias::class,'user_id', 'id');
    }
    // | users |>-| cargos |
    public function cargos()
    {
        return $this->belongsTo( Cargos::class, 'cargo_id', 'id' );
    }

    // | users |>-| sucursales |
    public function sucursales()
    {
        return $this->belongsTo( Sucursales::class, 'sucursal_id', 'id' );
    }

    public function traeUsuariosCumpleaniosSemana()
    {

        $fecha = new Fechas();

        $mesInicio   = $fecha->traeMesInicioSemanaCumpleanio();
        $mesFin      = $fecha->traeMesTerminoSemanaCumpleanio();

        $diaInicio   = $fecha->traeDiaInicioSemanaCumpleanio();
        $diaFin      = $fecha->traeDiaTerminoSemanaCumpleanio();

        $usuarios = User::whereBetween( DB::raw(" MONTH(fecha_nacimiento)"),  [$mesInicio, $mesFin] )
            ->whereBetween( DB::raw(" DAY(fecha_nacimiento)"),  [$diaInicio, $diaFin] )->get();

        return $usuarios;

    }
}

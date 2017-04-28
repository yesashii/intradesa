<?php

namespace intranet\Modelos;

use Illuminate\Database\Eloquent\Model;
use intranet\User;

use intranet\Clases\Fechas;

use Illuminate\Support\Facades\DB;

class INT_TRABAJADORES extends Model
{
    //VISTA!!!!!

    protected $table = 'INT_TRABAJADORES';

    // | INT_USUARIOS |-| INT_TRABAJADORES |

    public function int_usuarios()
    {
       return $this->hasOne( User::class, 'CORREOELEC', 'email' );
      //  return $this->hasOne('App\Phone', 'foreign_key', 'local_key');
    }

    public function traeUsuariosCumpleaniosSemana()
    {

        //19631028
        $fecha = new Fechas();

        $mesInicio   = $fecha->traeMesInicioSemanaCumpleanio();
        $mesFin      = $fecha->traeMesTerminoSemanaCumpleanio();

        $diaInicio   = $fecha->traeDiaInicioSemanaCumpleanio();
        $diaFin      = $fecha->traeDiaTerminoSemanaCumpleanio();

        $usuarios = INT_TRABAJADORES::whereBetween( DB::raw("SUBSTRING(cast(FECHA_NACIMIENTO as varchar),5,2)"),  [$mesInicio, $mesFin] )
            ->whereBetween( DB::raw(" SUBSTRING(cast(FECHA_NACIMIENTO as varchar),7,2)"),  [$diaInicio, $diaFin] )
            ->where('FECHA_NACIMIENTO','>',0)
            ->where('CORREOELEC','<>','')
            ->orderBy( DB::raw("DAY(convert(datetime,cast(FECHA_NACIMIENTO as varchar)))") , 'desc')
            ->get();

        return $usuarios;

    }

}

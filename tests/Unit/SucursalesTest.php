<?php

namespace Tests\Unit;

use Tests\TestCase;

use intranet\Modelos\Sucursales;
use intranet\User;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SucursalesTest extends TestCase
{
    /**
     *
     */
    public function prueba_relacion_entre_sucursales_y_usuarios()
    {

        // maximo de las sucursales

        $maxSucursal        = Sucursales::all()->max('id');

        $sucursal_id        = rand(1,$maxSucursal);

        $usuarios           = User::where('id_sucursal', $sucursal_id);
        $cuentaUsuarios     = $this->count($usuarios);

        $sucursales         = Sucursales::find(1);

        $usuarios_2         = $sucursales->users();
        $cuentaUsuarios2    = $this->count($usuarios_2);

        if( isset($usuarios) and isset($sucursales))
        {
            $this->assertEquals($cuentaUsuarios,$cuentaUsuarios2);
        }else{
            $this->assertTrue( true );
        }

    }
}

<?php

namespace Tests\Unit;

use Tests\TestCase;
use intranet\User;
use intranet\Modelos\Noticias;

use Carbon\Carbon;
use intranet\Clases\Fechas;

use Illuminate\Support\Facades\DB;


use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UsersTest extends TestCase
{

       /**
        * @test
        */
       public function un_usuario_tiene_una_o_varias_noticias()
       {
           $usuario     = User::find(1);
           $noticias    = Noticias::where('user_id',1)->get();

           $this->assertEquals( count( $usuario->noticias ), count($noticias) );
       }


    /**
     * @test
     */
       public function prueba_el_ultimo_usuario_de_traeUsuariosCumpleaniosSemana()
       {
           // traigo el inicio y fin de la semana
           $fecha = new Fechas();
           $mesInicio   = $fecha->traeMesInicioSemanaCumpleanio();
           $mesFin      = $fecha->traeMesTerminoSemanaCumpleanio();

           $diaInicio   = $fecha->traeDiaInicioSemanaCumpleanio();
           $diaFin      = $fecha->traeDiaTerminoSemanaCumpleanio();

           // traigo a los usuarios que entrega la funcion
           $Usuario = new User();

           $usuarios    = $Usuario->traeUsuariosCumpleaniosSemana();

           foreach ( $usuarios as $usuario )
           {
               $fechaNacimiento = $usuario->fecha_nacimiento;
           }
           // compruebo si el ultimo usuario realmente esta en los rangos de inicio y fin de la semana

           if( isset($fechaNacimiento) )
           {
               $diaNacimiento = substr( $fechaNacimiento,-2 );
               $mesNacimiento = substr( $fechaNacimiento,-5,2 );

               $verdad_1    = $mesInicio    <= $mesNacimiento;
               $verdad_2    = $mesFin       >= $mesNacimiento;
               $verdad_3    = $diaInicio    <= $diaNacimiento;
               $verdad_4    = $diaFin       >= $diaNacimiento;

               $this->assertTrue( $verdad_1&&$verdad_2&&$verdad_3&&$verdad_4 );
           }else{
               $this->assertTrue(true);
           }

       }

}

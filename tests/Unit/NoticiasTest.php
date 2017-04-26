<?php

namespace Tests\Unit;

use intranet\User;
use Tests\TestCase;
use intranet\Modelos\Noticias;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class NoticiasTest extends TestCase
{


    /**
     * @test
     */
    public function una_o_varias_noticias_pertenecen_a_un_usuario()
    {
        $noticias   = Noticias::where('user_id', 1)->get();
        $usuario    = User::find(1);

        $this->assertEquals( $noticias[0]->users, $usuario );

    }

    /**
     * @test
     */
    public function prueba_si_la_funcion_traeTodasLasNoticias_realmente_las_trae_todas()
    {
        $noticias = Noticias::traeTodasLasNoticias();
        $conteo1 = count($noticias);
        $conteo2 = count(Noticias::all());

        $this->assertEquals( $conteo1,$conteo2 );
    }


}

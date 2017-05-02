<?php

namespace intranet\Http\Controllers;

use Illuminate\Http\Request;

use intranet\Modelos\INT_TRABAJADORES;

class ContactoController extends Controller
{
    //

    public function listar()
    {
        $trabajadores = INT_TRABAJADORES::todosPaginados();

       // dd($trabajadores);

        return view('contacto.lista_contactos', compact('trabajadores'));
    }

    public function buscar( Request $request )
    {

        $Trabajadores = new INT_TRABAJADORES();
        $trabajadores = $Trabajadores->buscar( $request );

        dd($trabajadores);

    }
}

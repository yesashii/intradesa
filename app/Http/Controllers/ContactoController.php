<?php

namespace intranet\Http\Controllers;

use Illuminate\Http\Request;

use intranet\Modelos\INT_TRABAJADORES;

class ContactoController extends Controller
{
    //

    public function listar()
    {
        $trabajadores   = INT_TRABAJADORES::todosPaginados();
        $paginar        = true;

       // dd($trabajadores);

        return view('contacto.lista_contactos', compact('trabajadores', 'paginar'));
    }

    public function buscar( Request $request )
    {


        $Trabajadores = new INT_TRABAJADORES();
        $trabajadores = $Trabajadores->buscar( $request );
        $paginar        = false;

        // dd($trabajadores);

        return view('contacto.lista_contactos', compact('trabajadores', 'paginar'));

    }


    public function detalleusuario( $id )
    {
        $Trabajador = new INT_TRABAJADORES();
        $trabajador = $Trabajador->traeDetalleTrabajador($id);

        return view('contacto.detalle_usuario', compact('trabajador'));

    }
}

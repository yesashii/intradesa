<?php

namespace intranet\Http\Controllers;

use Illuminate\Http\Request;

class NosotrosController extends Controller
{
    //

    public function misionvision()
    {
        return view('nosotros.misionvision');
        //return view('contacto.lista_contactos', compact('trabajadores', 'paginar'));
    }

    public function organigrama()
    {
        return view('nosotros.organigrama');
    }

    public function historia()
    {
        return view('nosotros.historia');
    }

}

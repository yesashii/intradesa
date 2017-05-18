<?php

namespace intranet\Http\Controllers;

use Illuminate\Http\Request;
use intranet\Modelos\INT_ORGANIGRAMA;

class NosotrosController extends Controller
{
    //

    public function mision()
    {
        return view('nosotros.mision');
    }

    public function valores()
    {
        return view('nosotros.valores');
    }

    public function organigrama($id)
    {
        $padre = INT_ORGANIGRAMA::find($id);

        return view('nosotros.organigrama_2', compact('padre'));

    }

    public function historia()
    {
        return view('nosotros.historia');
    }

}

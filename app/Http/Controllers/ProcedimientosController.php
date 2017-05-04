<?php

namespace intranet\Http\Controllers;

use Illuminate\Http\Request;

class ProcedimientosController extends Controller
{
    //


    public function reglamentoInterno()
    {
        return view('procedimientos.reglamento');
    }

}

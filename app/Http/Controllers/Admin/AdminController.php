<?php

namespace intranet\Http\Controllers\Admin;

use Illuminate\Http\Request;
use intranet\Http\Controllers\Controller;
use intranet\Modelos\INT_CERTIFICADOS;

class AdminController extends Controller
{
    //
    public function index()
    {
        return view('administracion.index');
    }

}

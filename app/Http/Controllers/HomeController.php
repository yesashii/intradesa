<?php

namespace intranet\Http\Controllers;

use Illuminate\Http\Request;
use intranet\Modelos\Noticias;



use intranet\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $Usuario = new User();
        $cumpleSemanaUsuarios =     $Usuario->traeUsuariosCumpleaniosSemana();

        $noticias = Noticias::traeTodasLasNoticias();
        return view('home', compact('noticias','cumpleSemanaUsuarios'));
    }
}

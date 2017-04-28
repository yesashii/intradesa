<?php

namespace intranet\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use intranet\Modelos\Noticias;

use intranet\Modelos\INT_TRABAJADORES;



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
        $trabajadores = User::find(Auth::user()->id);
        if( isset($trabajadores->int_trabajadores->CORREOELEC) )
        {
            $Usuario = new INT_TRABAJADORES();
            $cumpleSemanaUsuarios =     $Usuario->traeUsuariosCumpleaniosSemana();
           // dd($cumpleSemanaUsuarios);

            $noticias = Noticias::traeTodasLasNoticias();
            return view('home', compact('noticias','cumpleSemanaUsuarios'));
        }else{

            Auth::logout();
            return view('ctaeliminada');
        }
    }
}

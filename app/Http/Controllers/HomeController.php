<?php

namespace intranet\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use intranet\Modelo\INT_NOTICIAS;

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
            $Usuario                    = new INT_TRABAJADORES();
            $cumplesDia                 = $Usuario->traeCumpleaniosDia();
            $cumpleSemanaUsuarios       = $Usuario->traeUsuariosCumpleaniosSemana();
            $cumplesMes                 = $Usuario->traeCumpleaniosMes();
           // dd($cumpleSemanaUsuarios);

            $noticias = INT_NOTICIAS::paginate(5);
            return view('home', compact('noticias','cumpleSemanaUsuarios','cumplesDia','cumplesMes'));
        }else{

            Auth::logout();
            return view('ctaeliminada');
        }
    }
}

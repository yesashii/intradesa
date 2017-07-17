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
            $dollar                     = $this->traeDollar();
           // dd($cumpleSemanaUsuarios);

            $noticias = INT_NOTICIAS::where('activa', 1)->orderBy('fecha', 'desc')->get();
            return view('home.index', compact('noticias','cumpleSemanaUsuarios','cumplesDia','cumplesMes','dollar'));
        }else{

            Auth::logout();
            return view('ctaeliminada');
        }
    }

    public function traeDollar()
    {
        $token = '8eeda224be021de585df5588435aa489eb4c5fde';
        $url = 'http://api.sbif.cl/api-sbifv3/recursos_api/dolar?apikey='.$token.'&formato=JSON';
        $datas_json = file_get_contents($url);
        $datas_array = json_decode($datas_json, true);

        return $datas_array['Dolares']['0']['Valor'];
    }
}

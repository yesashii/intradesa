<?php

namespace intranet\Http\Controllers\Admin;

use Illuminate\Http\Request;
use intranet\Http\Controllers\Controller;

use intranet\Modelo\INT_NOTICIAS;

use Carbon\Carbon;

class SubirNoticiaController extends Controller
{
    public function index()
    {

        return view('administracion.noticias.subirNoticias');

    }

    public function save(Request $request)
    {
        //dd($request->all());

        $titulo     = $request->titulo;
        $sub_titulo = $request->sub_titulo;
        $texto      = $request->texto;


        //obtenemos el campo file definido en el formulario
        $file = $request->file('file');

        //obtenemos el nombre del archivo
        $imagen = $file->getClientOriginalName();

        //indicamos que queremos guardar un nuevo archivo en el disco local
        \Storage::disk('local')->put($imagen,  \File::get($file));

        $this->subirNoticia( $titulo, $sub_titulo, $texto, $imagen );
        //return "archivo guardado";
    }

    private function subirNoticia( $titulo, $sub_titulo, $texto, $imagen )
    {
        $noticia    = new INT_NOTICIAS();

        $noticia->titulo            = $titulo;
        $noticia->sub_titulo        = $sub_titulo;
        $noticia->texto             = $texto;
        $noticia->imagen            = 'img/noticias/'.$imagen;
        $noticia->fecha             = (string)Carbon::now('America/Santiago')->toDateTimeString();
        $noticia->url               = '';
        $noticia->usuario_id        = 1;
        $noticia->control_usuario   = 'seeder';

        $noticia->save();
      //  $noticia->imagen            = 'img/noticias/'.$noticia->id_noticia.'jpg';
      //  $noticia->save();

    }

}
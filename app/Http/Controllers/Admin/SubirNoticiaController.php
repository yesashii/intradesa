<?php

namespace intranet\Http\Controllers\Admin;

use Illuminate\Http\Request;
use intranet\Http\Controllers\Controller;

use intranet\Modelo\INT_NOTICIAS;

use Carbon\Carbon;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class SubirNoticiaController extends Controller
{
    public function index()

    {
        $noticias = INT_NOTICIAS::orderBy('fecha', 'desc')->get();

        return view('administracion.noticias.subirNoticias', compact('noticias'));
    }

    public function traeNoticias()
    {
        $noticias = INT_NOTICIAS::orderBy('fecha', 'desc')->get();
        return response()->json($noticias);
    }

    public function save(Request $request)
    {

        $titulo     = $request->titulo;
        $sub_titulo = $request->sub_titulo;
        $texto      = $request->texto;
        $file       = $request->file('file');

        $nombreImagen = $this->subeImagen($file);


        $this->subirNoticia( $titulo, $sub_titulo, $texto, $nombreImagen );

        $noticias_ = INT_NOTICIAS::orderBy('fecha', 'desc')->get();
        return response()->json($noticias_);

    }

    private function subirNoticia( $titulo, $sub_titulo, $texto, $nombreImagen )
    {

        $noticia    = new INT_NOTICIAS();

        $noticia->titulo            = $titulo;
        $noticia->sub_titulo        = $sub_titulo;
        $noticia->texto             = htmlspecialchars($texto);
        $noticia->imagen            = 'img/noticias/'.$nombreImagen;
        $noticia->fecha             = (string)Carbon::now('America/Santiago')->toDateTimeString();
        $noticia->url               = '';
        $noticia->usuario_id        = 1;
        $noticia->activa            = 0;
        $noticia->control_usuario   = 'seeder';
        $noticia->save();


    }

    private function validaTamanioImagen( $file )
    {
        $tamanioImagen = $file->getClientSize();
        if( $tamanioImagen > 200000 )
        {
            return false;
        }
        return true;
    }

    /**
     * retorna el nombre de la imagen.
     *
     * @param $file
     * @return string
     */
    private function seteaNombreImagen( $file )
    {
        $nombre_real    = $file->getClientOriginalName();
        $extencion      = substr($nombre_real, -3);
        $fecha          = (string)Carbon::now('America/Santiago')->toDateTimeString();
        $nombre         = bcrypt($fecha.$nombre_real);
        $nombre         = str_replace('.','_',$nombre);
        $nombre         = str_replace('/','_',$nombre);
        $nombre         = str_replace('\\','_',$nombre);
        $nombre         = $nombre.'.'.$extencion;
        return $nombre;
    }


    private function subeImagen( $file )
    {
        $nombre = $this->seteaNombreImagen($file);
        //indicamos que queremos guardar un nuevo archivo en el disco local
        \Storage::disk('local')->put($nombre,  \File::get($file));
        return $nombre;
    }

    private function validaFormato( $file )

    {
        $mimeType   = $file->getClientMimeType();
       // dd($mimeType);
        if( $mimeType != "image/jpeg" )
        {
            return false;
        }
        return true;
    }


    public function activarNoticia( $id )
    {
        $noticia    = INT_NOTICIAS::find($id);

        $noticia->fecha             = (string)Carbon::now('America/Santiago')->toDateTimeString();
        ($noticia->activa == 0)?$noticia->activa=1:$noticia->activa=0;
        $noticia->save();
        return response()->json($noticia);
    }
    public function eliminaNoticia( $id )
    {
        $noticia    = INT_NOTICIAS::find($id);
        $imagen     = str_replace('img/noticias/', '', $noticia->imagen );
        \Storage::delete($imagen );
        $noticia->delete();

        $noticias_ = INT_NOTICIAS::orderBy('fecha', 'desc')->get();
        return response()->json($noticias_);
    }

    public function actualiza( $id )
    {
        $noticia = INT_NOTICIAS::find( $id );

        return response()->json(["data" => $noticia], 200);
    }

    public function actualizaStore( Request $request )
    {

        //dd($request->all());
        $titulo     = $request->titulo;
        $sub_titulo = $request->sub_titulo;
        $texto      = $request->texto;
        $file       = $request->file('file');
        $id         = $request->id_noticia;


        if(!isset($file)){
            $this->storeNoticia( $id, $titulo, $sub_titulo, $texto );


        }else{
            $noticia    = INT_NOTICIAS::find($id);
            $imagen     = str_replace('img/noticias/', '', $noticia->imagen );
            \Storage::delete($imagen );
            $nombreImagen   = $this->subeImagen($file);
            $this->storeNoticia_conImagen( $id, $titulo, $sub_titulo, $texto, $nombreImagen );

        }

        $noticias_ = INT_NOTICIAS::orderBy('fecha', 'desc')->get();
        return response()->json($noticias_);

    }

    private function storeNoticia( $id, $titulo, $sub_titulo, $texto )
    {

        $noticia    =  INT_NOTICIAS::find( $id );



        $noticia->titulo            = $titulo;
        $noticia->sub_titulo        = $sub_titulo;
        $noticia->texto             = $texto;
        $noticia->fecha             = (string)Carbon::now('America/Santiago')->toDateTimeString();
        $noticia->save();

    }

    private function storeNoticia_conImagen( $id, $titulo, $sub_titulo, $texto, $nombreImagen )
    {

        $noticia    =  INT_NOTICIAS::find( $id );

        $noticia->titulo            = $titulo;
        $noticia->sub_titulo        = $sub_titulo;
        $noticia->texto             = $texto;
        $noticia->fecha             = (string)Carbon::now('America/Santiago')->toDateTimeString();
        $noticia->imagen            = 'img/noticias/'.$nombreImagen;
        $noticia->save();


    }

    public function muestra( $id )
    {
        $noticia = INT_NOTICIAS::find( $id );

        return response()->json(["data" => $noticia], 200);
    }

}
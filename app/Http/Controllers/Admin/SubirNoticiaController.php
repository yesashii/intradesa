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
        //dd($request->all());
        //dd($request->file('file')->getClientMimeType());
        $titulo     = $request->titulo;
        $sub_titulo = $request->sub_titulo;
        $texto      = $request->texto;
        $file       = $request->file('file');

        $errores = [];

        //if( !isset($request->titulo) ){ $errores.ar('') }

        $validator = Validator::make($request->all(), [
            'file'          => 'required',
            'titulo'        => 'required',
            'sub_titulo'    => 'required',
            'texto'         => 'required'
        ],$messages = [
            'file.required'       => array_push( $errores, 'No seleccionó ninguna imágen' ),
            'titulo.required'     => array_push( $errores,'El campo título es requerido' ),
            'sub_titulo.required' => array_push( $errores,'El campo sub-tìtulo es requerido'),
            'texto.required'      => array_push( $errores,'El campo texto es requerido')
        ]);

        if ($validator->fails()) {
            return response()->json($errores);
        }

        if( !$this->validaTamanioImagen($file) )
        {
            return 'El tamaño de la imagen excede el límite';
        }

        if( !$this->validaFormato( $file ) ){
            return 'El formáto debe ser [ jpg ]';
        }

        $nombreImagen = $this->subeImagen($file);


        $this->subirNoticia( $titulo, $sub_titulo, $texto, $nombreImagen );

        $noticias_ = INT_NOTICIAS::orderBy('fecha', 'desc')->get();
        return response()->json($noticias_);

       // return view('administracion.noticias.subirNoticias');

    }

    private function subirNoticia( $titulo, $sub_titulo, $texto, $nombreImagen )
    {

        $noticia    = new INT_NOTICIAS();

        $noticia->titulo            = $titulo;
        $noticia->sub_titulo        = $sub_titulo;
        $noticia->texto             = $texto;
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

        ($noticia->activa == 0)?$noticia->activa=1:$noticia->activa=0;
        $noticia->save();
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

}
<?php

namespace intranet\Http\Controllers\Admin;

use Illuminate\Http\Request;
use intranet\Http\Controllers\Controller;

use intranet\Modelos\INT_CERTIFICADOS;
use intranet\Modelos\INT_ESTADO_CERTIFICADO;
use intranet\Modelos\INT_MOTIVO_CERTIFICADO;
use intranet\Modelos\INT_TIPO_CERTIFICADO;
use intranet\User;

use Carbon\Carbon;

class SolicitudesController extends Controller
{
    //

    public function index()
    {
        return view('administracion.solicitudes.aprobarSolicitudes');
    }

    public function actualiza_contador()
    {
        $solicitudes = INT_CERTIFICADOS::where( 'estado_id', 1 )->get();
        return count($solicitudes);
    }

    public function actualiza_solicitudes()
    {
        $certificados = INT_CERTIFICADOS::where( 'estado_id', 1 )->get();


        foreach( $certificados as $certificado ){
            $certificado->estado_id     = INT_ESTADO_CERTIFICADO::find($certificado->estado_id);
            $certificado->tipo_id       = INT_TIPO_CERTIFICADO::find($certificado->tipo_id);
            $certificado->motivo_id     = INT_MOTIVO_CERTIFICADO::find($certificado->motivo_id);
            $certificado->user_id       = User::find($certificado->user_id)->int_trabajadores ;

        }

        return response()->json(compact('certificados'),200);
    }

    public function aprueba_solicitudes( $id )
    {
        $solicitud = INT_CERTIFICADOS::find($id);
        $solicitud->estado_id = 2;
        $solicitud->fecha_caducacion = (string)Carbon::now('America/Santiago')->addMonth()->toDateTimeString();
        $solicitud->save();

        // Esto debe enviar un mail... con el adjunto del certificado.
    }

}

<?php

namespace intranet\Http\Controllers\Rrhh;

use Illuminate\Http\Request;
use intranet\Http\Controllers\Controller;

use intranet\Modelos\INT_TIPO_CERTIFICADO;
use intranet\Modelos\INT_MOTIVO_CERTIFICADO;
use intranet\Modelos\INT_ESTADO_CERTIFICADO;
use intranet\Modelos\INT_CERTIFICADOS;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

use intranet\Modelos\INT_TRABAJADORES;

use intranet\User;
use PDF;
use Illuminate\Support\Facades\File;

class CertificadosController extends Controller
{
    //
    public function index()
    {
        $tipos_solicitud    = INT_TIPO_CERTIFICADO::all();
        $motivos_solicitud  = INT_MOTIVO_CERTIFICADO::all();

        return view('rrhh.solicitud-certificados', compact('tipos_solicitud', 'motivos_solicitud'));
    }

    public function solicita( Request $request )
    {
        $fecha_solicitud    = (string)Carbon::now('America/Santiago')->toDateTimeString();
        $fecha_caducacion   = '';
        $estado_id          = 1; // en proceso
        $tipo_id            = $request->tipo;
        $motivo_id          = $request->motivo;
        $user_id            = Auth::user()->id;

        $control_usuario    = Auth::user()->id;


        $certificado = new INT_CERTIFICADOS();

        $certificado->fecha_solicitud   = $fecha_solicitud;
        $certificado->fecha_caducacion  = $fecha_caducacion;
        $certificado->estado_id         = $estado_id;
        $certificado->tipo_id           = $tipo_id;
        $certificado->motivo_id         = $motivo_id;
        $certificado->user_id           = $user_id;
        $certificado->control_usuario   = $control_usuario;

        $certificado->save();
        return response()->json(compact('certificado'),200);
    }

    public function traeCertificados()
    {
        $certificados = INT_CERTIFICADOS::all();

        foreach( $certificados as $certificado ){
            $certificado->estado_id = INT_ESTADO_CERTIFICADO::find($certificado->estado_id);
            $certificado->tipo_id   = INT_TIPO_CERTIFICADO::find($certificado->tipo_id);
            $certificado->motivo_id = INT_MOTIVO_CERTIFICADO::find($certificado->motivo_id);
        }

        return response()->json(compact('certificados'),200);
    }

    public function eliminaSolicitud( $id )
    {
        $certificado = INT_CERTIFICADOS::find($id);

        $certificado->delete();
    }


    public function muestraCertificado( $id )
    {

        $certificado    = INT_CERTIFICADOS::find($id);
        $usuario        = User::find($certificado->user_id);
        $usuario_sis_   = INT_TRABAJADORES::where( 'CORREOELEC', $usuario->email  )->get();
        $usuario_sis    = $usuario_sis_[0];
        $fines          = INT_MOTIVO_CERTIFICADO::find($certificado->motivo_id);

        // seccion de fecha__>
        $fecha  = $certificado->fecha_solicitud;
        $mes    = substr($fecha, -14,2);
        $dia    = substr($fecha, -11,2);
        $anio   = substr($fecha, -19,4);

        // seccion de fecha__<

        // seccion de empresa__>
        $logo       = url('img/logos/logo-desa.png');
        $nomEmpresa = 'Distribucion Y Excelencia S.A.';
        $rutEmpresa = '96.568.970-2';
        // seccion de empresa__<
        $nombreEmpleado = $usuario_sis->NOMBRE.' '.$usuario_sis->APELLIDO_PATERNO.' '.$usuario_sis->APELLIDO_MATERNO;
        $rutEmpleado    = $usuario_sis->FICHA;
        $fechaInicio    = $usuario_sis->FECHA_INICIO;
        $cargoEmpleado  = $usuario_sis->CARGO;
        $fines          = $fines->nombre;



        return view('rrhh.certificados.certificado_antiguedad',
            compact(
                'logo',
                'nomEmpresa',
                'rutEmpresa',
                'nombreEmpleado',
                'rutEmpleado',
                'fechaInicio',
                'cargoEmpleado',
                'fines',
                'mes',
                'dia',
                'anio'
            ));
    }


    public function descargaCertificado( $id )
    {
        $certificado    = INT_CERTIFICADOS::find($id);
        $usuario        = User::find($certificado->user_id);
        $usuario_sis_   = INT_TRABAJADORES::where( 'CORREOELEC', $usuario->email  )->get();
        $usuario_sis    = $usuario_sis_[0];
        $fines          = INT_MOTIVO_CERTIFICADO::find($certificado->motivo_id);

        // seccion de fecha__>
        $fecha  = $certificado->fecha_solicitud;
        $mes    = substr($fecha, -14,2);
        $dia    = substr($fecha, -11,2);
        $anio   = substr($fecha, -19,4);

        // seccion de fecha__<

        // seccion de empresa__>
        $logo       = 'img/logos/logo-desa.png';
        $nomEmpresa = 'Distribucion Y Excelencia S.A';
        $rutEmpresa = '96.568.970-2';
        // seccion de empresa__<
        $nombreEmpleado = $usuario_sis->NOMBRE.' '.$usuario_sis->APELLIDO_PATERNO.' '.$usuario_sis->APELLIDO_MATERNO;
        $rutEmpleado    = $usuario_sis->FICHA;
        $fechaInicio    = $usuario_sis->FECHA_INICIO;
        $cargoEmpleado  = $usuario_sis->CARGO;
        $fines          = $fines->nombre;





        $pdf = PDF::loadView('rrhh.certificados.certificado_antiguedad',
            compact(
                'logo',
                'nomEmpresa',
                'rutEmpresa',
                'nombreEmpleado',
                'rutEmpleado',
                'fechaInicio',
                'cargoEmpleado',
                'fines',
                'mes',
                'dia',
                'anio'
            ));
        $pdf->output(['isRemoteEnabled' => true]);
        $pdf->download('FicheroEjemplo.pdf');
        //return $pdf->download('FicheroEjemplo.pdf')->back();
        return $pdf->download('certificado.pdf');
    }


}

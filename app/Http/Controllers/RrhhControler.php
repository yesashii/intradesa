<?php

namespace intranet\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use intranet\Clases\Fechas;
use intranet\Modelos\INT_TRABAJADORES;

use PDF;
use Illuminate\Support\Facades\File;

use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;

class RrhhControler extends Controller
{
    //

    public function muestraFormularios()
    {

        $nombre             = Auth::user()->int_trabajadores->NOMBRE;
        $apellido           = Auth::user()->int_trabajadores->APELLIDO_PATERNO;
        $apellidoM          = Auth::user()->int_trabajadores->APELLIDO_MATERNO;
        $nombre_completo    = $nombre.' '.$apellido.' '.$apellidoM;


        return view('rrhh.formularios', compact('nombre_completo', 'fechaActual'));
    }

    public function imprimir_formulario_vacaciones( Request $request )
    {
        //dd( $request );

        $fecha          = new Fechas();
        $fechaActual    = $fecha->fechaActual_dd_mm_aaaa();

        $validator = Validator::make($request->all(), [

            'nombre'        => 'required',
            'cargo'         => 'required',
            'fechaInicio'   => 'required',
            'fechaFin'      => 'required',
            'nom_jefe'      => 'required',
            'car_jefe'      => 'required',

        ],$messages = [
            'nombre.required'       => 'El campo nombre, es requerido.',
            'cargo.required'        => 'El campo cargo, es requerido.',
            'fechaInicio.required'  => 'La fecha de inicio, es requerida.',
            'fechaFin.required'     => 'La fecha fin, es requerida.',
            'nom_jefe.required'     => 'El nombre de su jefe es requerido.',
            'car_jefe.required'     => 'El cargo de su jefe es requerido.',
        ]);

        if ($validator->fails()) {

            return back()->withErrors($validator)
                ->withInput();
        }

        $nombre         = $request->nombre;
        $cargo          = $request->cargo;
        $fechaInicio    = $fecha->formateaFecha($request->fechaInicio);
        $fechaFin       = $fecha->formateaFecha($request->fechaFin);
        $nom_jefe       = $request->nom_jefe;
        $car_jefe       = $request->car_jefe;
        $rut            = Auth::user()->int_trabajadores->FICHA;

        $pdf = PDF::loadView('rrhh.vacaciones', compact( 'nombre', 'cargo', 'fechaInicio', 'fechaFin', 'nom_jefe', 'fechaActual', 'car_jefe','rut' ));
        $pdf->output(['isRemoteEnabled' => true]);
        $pdf->download('FicheroEjemplo.pdf');
        //return $pdf->download('FicheroEjemplo.pdf')->back();
        return $pdf->download('formularioVacaciones.pdf');


    }

    public function liquidaciones()
    {
        $o_trabajador = new INT_TRABAJADORES();
        $trabajador = $o_trabajador->traeDetalleTrabajador( Auth::user()->id );

        $files = File::allFiles('liquidaciones');

        //dd($files);
        $archivos = [];
        foreach ($files as $file)
        {
            $cadena_de_texto    = (string)$file;
            $cadena_buscada     = $trabajador->FICHA.'.pdf';
            if( strpos($cadena_de_texto, $cadena_buscada) )
            {
                array_push ( $archivos,(string)$file );
            }
        }

        return view('rrhh.liquidaciones', compact('archivos'));


    }

    public function beneficios()
    {
        return view('rrhh.beneficios');
    }

}

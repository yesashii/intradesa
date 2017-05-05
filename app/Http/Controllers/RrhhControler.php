<?php

namespace intranet\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use intranet\Clases\Fechas;

use PDF;

use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;

class RrhhControler extends Controller
{
    //

    public function muestraFormularios()
    {

        $nombre             = Auth::user()->int_trabajadores->NOMBRE;
        $apellido           = Auth::user()->int_trabajadores->APELLIDO_PATERNO;
        $nombre_completo    = $nombre.' '.$apellido;


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

        ],$messages = [
            'nombre.required'       => 'El campo nombre, es requerido.',
            'cargo.required'        => 'El campo cargo, es requerido.',
            'fechaInicio.required'  => 'La fecha de inicio, es requerida.',
            'fechaFin.required'     => 'La fecha fin, es requerida.',
            'nom_jefe.required'     => 'El nombre de su jefe es requerido.',
        ]);

        if ($validator->fails()) {

            return back()->withErrors($validator)
                ->withInput();
        }

        $nombre         = $request->nombre;
        $cargo          = $request->cargo;
        $fechaInicio    = $request->fechaInicio;
        $fechaFin       = $request->fechaFin;
        $nom_jefe       = $request->nom_jefe;

        $pdf = PDF::loadView('rrhh.vacaciones', compact( 'nombre', 'cargo', 'fechaInicio', 'fechaFin', 'nom_jefe', 'fechaActual' ));
        $pdf->output(['isRemoteEnabled' => true]);
        $pdf->download('FicheroEjemplo.pdf');
        //return $pdf->download('FicheroEjemplo.pdf')->back();
        return $pdf->download('formularioVacaciones.pdf');


    }
}

<?php


namespace intranet\Clases;

use Carbon\Carbon;



class Fechas
{

    private $fecha;


    public function __construct()
    {
        $this->fecha = Carbon::now('America/Santiago');
    }
    /*
    |--------------------------------------------------------------------------
    | funciones para los cumpleños de la semana
    |--------------------------------------------------------------------------
    */

    public function traeMesInicioSemanaCumpleanio()
    {
        $diaDeLaSemana   = $this->fecha->dayOfWeek;
        $fechaInicio     = Carbon::now('America/Santiago')->addDays( ( -$diaDeLaSemana - 1 ) );
        return $fechaInicio->month;
    }

    public function traeMesTerminoSemanaCumpleanio()
    {
        $diaDeLaSemana      = $this->fecha->dayOfWeek;
        $fechaFin           = Carbon::now('America/Santiago')->addDays( ( -$diaDeLaSemana + 7 ) );
        return $fechaFin->month;
    }


    public function traeDiaInicioSemanaCumpleanio()
    {
        $diaDeLaSemana   = $this->fecha->dayOfWeek;
        $fechaInicio     = Carbon::now('America/Santiago')->addDays( ( -$diaDeLaSemana - 1 ) );
        return $fechaInicio->day;
    }

    public function traeDiaTerminoSemanaCumpleanio()
    {
        $diaDeLaSemana      = $this->fecha->dayOfWeek;
        $fechaFin           = Carbon::now('America/Santiago')->addDays( ( -$diaDeLaSemana + 7 ) );
        return $fechaFin->day;
    }


    /*
    |--------------------------------------------------------------------------
    | funciones para los cumpleños del día
    |--------------------------------------------------------------------------
    */
    public function traeDiaHoy()
    {
        return $this->fecha->day;
    }
    public function traeMesactual()// tambien sirve para los cumpleaños del mes :)
    {
        return $this->fecha->month;
    }

    /*
    |--------------------------------------------------------------------------
    | funciones de formatos de fecha
    |--------------------------------------------------------------------------
    */

    public function fechaActual_dd_mm_aaaa()
    {
        return  $this->fecha->format('d/m/Y');
    }

    public function formateaFecha( $fecha )
    {
        return $fecha;
       // $formateo =  $this->fecha->createFromDate( date(strtotime($fecha)) );

        //return  $formateo->format('d/m/Y');
        //return Carbon::createFromFormat('d/m/Y', $fecha);
    }



}
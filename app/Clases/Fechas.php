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


}
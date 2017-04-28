<?php

function traduceMes( $fecha )
{
    $mes = substr( $fecha,-4,2 );
    switch ($mes) {
        case 1:
            return "ENE";
            break;
        case 2:
            return "FEB";
            break;
        case 3:
            return "MAR";
            break;
        case 4:
            return "ABR";
            break;
        case 5:
            return "MAY";
            break;
        case 6:
            return "JUN";
            break;
        case 7:
            return "JUL";
            break;
        case 8:
            return "AGO";
            break;
        case 9:
            return "SEP";
            break;
        case 10:
            return "OCT";
            break;
        case 11:
            return "NOV";
            break;
        case 12:
            return "DIC";
            break;
    }
    return '';
}

function traduceDia( $fecha )
{
    $dia = substr( $fecha,-2,2 );
    return $dia;
}

function traduceFechaNoticia( $fecha )
{
    $aux_fecha = $fecha;
    $aux_fecha = date("Y-m-d H:i:s");
    return $aux_fecha;
}
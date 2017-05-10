<?php



function traduceFecha( $fecha )
{

    $dia    = substr( $fecha, -2 );
    $mes    = substr( $fecha, -4, 2 );
    $anio   = substr( $fecha,-8, 4 );

    return $dia.'/'.$mes.'/'.$anio;

}

/**
 * Deja la primera letra de cada palabra con mayuscula
 *
 */
function UC_primer( $cadena )
{
    /*
     * este escandalo se debe a que ni las ñ ni los tildes los toma en cuenta
     * si no se hace esto.
     * */
    return utf8_encode(ucwords(strtolower(utf8_decode($cadena))));
}


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
    $fecha = date("d-m-Y H:i:s");
    return $fecha;
}

function fechaVaca( $fecha )
{
    $date = new DateTime($fecha);
   return $date->format('d/m/Y');
}

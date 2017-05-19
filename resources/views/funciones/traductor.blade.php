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

function existeArchivo( $link )
{
    //dd($link);
    $nombre_fichero = $link;

    if ( file_exists($nombre_fichero) )
    {
        return true;
    } else {
        return false;
    }
}

function rut( $rut_ ) {

    $rut = (int)str_replace('-','',$rut_);

    return number_format( substr ( $rut, 0 , -1 ) , 0, "", ".") . '-' . substr ( $rut, strlen($rut) -1 , 1 );
}


/**
 * Recibe un formato "liquidaciones\20170101_15370707-3.pdf" y retorna 01-ENE-2017
 *
 */
function detalle_liquidacion( $cadena )
{
    $f_cadena = $cadena;

    $sub_cadena_fecha = substr( $f_cadena, 14,8 );

    $dia    = traduceDia($sub_cadena_fecha);
    $mes    = traduceMes($sub_cadena_fecha);
    $anio   = substr( $sub_cadena_fecha, 0,4 );

    return $dia.'-'.$mes.'-'.$anio;

}

<?php

function existeArchivoApp( $link )
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

function traduceNombreUsr( $nombres )
{
    $a_nombres      = explode(" ", $nombres);

    return $a_nombres[0];
}
<?php
// agregado para el control de la imagen de usuario
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
//
function traduceNombreUsr( $nombres )
{
    $a_nombres      = explode(" ", $nombres);

    return $a_nombres[0];
}


?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('layouts.css.css')
    @yield('extra_css')
</head>
<body>

<div>
    @include('layouts.app_compuestos.menu_horizontal')

    @yield('content')

</div>

</body>
</html>
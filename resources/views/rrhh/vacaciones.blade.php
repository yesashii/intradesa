@include('funciones.traductor')
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<style>

    body{
        font-family: Arial, Helvetica, sans-serif;
        font-size: small;
    }

    .destaca{
         background-color: #e3e5e0;
    }

    .borde{
        padding-right: 10px;
        padding-left: 10px;
        border-top: 1px solid #020206;
        border-left: 1px solid #020206;
        border-right: 1px solid #020206;
        border-bottom: 1px solid #020206;
    }

</style>

<body>

<table class="borde" border="0" width="510">
    <tr><td  > </td></tr>

    <tr>
        <td style="vertical-align: text-top;" width="400px" height="60" ><img width="150" height="60" src="img/logos/logo-desa.png"/></td>
    </tr>

    <tr>
        <td style=" padding: 5px 5px 5px 5px; font-size: small; text-align: center; background-color: #aaaca7 "><strong>FORMULARIO DE SOLICITUD DE VACACIONES</strong></td>
    </tr>

    <tr>
        <td>
            <table border="1" style="border-collapse:collapse;">
                <tr>
                    <td width="255"><strong>Nombre</strong></td>
                    <td class="destaca" width="255">: {{ $nombre }}</td>
                </tr>

                <tr>
                    <td width="255"><strong>Cargo</strong></td>
                    <td class="destaca" >: {{ $cargo }}</td>
                </tr>

                <tr>
                    <td width="255"><strong>Rut</strong></td>
                    <td class="destaca">: {{ $rut }}</td>
                </tr>

                <tr>
                    <td width="255"><strong>Fecha</strong></td>
                    <td class="destaca">: {{ $fechaActual }}</td>
                </tr>

            </table>
        </td>

    </tr>

    <tr>
        <td height="10px"></td>
    </tr>

    <tr>
        <td>
            <table border="1" style="border-collapse:collapse;">
                <tr>
                    <td width="255" ><strong>Fecha de inicio de vacaciones</strong></td>
                    <td width="255" class="destaca">: {{ fechaVaca( $fechaInicio ) }}</td>
                </tr>

                <tr>
                    <td width="255" ><strong>Fecha de fin de vacaciones (último día solicitado)</strong></td>
                    <td class="destaca">: {{ fechaVaca( $fechaFin ) }}</td>
                </tr>



            </table>
        </td>

    </tr>

    <tr>
        <td></td>
    </tr>

    <tr>
        <td>
            <table border="1" style="border-collapse:collapse;">
                <tr>
                    <td style="font-size: xx-small; vertical-align: text-top;" height="20px" width="684px">Vacaciones pendientes a la fecha: (uso exclusivo de RRHH):</td>
                </tr>
            </table>
        </td>
    </tr>

    <!-- observaciones -->
    <tr>
        <td></td>
    </tr>

    <tr>
        <td>
            <table border="1" style="border-collapse:collapse;">
                <tr>
                    <td style="font-weight:bold; vertical-align: text-top;" height="100px" width="684px">Comentarios u observaciones:</td>
                </tr>
            </table>
        </td>
    </tr>
    <!-- #observaciones -->


    <!-- Jefe  -->

    <tr>
        <td></td>
    </tr>

    <tr>
        <td>
            <table border="1" style="border-collapse:collapse; ">
                <tr>
                    <td width="255" height="20"> <br><br> <strong>Nombre jefe</strong> </td>
                    <td  width="255" class="destaca"><br><br>: {{ strtoupper($nom_jefe) }}</td>
                </tr>
                <tr>
                    <td width="255" height="20"> <br><br> <strong> Cargo</strong></td>
                    <td  width="200" class="destaca">:</td>
                </tr>
                <tr>
                    <td width="255" height="30"> <br><br><br> <strong> Firma</strong></td>
                    <td  width="200" class="destaca">:</td>
                </tr>

            </table>
        </td>

    </tr>

    </tr>
    <!-- #Jefe -->


    <tr>
        <td></td>
    </tr>

    <tr>
        <td>
            <table border="1" style="border-collapse:collapse;">

                <tr>
                    <td width="255" height="30"> <br><br><br> <strong> Firma colaborador</strong></td>
                    <td width="255" class="destaca">:</td>
                </tr>

            </table>
        </td>

    </tr>

    <tr>
        <td></td>
    </tr>

    <tr>
        <td>
            <table border="1" style="border-collapse:collapse;">

                <tr>
                    <td height="10" width="510" style=" font-size: x-small; text-align: center; background-color: #aaaca7 ">Nota: éste formulario debe ser firmado por el colaborador y por el jefe, entregando una copia a RRHH. La no entrega del mismo inhabilita la autorización a tomarse vacaciones.</td>
                </tr>
            </table>
        </td>

    </tr>
    <tr>
        <td height="20px"></td>
    </tr>





</table>

</body>
</html>
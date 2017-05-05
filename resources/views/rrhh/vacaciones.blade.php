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

    .logo{
        height: 100px;
       /* background-image: url({{ asset('img/logos/logo-desa.png') }}); */
        background-repeat: no-repeat;
        background-position: center;
    }

</style>

<body>

<table border="0" width="510">
    <tr><td  > </td></tr>

    <tr>
        <td width="500px">&nbsp;</td>
    </tr>

    <tr>
        <td style=" text-align: center; background-color: #888a85 "><strong>FORMULARIO DE SOLICITUD DE VACACIONES</strong></td>
    </tr>

    <tr>
        <td>
            <table border="1" style="border-collapse:collapse;">
                <tr>
                    <td width="255">Nombre</td>
                    <td width="255">: {{ $nombre }}</td>
                </tr>

                <tr>
                    <td width="255">Cargo</td>
                    <td>: {{ $cargo }}</td>
                </tr>

                <tr>
                    <td width="255">Fecha</td>
                    <td>: {{ $fechaActual }}</td>
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
                    <td width="255">Fecha de inicio de vacaciones</td>
                    <td width="255">: {{ $fechaInicio }}</td>
                </tr>

                <tr>
                    <td width="255">Fecha de fin de vacaciones (último día solicitado)</td>
                    <td>: {{ $fechaFin }}</td>
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
                    <td style="vertical-align: text-top;" height="80px" width="510">Vacaciones pendientes a la fecha: (uso exclusivo de RRHH):</td>
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
                    <td width="255">Nombre del jefe</td>
                    <td width="255">: {{ $nom_jefe }}</td>
                </tr>

                <tr>
                    <td height="80" width="255">Firma del jefe</td>
                    <td>: </td>
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
                    <td height="80" width="255">Firma del colaborador</td>
                    <td width="255">: </td>
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
                    <td height="50" width="510" style=" text-align: center; background-color: #888a85 ">Nota: éste formulario debe ser firmado por el colaborador y por el jefe, entregando una copia a RRHH. La no entrega del mismo inhabilita la autorización a tomarse vacaciones.</td>
                </tr>

            </table>
        </td>

    </tr>





</table>

</body>
</html>
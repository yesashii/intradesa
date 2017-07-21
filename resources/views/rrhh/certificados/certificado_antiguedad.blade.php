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
       /* padding-right: 10px; */
        padding-left: 50px;
    }

</style>

<body>

<table class="borde" border="0" width="510">
    <tr><td > </td></tr>

    <tr>
        <td style="vertical-align: text-top;" width="400px" height="60" ><img width="150" height="60" src="{{ $logo }}"/></td>
    </tr>

    <tr>
        <td style="text-align: center" colspan="5"> <br /><br />  <strong><u>C E R T I F I C A D O </u></strong></td>
    </tr>

    <tr>
        <td colspan="5"><br /><br /><br />
            <p align="justify" style="line-height: 24px">
                En Santiago con fecha {{ $dia }} de {{traduceMesCompleto($mes)}} de {{ $anio }}, <strong>DANIELA GALLI BASILI</strong>., Jefa de Recursos
                Humanos de la Empresa {{ $nomEmpresa }}. Rut: {{ $rutEmpresa }}, con domicilio legal en Av. La
                Montaña Nº 776, comuna de Lampa, Ciudad de Santiago; certifica que el Sr. <strong>{{ $nombreEmpleado }},
                </strong>Cédula de Identidad Nº {{ $rutEmpleado }}, se desempeña en la empresa desde
                el día {{ traduceFecha($fechaInicio) }}, manteniendo un contrato de caracter <strong>INDEFINIDO.</strong>
            </p>
            <br /><br />
            <p align="justify"> El(la) Sr(a). {{ $nombreEmpleado }}, se desempeña actualmente en el cargo de {{ $cargoEmpleado }}.</p>

            <p align="justify" style="line-height: 24px"> Se extiende el presente contrato a petición del interesado, para los fines {{ $fines }}
             sin ulterior responsabilidad para esta compañía</p>

        </td>

    </tr>
    <tr>
        <td colspan="5" height="80px"></td>
    </tr>
    <tr>
        <td width="200px" ></td>
        <td>
            <p align="center" style="width: 200px">
                <strong>DANIELLA GALLI BASILI</strong>
                Jefa De Recursos Humanos
                p.p. {{ $nomEmpresa }}.
                Rut: {{ $rutEmpresa }}
            </p>
        </td>
        <td width="0" ></td>

    </tr>

    <tr>
        <td colspan="5" height="150px"></td>
    </tr>
    <tr>
        <td colspan="5">
            <hr />
            <p align="center">
                <strong>{{ $nomEmpresa }}</strong>. <br />
                Av. La Montaña Nº 776, Lampa, Santiago<br />
                Fono:(02) 489 1500 - Fax:(02) 4891501
            </p>

        </td>

    </tr>

</table>

</body>
</html>
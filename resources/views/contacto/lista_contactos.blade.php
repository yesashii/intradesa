@extends('layouts.app.index')

@include('funciones.traductor')

@section('extra_css')

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">


    <style>
        tr:hover {
            background-color: rgba(165, 202, 249, 0.29) !important;
        }
        tr {
            font-family: 'Source Sans Pro', sans-serif;
            height:3px;                /* <-- the rows height */
        }
/*para achicar la altura de la fila, esto se puede sacar del ctrl f12 y copiar el css que lo dibuja*/
        .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td {
            padding: 2px !important;

        }
        /*Colores de la tabla*/
        .table>thead>tr>th{
            color: #20895e !important;
        }
        .colores{
            color: #20895e !important;
        }
        /*#Colores de la tabla*/
    </style>
@endsection

@section('content')

    <div class="container">


        <div class="panel panel-default">

            <div class="panel-heading">
                <h1 class="colores">Lista de Contactos</h1>
            </div>

            <div class="panel-body">

                <div class="table-responsive">
                    <form action='{{ url('/listacontactos') }}' method="post" id="trabajadores">

                        <table  class="table table-striped col-sm-6 col-xs-12">

                            <thead>
                            <tr>
                                <th class=colores">Empresa</th>
                                <th class=colores">RUT</th>
                                <th class=colores">Nombres</th>
                                <th class=colores">Apellido</th>
                                <th class=colores">Correo electrónico</th>
                                <th class=colores">Cargo</th>
                                <th class=colores">Acci&oacute;n</th>
                            </tr>
                            </thead>


                            <tbody>

                            {{ csrf_field() }}
                            <tr>
                                <td>
                                    <input type="text" class="form-control" name="EMPRESA" id="EMPRESA"
                                           placeholder="Ingrese empresa">
                                </td>

                                <td>
                                    <input type="text" class="form-control" name="FICHA" id="FICHA"
                                           placeholder="Ingrese el rut">
                                </td>

                                <td>
                                    <input type="text" class="form-control" name="NOMBRE" id="NOMBRE"
                                           placeholder="Ingrese nombre">
                                </td>

                                <td>
                                    <input type="text" class="form-control" name="APELLIDO_PATERNO" id="APELLIDO_PATERNO"
                                           placeholder="Ingrese el apellido">
                                </td>

                                <td>
                                    <input type="text" class="form-control" name="CORREOELEC" id="CORREOELEC"
                                           placeholder="Ingrese el Email">
                                </td>

                                <td>
                                    <input type="text" class="form-control" name="CARGO" id="CARGO"
                                           placeholder="Ingrese el cargo">
                                </td>

                                <td>
                                    <button type="submit" class="btn btn-primary ">Buscar</button>
                                </td>
                            </tr>

                            @foreach( $trabajadores as $trabajador )
                                <tr>
                                    <td>{{ $trabajador->EMPRESA             }}</td>
                                    <td>{{ rut($trabajador->FICHA )              }}</td>
                                    <td>{{ $trabajador->NOMBRE              }}</td>
                                    <td>{{ $trabajador->APELLIDO_PATERNO    }}</td>
                                    <td>{{ $trabajador->CORREOELEC          }}</td>
                                    <td>{{ $trabajador->CARGO               }}</td>
                                    @if( isset($trabajador->int_usuarios->id) )
                                        <td><a class="btn btn-success btn-xs"  role="button" href="{{ url('detalleUsuario/'.$trabajador->int_usuarios->id) }}"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> ver</a> </td>
                                    @else
                                        <td><a class="btn btn-danger disabled btn-xs"  role="button" href="#"><span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span> ver </a> </td>
                                    @endif
                                </tr>
                            @endforeach

                            </tbody>

                        </table>
                    </form>
                    {{ $paginar? $trabajadores->links(): '' }}
                </div>

                <!-- volver -->
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{ route('home')}}" class="btn btn-info" role="button"><span class="glyphicon glyphicon-chevron-left"></span>Volver</a>
                    </div>
                </div>
                <!-- #volver -->

            </div>

        </div>




    </div>



@endsection
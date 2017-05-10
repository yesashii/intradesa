@extends('layouts.app')

@section('extra_css')
    <style>
        tr {
            height:5px;                /* <-- the rows height */
        }



    </style>
@endsection

@section('content')

    <div class="container">

        <h1>Lista de contactos</h1>

    </div>

    <div class="container table-responsive">
        <form action='{{ url('/listacontactos') }}' method="post" id="trabajadores">

            <table class="table table-striped col-sm-6 col-xs-12">

                <thead>
                <tr>
                    <th>Empresa</th>
                    <th>RUT</th>
                    <th>Nombres</th>
                    <th>Apellido</th>
                    <th>Correo electrónico</th>
                    <th>Cargo</th>
                    <th>Acci&oacute;n</th>
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
                        <td>{{ $trabajador->FICHA               }}</td>
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

@endsection
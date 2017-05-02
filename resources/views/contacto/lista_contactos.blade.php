@extends('layouts.app')

@section('content')

    <div class="container">

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
            <p>
            <form action='{{ url('/listacontactos') }}' method="post" id="trabajadores">
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
                        <input type="email" class="form-control" name="CORREOELEC" id="CORREOELEC"
                               placeholder="Ingrese el Email">
                    </td>

                    <td>
                        <input type="email" class="form-control" name="CARGO" id="CARGO"
                               placeholder="Ingrese el cargo">
                    </td>

                    <td>
                        <button type="button" onclick="document.getElementById('trabajadores').submit()" class="btn btn-primary ">Buscar</button>
                    </td>
                </tr>
            </form>
            </p>
            @foreach( $trabajadores as $trabajador )
            <tr>
                <td>{{ $trabajador->EMPRESA             }}</td>
                <td>{{ $trabajador->FICHA               }}</td>
                <td>{{ $trabajador->NOMBRE              }}</td>
                <td>{{ $trabajador->APELLIDO_PATERNO    }}</td>
                <td>{{ $trabajador->CORREOELEC          }}</td>
                <td>{{ $trabajador->CARGO               }}</td>
                <td>{{ 'ver'                            }}</td>
            </tr>
            @endforeach

            </tbody>

        </table>
        {{ $trabajadores->links() }}
    </div>



@endsection
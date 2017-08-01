@extends('layouts.app.index')
@include('funciones.traductor')

@section('extra_css')
    <style>
        .material-icons.md-15 { font-size: 11px; }
        .material-icons.md-18 { font-size: 18px; }
        .material-icons.md-24 { font-size: 24px; }
        .material-icons.md-36 { font-size: 36px; }
        .material-icons.md-48 { font-size: 48px; }
    </style>
@endsection

@section('content')

    <div class="container">


        <div class="panel panel-default">

            <div class="panel-heading">
                <h1>Lista de liquidaciones</h1>
            </div>

            <div class="panel-body">


                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Liquidación</th>
                        <th>Acción</th>
                    </tr>
                    </thead>



                    @forelse( $archivos as $archivo )
                        <tr>
                            <td class="col-md-10"> {{ detalle_liquidacion( $archivo) }} </td>
                            <td><a class="btn btn-primary btn-sm" href="{{ url($archivo) }}"
                                   role="button" target=”_blank”>Descargar <i class="material-icons md-15">&#xE2C4;</i></a> </td>
                        </tr>
                    @empty
                        <tr>
                            <td>Sin liquidaciones cargadas</td>
                        </tr>
                    @endforelse


                </table>


            </div>

        </div>





    </div>

@endsection
@extends('layouts.app')

@section('extra_css')

    <style>

        #panel {
            margin-left: 21%;
        }

    </style>




@endsection

@section('content')

    <div class="container">

        <div class="panel panel-default">

            <div class="panel-heading">
                <h3>Formulario solicitud de vacaciones</h3>
            </div>

            <div class="panel-body ">

                <div id="panel" class="container col-lg-7 thumbnail">

                    <form action="{{ route('formularios') }}" method="post">

                        {{ csrf_field() }}


                        <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">

                            <label for="nombre">Nombre</label>
                            <input class="form-control" type="text" name="nombre" id="nombre" placeholder="Ingrese su nombre"
                                   value="{{ $nombre_completo }}">

                            @if ($errors->has('nombre'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                </span>
                            @endif

                        </div>

                        <div class="form-group{{ $errors->has('cargo') ? ' has-error' : '' }}">
                            <label for="cargo">Cargo</label>
                            <input class="form-control" type="text" name="cargo" id="cargo" placeholder="Ingrese su cargo"
                                   value="{{ Auth::user()->int_trabajadores->CARGO }}">

                            @if ($errors->has('cargo'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('cargo') }}</strong>
                                </span>
                            @endif

                        </div>

                        <div class="form-group{{ $errors->has('fechaInicio') ? ' has-error' : '' }}">
                            <label for="fechaInicio">Fecha de inicio de vacaciones</label>
                            <input class="form-control" type="date" name="fechaInicio" id="fechaInicio" >

                            @if ($errors->has('fechaInicio'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('fechaInicio') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('fechaFin') ? ' has-error' : '' }}">
                            <label for="fechaFin">Fecha de fin de vacaciones (último día solicitado)</label>
                            <input class="form-control" type="date" name="fechaFin" id="fechaFin">
                            @if ($errors->has('fechaFin'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('fechaFin') }}</strong>
                                </span>
                            @endif

                        </div>

                        <!-- nombre del jefe -->
                        <div class="form-group{{ $errors->has('nom_jefe') ? ' has-error' : '' }}">
                            <label for="nom_jefe">Nombre del jefe</label>
                            <input class="form-control" type="text" name="nom_jefe" id="nom_jefe"
                                   placeholder="Ingrese el nombre de su jefe">
                            @if ($errors->has('nom_jefe'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('nom_jefe') }}</strong>
                                </span>
                            @endif

                        </div>
                        <!-- #nombre del jefe -->

                        <br><button class="btn btn-primary col-lg-12" type="submit">Descargar formulario <span class="glyphicon glyphicon-download-alt"></span></button>

                    </form>

                </div>

            </div>
        </div>



    </div>

@endsection
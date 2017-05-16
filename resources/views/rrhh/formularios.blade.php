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
                <h1>Solicitud de vacaciones.</h1>
            </div>

            <div class="panel-body ">

                <!-- centrar -->
                <div class="row ">
                    <div class="col-md-8 col-md-offset-2">

                        <div class="bs-callout bs-callout-info  ">
                            <h4>Instrucciones.</h4>
                            Completa los campos a continuación y descarga tu solicitud <i class="material-icons">&#xE905;</i>.
                        </div>

                    </div>
                </div>

                <div class="row ">
                    <div class="col-md-8 col-md-offset-2">

                        <div class="thumbnail">

                            <form action="{{ route('formularios') }}" method="post">

                                {{ csrf_field() }}

                                <div class="form-group">
                                    <h4><stron>Datos del colaborador</stron> </h4>

                                    <div class="row">
                                        <!-- nombre -->
                                        <div class="col-md-6">

                                            <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">

                                                <label for="nombre">Nombre</label>
                                                <input class="form-control" type="text" name="nombre" id="nombre" placeholder="Ingrese su nombre"
                                                       value="{{ $nombre_completo }}">

                                                @if ($errors->has('nombre'))
                                                    <span class="help-block"><strong>{{ $errors->first('nombre') }}</strong></span>
                                                @endif

                                            </div>
                                        </div>
                                        <!-- #nombre -->

                                        <!-- cargo -->
                                        <div class="col-md-6">

                                            <div class="form-group{{ $errors->has('cargo') ? ' has-error' : '' }}">
                                                <label for="cargo">Cargo</label>
                                                <input class="form-control" type="text" name="cargo" id="cargo" placeholder="Ingrese su cargo"
                                                       value="{{ Auth::user()->int_trabajadores->CARGO }}">

                                                @if ($errors->has('cargo'))
                                                    <span class="help-block"><strong>{{ $errors->first('cargo') }}</strong></span>
                                                @endif

                                            </div>

                                        </div>
                                        <!-- #cargo -->

                                    </div>



                                    <div class="row">
                                        <!-- inicio -->
                                        <div class="col-md-6">

                                            <div class="form-group{{ $errors->has('fechaInicio') ? ' has-error' : '' }}">
                                                <label for="fechaInicio">Fecha de inicio de vacaciones</label>
                                                <input class="form-control" type="date" name="fechaInicio" id="fechaInicio" >

                                                @if ($errors->has('fechaInicio'))
                                                    <span class="help-block"><strong>{{ $errors->first('fechaInicio') }}</strong></span>
                                                @endif
                                            </div>

                                        </div>
                                        <!-- #inicio -->

                                        <!-- fin -->
                                        <div class="col-md-6">

                                            <div class="form-group{{ $errors->has('fechaFin') ? ' has-error' : '' }}">

                                                <label for="fechaFin">Fecha de fin de vacaciones (último día solicitado)</label>
                                                <input class="form-control" type="date" name="fechaFin" id="fechaFin">
                                                @if ($errors->has('fechaFin'))
                                                    <span class="help-block"><strong>{{ $errors->first('fechaFin') }}</strong></span>
                                                @endif

                                            </div>

                                        </div>
                                        <!-- #fin -->

                                    </div>
                                </div>

                                <h4><stron>Datos del jefe directo</stron> </h4>


                                <div class="row">
                                    <!-- nombre del jefe -->
                                    <div class="col-md-6">

                                        <div class="form-group{{ $errors->has('nom_jefe') ? ' has-error' : '' }}">

                                            <label for="nom_jefe">Nombre</label>
                                            <input class="form-control" type="text" name="nom_jefe" id="nom_jefe"
                                                   placeholder="Ingrese el nombre de su jefe">
                                            @if ($errors->has('nom_jefe'))
                                                <span class="help-block"><strong>{{ $errors->first('nom_jefe') }}</strong></span>
                                            @endif

                                        </div>

                                    </div>
                                    <!-- #nombre del jefe -->

                                    <!-- cargo del jefe -->
                                    <div class="col-md-6">

                                        <div class="form-group{{ $errors->has('car_jefe') ? ' has-error' : '' }}">

                                            <label for="nom_jefe">Cargo</label>
                                            <input class="form-control" type="text" name="car_jefe" id="car_jefe"
                                                   placeholder="Ingrese el cargo de su jefe">
                                            @if ($errors->has('car_jefe'))
                                                <span class="help-block"><strong>{{ $errors->first('car_jefe') }}</strong></span>
                                            @endif

                                        </div>

                                    </div>
                                    <!-- #cargo del jefe -->

                                </div>

                                <button class=" form-control btn btn-primary col-lg-12" type="submit">Descargar formulario <span class="glyphicon glyphicon-download-alt"></span></button>

                                <br><br><br>

                                <div class="row">
                                    <div class="col-md-12">
                                        <a href="{{ route('home') }}" class="btn btn-info" role="button"><span class="glyphicon glyphicon-chevron-left"></span>Volver</a>
                                    </div>
                                </div>

                            </form>
                        </div>

                    </div>
                </div>


            </div>
        </div>



    </div>

@endsection
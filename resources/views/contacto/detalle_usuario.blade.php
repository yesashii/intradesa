@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-default">

                    <div class="panel-heading">
                        <h1>{{ $trabajador->NOMBRE.' '.$trabajador->APELLIDO_PATERNO }}</h1>
                    </div>

                    <div class="panel-body">

                        <div class="container">
                            <div class="row">
                                <div class="col-md-4"><p><img src="{{ url( $trabajador->int_usuarios->url_imagen ) }}" alt=""> </p></div>
                                <div class="col-md-8">

                                    <!-- nombre -->
                                    <div class="row">
                                        <div class="col-md-2"> Nombre</div>
                                        <div class="col-md-10">: {{ $trabajador->NOMBRE.' '.$trabajador->APELLIDO_PATERNO }}</div>
                                    </div>
                                    <!-- #nombre -->
                                    <!-- correo -->
                                    <div class="row">
                                        <div class="col-md-2"> Correo</div>
                                        <div class="col-md-10">: {{ $trabajador->CORREOELEC }}</div>
                                    </div>
                                    <!-- #correo -->
                                    <!-- rut -->
                                    <div class="row">
                                        <div class="col-md-2"> RUT</div>
                                        <div class="col-md-10">: {{ $trabajador->FICHA }}</div>
                                    </div>
                                    <!-- #rut -->
                                    <!-- DIRECCION -->
                                    <div class="row">
                                        <div class="col-md-2"> Dirección</div>
                                        <div class="col-md-10">: {{ $trabajador->DIRECCION }}</div>
                                    </div>
                                    <!-- #DIRECCION -->
                                    <!-- COMUNA -->
                                    <div class="row">
                                        <div class="col-md-2"> Comuna</div>
                                        <div class="col-md-10">: {{ $trabajador->COMUNA }}</div>
                                    </div>
                                    <!-- #COMUNA -->
                                    <!-- CIUDAD -->
                                    <div class="row">
                                        <div class="col-md-2"> Ciudad</div>
                                        <div class="col-md-10">: {{ $trabajador->CIUDAD }}</div>
                                    </div>
                                    <!-- #CIUDAD -->

                                    <!-- AREA -->
                                    <div class="row">
                                        <div class="col-md-2"> Región</div>
                                        <div class="col-md-10">: {{ $trabajador->AREA }}</div>
                                    </div>
                                    <!-- #AREA -->

                                    <!-- NACION -->
                                    <div class="row">
                                        <div class="col-md-2"> País de origen</div>
                                        <div class="col-md-10">: {{ $trabajador->NACION }}</div>
                                    </div>
                                    <!-- #NACION -->

                                    <!-- FECHA_NACIMIENTO -->
                                    <div class="row">
                                        <div class="col-md-2"> Fecha de nacimiento</div>
                                        <div class="col-md-10">: {{ $trabajador->FECHA_NACIMIENTO }}</div>
                                    </div>
                                    <!-- #FECHA_NACIMIENTO -->

                                    <!-- SEXO -->
                                    <div class="row">
                                        <div class="col-md-2"> Sexo</div>
                                        <div class="col-md-10">: {{ $trabajador->SEXO }}</div>
                                    </div>
                                    <!-- #SEXO -->

                                    <!-- ESTADO_CIVIL -->
                                    <div class="row">
                                        <div class="col-md-2"> Estado civil</div>
                                        <div class="col-md-10">: {{ $trabajador->ESTADO_CIVIL }}</div>
                                    </div>
                                    <!-- #ESTADO_CIVIL -->

                                    <!-- CARGO -->
                                    <div class="row">
                                        <div class="col-md-2"> Cargo</div>
                                        <div class="col-md-10">: {{ $trabajador->CARGO }}</div>
                                    </div>
                                    <!-- #CARGO -->
                                    <!-- FECHA_INICIO -->
                                    <div class="row">
                                        <div class="col-md-2"> Inicio en la empresa</div>
                                        <div class="col-md-10">: {{ $trabajador->FECHA_INICIO }}</div>
                                    </div>
                                    <!-- #FECHA_INICIO -->

                                    <!-- EMPRESA -->
                                    <div class="row">
                                        <div class="col-md-2"> Empresa</div>
                                        <div class="col-md-10">: {{ $trabajador->EMPRESA }}</div>
                                    </div>
                                    <!-- #EMPRESA -->

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12"></div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
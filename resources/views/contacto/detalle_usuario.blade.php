@extends('layouts.app')
@include('funciones.traductor')

@section('extra_css')
    <style>

        .titulos{
            font-weight: bold !important;
        }

    </style>
@endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-default">

                    <div class="panel-heading">
                        <h1>{{ UC_primer( $trabajador->NOMBRE.' '.$trabajador->APELLIDO_PATERNO.' '.$trabajador->APELLIDO_MATERNO ) }}</h1>
                    </div>

                    <div class="panel-body">

                        <div class="container">
                            <div class="row">
                                <div class="col-md-4"><p>
                                @if( existeArchivo( $trabajador->int_usuarios->url_imagen) )
                                        <img width="300" height="300" src="{{ url( $trabajador->int_usuarios->url_imagen) }}" alt="">
                                @else
                                        <img src="{{ url('img/usuario_prueba.png') }}" alt="">
                                @endif
                                </p></div>
                                <div class="col-md-8">

                                    <!-- EMPRESA -->
                                    <div class="row">
                                        <div class="col-md-3 titulos"> Empresa</div>
                                        <div class="col-md-9">: {{ UC_primer( $trabajador->EMPRESA ) }}</div>
                                    </div>
                                    <!-- #EMPRESA -->

                                    <!-- area -->
                                    <div class="row">
                                        <div class="col-md-3 titulos"> Área</div>
                                        <div class="col-md-9">: {{ UC_primer( $trabajador->int_usuarios->int_areas->nombre ) }}</div>
                                    </div>
                                    <!-- #area -->

                                    <!-- CARGO -->
                                    <div class="row">
                                        <div class="col-md-3 titulos"> Cargo</div>
                                        <div class="col-md-9">: {{ UC_primer( $trabajador->CARGO ) }}</div>
                                    </div>
                                    <!-- #CARGO -->

                                    <!-- FECHA_INICIO -->
                                    <div class="row">
                                        <div class="col-md-3 titulos"> Fecha inicio</div>
                                        <div class="col-md-9">: {{ traduceFecha( $trabajador->FECHA_INICIO ) }}</div>
                                    </div>
                                    <!-- #FECHA_INICIO -->

                                    <!-- correo -->
                                    <div class="row">
                                        <div class="col-md-3 titulos"> Correo</div>
                                        <div class="col-md-9">: <a href="{{'mailto:'.$trabajador->CORREOELEC}}">{{ strtolower( $trabajador->CORREOELEC )  }}</a></div>
                                    </div>
                                    <!-- #correo -->

                                    <!-- TMOVIL -->
                                    <div class="row">
                                        <div class="col-md-3 titulos">Móvil</div>
                                        <div class="col-md-9">: {{ strtolower( $trabajador->Dimension2 )  }}</div>
                                    </div>
                                    <!-- #TMOVIL -->

                                    <!-- anexo -->
                                    <div class="row">
                                        <div class="col-md-3 titulos">Anexo</div>
                                        <div class="col-md-9">: {{ strtolower( $trabajador->Dimension1 )  }}</div>
                                    </div>
                                    <!-- #anexo -->

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <a href="{{URL::previous()}}" class="btn btn-info" role="button"><span class="glyphicon glyphicon-chevron-left"></span>Volver</a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
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
                                <div class="col-md-4"><p><img src="{{ url( $trabajador->int_usuarios->url_imagen ) }}" alt=""> </p></div>
                                <div class="col-md-8">

                                    <!-- correo -->
                                    <div class="row">
                                        <div class="col-md-3 titulos"> Correo</div>
                                        <div class="col-md-9">: <a href="{{'mailto:'.$trabajador->CORREOELEC}}">{{ strtolower( $trabajador->CORREOELEC )  }}</a></div>
                                    </div>
                                    <!-- #correo -->

                                    <!-- anexo -->
                                    <div class="row">
                                        <div class="col-md-3 titulos">Anexo</div>
                                        <div class="col-md-9">: {{ strtolower( $trabajador->Dimension1 )  }}</div>
                                    </div>
                                    <!-- #anexo -->

                                    <!-- CARGO -->
                                    <div class="row">
                                        <div class="col-md-3 titulos"> Cargo</div>
                                        <div class="col-md-9">: {{ UC_primer( $trabajador->CARGO ) }}</div>
                                    </div>
                                    <!-- #CARGO -->

                                    <!-- area -->
                                    <div class="row">
                                        <div class="col-md-3 titulos"> Área</div>
                                        <div class="col-md-9">: {{ UC_primer( $trabajador->int_usuarios->int_areas->nombre ) }}</div>
                                    </div>
                                    <!-- #area -->

                                    <!-- FECHA_INICIO -->
                                    <div class="row">
                                        <div class="col-md-3 titulos"> Inicio en la empresa</div>
                                        <div class="col-md-9">: {{ traduceFecha( $trabajador->FECHA_INICIO ) }}</div>
                                    </div>
                                    <!-- #FECHA_INICIO -->

                                    <!-- EMPRESA -->
                                    <div class="row">
                                        <div class="col-md-3 titulos"> Empresa</div>
                                        <div class="col-md-9">: {{ UC_primer( $trabajador->EMPRESA ) }}</div>
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
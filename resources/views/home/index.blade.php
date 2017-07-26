@extends('layouts.app.index')
@include('funciones.traductor')

@section('extra_css')
    @include('home.scope_css.home_css')
@endsection

@section('content')


    <div class="col-md-4">
        @include('home.seccion_eventos')
    </div>

    <div class="col-md-5">

        <!-- seccion de noticias -->
        <div class="row">
            <div class="col-md-12">
                @include('home.seccion_noticias')
            </div>
        </div>
        <!-- #seccion de noticias -->

        <!-- seccion indicadores económicos -->
        <div class="row">
            <div class="col-md-12">
                @include('home.seccion_indicadores_ec')
            </div>
        </div>
        <!-- #seccion indicadores económicos -->

    </div>
    <div class="col-md-3">

        <!-- cumpleaños -->
        <div class="row">
            <div class="col-md-12">
                <div class="row"> @include('home.seccion_cumpleanios') </div>
            </div>
        </div>
        <!-- #cumpleaños -->

        <!-- Calendario -->
        <div class="row">
            <div class="col-md-12">
                @include('home.seccion_calendario')
            </div>
        </div>
        <!-- #Calendario -->

        <!-- sitios de interes -->
        <div class="row">
            <div class="col-md-12">
                <div class="row">  @include('home.seccion_sitios_interes') </div>
            </div>
        </div>
        <!-- #sitios de interes -->

    </div>










@endsection

@section('extra_script')
    @include('layouts.js.jquery')
    @include('home.scope_js.home_js')
@endsection



@extends('layouts.app.index')
@include('funciones.traductor')

@section('extra_css')
    @include('home.scope_css.home_css')
@endsection
@section('extra_js_app')

@endsection

@section('content')

    <div class="col-md-2">
        @include('home.menu_vertical')
    </div>


    <div class="col-md-3">
        @include('home.carrousel_eventos')
    </div>

    <div class="col-md-4">

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

@section('footer')
    <!-- footer -->
    <div class="row" style="padding-bottom: 0 !important;">
        <div class="col-md-12">
            <footer>
                <p id="pe" style="font-family:Open Sans; color:#406286 !important;">2017 © DESARROLLO Y TECNOLOGÍA - DESA SA.
                    <img height="15" src="{{ asset('img/logos/logo-desa.png') }}" alt="">
                    <img height="15" src="{{ asset('img/logos/lacav.jpg') }}" alt=""></p>
            </footer>
        </div>
    </div>
    <!-- #footer -->
@endsection

@section('extra_script')
    @include('home.scope_js.home_js')


    <script>
        $('#myModal').on('shown.bs.modal', function () {
            $('#myInput').focus()
        })
    </script>
@endsection



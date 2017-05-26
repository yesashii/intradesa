@extends('layouts.app')
@include('funciones.traductor')

@section('extra_css')

    <style>
        /**
        esto hace que solo el fondo sea transparente.
         */
        .fondoCumple{

            background-color: rgba(255, 255, 255, 0.5) !important;
            background-image: url(img/cumpleanios/fondo_01.png);
            background-blend-mode: color;
            background-repeat: no-repeat;
            overflow: scroll;
            width: 100%;
            height: 200px;
        }

        .transparente{
            background: rgba(2, 41, 136, 0) !important;
            color: #3113ff !important;
            font-weight: bold !important;
        }

        .transparente_sin_correo{
            background: rgba(122, 130, 136, 0)!important;
            color: rgba(2, 2, 6, 0.95) !important;
            font-weight: bold !important;
        }

    </style>

    <style>
        /* Container personalizado para el home */

        @media (min-width: 768px){.container_home     { width: 750px;  } }
        @media (min-width: 992px){.container_home     { width: 970px;  } }
        @media (min-width: 1200px){.container_home    { width: 1400px; } }

        .container_home{
            margin-right: auto;
            margin-left: auto;
            padding-left: 15px;
            padding-right: 15px;
        }

        #menu_vertical{
            font-size: small;
        }


    </style>

    <link rel="stylesheet" href="{{ asset('extras/assets/css/Simple-Vertical-Navigation-Menu.css') }}"/>
    <link rel="stylesheet" href="{{ asset('extras/evento/css/Important-Highlighted-Event.css') }}"/>

@endsection


@section('content')


    <div class="container_home">

        <div class="row">

            <!-- menú vertical -->
            <div class="col-md-2">

                @include('home.menu_vertical')

            </div>
            <!-- #menú vertical -->

            <div class="col-md-2">
                @include('home.seccion_eventos')
            </div>

            <!-- seccion de noticias -->
            <div class="col-md-5">

                @include('home.seccion_noticias')

            </div>
            <!-- #seccion de noticias -->

            <div class="col-md-3">

                <!-- cumpleaños -->
                <div class="row">
                    <div class="col-md-12">
                        @include('home.seccion_cumpleanios')
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
                        @include('home.seccion_sitios_interes')
                    </div>
                </div>
                <!-- #sitios de interes -->


            </div>



        </div>

    </div>


@endsection

@section('extra_script')

    <script type="text/javascript" >

        //scroll para las noticias.
        $( "#noticias" ).scroll(function() {
            $( "#log" ).append( "<div>Handler for .scroll() called.</div>" );
        });

        //scroll para los cumpleaños del mes.
        $( "#tab1-3" ).scroll(function() {
            $( "#log" ).append( "<div>Handler for .scroll() called.</div>" );
        });

        //scroll para los cumpleaños de la semana.
        $( "#tab1-2" ).scroll(function() {
            $( "#log" ).append( "<div>Handler for .scroll() called.</div>" );
        });

        //scroll para los cumpleaños del día.
        $( "#tab1-1" ).scroll(function() {
            $( "#log" ).append( "<div>Handler for .scroll() called.</div>" );
        });

    </script>


@endsection



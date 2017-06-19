@extends('layouts.appSemantic')
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


    <div class="container-fluid">

        <div class="row">

            <!-- menú vertical -->
            <div class="col-lg-2" style="min-width: 500px!important;">

                <div class="panel panel-default">
                    <div class="panel-heading"><strong>ÁREAS</strong></div>
                    <div class="panel-body">

                        <!-- INICIO DE ACORDEON -->
                        <div class="panel-group" id="accordion">

                            <!-- RRHH -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h6 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon glyphicon-log-out"></span> RRHH</a>
                                    </h6>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <table class="table">
                                            <tr>
                                                <td>
                                                    <a href="#">Certificados</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a data-toggle="collapse"  href="#collapseOne_rrhh_beneficios"><span class="glyphicon glyphicon glyphicon-log-out"></span> Beneficios</a>

                                                    <!-- SUB PANEL BENEFICIOS -->

                                                    <div id="collapseOne_rrhh_beneficios" class="collapse">

                                                        <ul>
                                                            <li>Corporativos</li>
                                                            <li>Salud</li>
                                                            <li>Vida personal, familiar y recreación</li>
                                                            <li>Economía</li>
                                                        </ul>

                                                    </div>

                                                    <!-- SUB PANEL BENEFICIOS -->

                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="#">Liquidaciones</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a data-toggle="collapse"  href="#collapseOne_rrhh_formularios"><span class="glyphicon glyphicon glyphicon-log-out"></span> Formularios</a>
                                                    <!-- SUB PANEL FORMULARIOS -->
                                                    <div id="collapseOne_rrhh_formularios" class="collapse">

                                                        <ul>
                                                            <li>Vacaciones</li>
                                                        </ul>

                                                    </div>
                                                    <!-- SUB PANEL FORMULARIOS -->

                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- #RRHH -->

                            <!-- COMERCIAL -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h6 class="panel-title"><span class="glyphicon glyphicon glyphicon-log-out"></span> COMERCIAL</h6>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse">
                                    <div class="panel-body">

                                    </div>
                                </div>
                            </div>
                            <!-- #COMERCIAL -->

                            <!-- Marketing -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h6 class="panel-title"><span class="glyphicon glyphicon glyphicon-log-out"></span> MARKETING</h6>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse">
                                    <div class="panel-body">

                                    </div>
                                </div>
                            </div>
                            <!-- #Marketing -->

                            <!-- Adm. y Finanzas -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h6 class="panel-title"><span class="glyphicon glyphicon glyphicon-log-out"></span> ADM. Y FINANZAS</h6>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse">
                                    <div class="panel-body">

                                    </div>
                                </div>
                            </div>
                            <!-- #Adm. y Finanzas -->

                            <!-- Logística -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h6 class="panel-title"><span class="glyphicon glyphicon glyphicon-log-out"></span> LOGÍSTICA</h6>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse">
                                    <div class="panel-body">

                                    </div>
                                </div>
                            </div>
                            <!-- #Logística -->

                            <!-- Sistemas -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h6 class="panel-title"><span class="glyphicon glyphicon glyphicon-log-out"></span> SISTEMAS</h6>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse">
                                    <div class="panel-body">

                                    </div>
                                </div>
                            </div>
                            <!-- #Sistemas -->



                        </div>
                        <!-- #INICIO DE ACORDEON -->

                    </div>
                </div>

            </div>
            <!-- #menú vertical -->

            <div class="col-md-5">x</div>
            <div class="col-md-5">x</div>

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



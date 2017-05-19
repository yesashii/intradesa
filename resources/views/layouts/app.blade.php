<?php

function existeArchivoApp( $link )
{
    //dd($link);
    $nombre_fichero = $link;

    if ( file_exists($nombre_fichero) )
    {
        return true;
    } else {
        return false;
    }
}

function traduceNombreUsr( $nombres )
{
    $a_nombres      = explode(" ", $nombres);

    return $a_nombres[0];
}


?>
<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'INTRANET') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('organigrama/jquery.orgchart.css') }}">
    <link rel="stylesheet" href="{{ asset('organigrama/style.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <!-- CALLOUT -->
    <style>
        .bs-callout {
            padding: 20px;
            margin: 20px 0;
            border: 1px solid #eee;
            border-left-width: 5px;
            border-radius: 3px;
        }
        .bs-callout h4 {
            margin-top: 0;
            margin-bottom: 5px;
        }
        .bs-callout p:last-child {
            margin-bottom: 0;
        }
        .bs-callout code {
            border-radius: 3px;
        }
        .bs-callout+.bs-callout {
            margin-top: -5px;
        }
        .bs-callout-default {
            border-left-color: #777;
        }
        .bs-callout-default h4 {
            color: #777;
        }
        .bs-callout-primary {
            border-left-color: #428bca;
        }
        .bs-callout-primary h4 {
            color: #428bca;
        }
        .bs-callout-success {
            border-left-color: #5cb85c;
        }
        .bs-callout-success h4 {
            color: #5cb85c;
        }
        .bs-callout-danger {
            border-left-color: #d9534f;
        }
        .bs-callout-danger h4 {
            color: #d9534f;
        }
        .bs-callout-warning {
            border-left-color: #f0ad4e;
        }
        .bs-callout-warning h4 {
            color: #f0ad4e;
        }
        .bs-callout-info {
            border-left-color: #5bc0de;
        }
        .bs-callout-info h4 {
            color: #5bc0de;
        }
    </style>
    <!-- #CALLOUT -->


    <!-- sub_menú -->
    <style>

        .dropdown-submenu{position:relative;}
        .dropdown-submenu>.dropdown-menu{top:0;left:100%;margin-top:-6px;margin-left:-1px;-webkit-border-radius:0 6px 6px 6px;-moz-border-radius:0 6px 6px 6px;border-radius:0 6px 6px 6px;}
        .dropdown-submenu:hover>.dropdown-menu{display:block;}
        .dropdown-submenu>a:after{display:block;content:" ";float:right;width:0;height:0;border-color:transparent;border-style:solid;border-width:5px 0 5px 5px;border-left-color:#cccccc;margin-top:5px;margin-right:-10px;}
        .dropdown-submenu:hover>a:after{border-left-color:#ffffff;}
        .dropdown-submenu.pull-left{float:none;}.dropdown-submenu.pull-left>.dropdown-menu{left:-100%;margin-left:10px;-webkit-border-radius:6px 0 6px 6px;-moz-border-radius:6px 0 6px 6px;border-radius:6px 0 6px 6px;}

    </style>
    <!-- #sub_menú -->

    <!-- ICONOS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- fuentes -->
    <link href="https://fonts.googleapis.com/css?family=Baloo|Kaushan+Script" rel="stylesheet">

    <style>
        .navbar-default {
            background-color: #c8c6a5 !important;
            border-color: #d3e0e9;
        }

        /* Texto del menú */
        .navbar-default .navbar-nav>li>a, .navbar-default .navbar-text {
            color: white;
        }
        /* LOGO */
        .navbar-default .navbar-brand {
            font-family: 'Baloo', cursive;
            font-size: x-large;
            color: white;
        }

        body {
            color: #0f0f0f !important;
        }

        .text_usuario{
            font-family: 'Kaushan Script', cursive;
        }

    </style>

    @yield('extra_css')

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body >
    <div id="app">
        <!-- menu -->
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">

                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/home') }}">
                        {{ config('app.name', 'Intranet') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">

                @if( isset(Auth::user()->id) )
                    <!-- menu personal -->
                        <ul class="nav navbar-nav navbar-left">
                            <!-- mi perfil -->
                            <li class="dropdown">
                                <a
                                        href="{{ (isset(Auth::user()->id))?url('detalleUsuario/'.Auth::user()->id):'#'}}"
                                        role="button" aria-expanded="false">
                                    <strong>Mi perfil</strong></span>
                                </a>
                            </li>
                            <!-- #mi perfil -->&nbsp;

                            <!-- nosotros -->
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <strong>Nosotros</strong><span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li> <a href="{{ route('historia') }}" >Historia</a></li>
                                    <li class="divider"></li>
                                    <li> <a href="{{ route('mision') }}" >Misión</a></li>
                                    <li class="divider"></li>
                                    <li> <a href="{{ route('valores') }}" >Valores</a></li>
                                    <li class="divider"></li>
                                    <li> <a href="{{ route('organigrama', ['1']) }}" >Organigrama</a></li>
                                </ul>
                            </li>
                            <!-- #nosotros -->

                            <!-- rrhh -->
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <strong>RRHH<span class="caret"></span></strong>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li> <a href="#" >Certificados </a></li>

                                    <li class="divider"></li>
                                    <li class="dropdown-submenu">
                                        <a tabindex="-1" href="#">Beneficios</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Corporativos</a></li>
                                            <li><a href="#">Salud</a></li>
                                            <li><a href="#">Vida personal, familiar y recreación</a></li>
                                            <li><a href="#">Economía</a></li>
                                        </ul>
                                    </li>

                                    <li class="divider"></li>
                                    <li> <a href="{{ route('liquidaciones') }}" >Liquidaciones </a></li>

                                    <li class="divider"></li>
                                    <li class="dropdown-submenu">
                                        <a tabindex="-1" href="#">Formularios</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{ route('formularios') }}">Vacaciones</a></li>
                                        </ul>
                                    </li>



                                </ul>
                            </li>
                            <!-- #rrhh -->&nbsp;

                            <!-- procedimientos -->
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <strong>Procedimientos<span class="caret"></span></strong>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li> <a href="{{ route('reglamento') }}" >Reglamento interno        </a></li>
                                </ul>
                            </li>
                            <!-- #procedimientos -->&nbsp;

                            <!-- contacto -->
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <strong>Contacto<span class="caret"></span></strong>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li> <a href="{{ route('listacontactos') }}" >Lista de contanto        </a></li>
                                </ul>
                            </li>
                            <!-- #contacto -->&nbsp;


                        </ul>
                        <!-- #menu personal -->
                @endif

                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Iniciar sesión</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    @if( existeArchivoApp( Auth::user()->url_imagen) )
                                        <img src="{{ url(Auth::user()->url_imagen) }}" width="40px" height="40px" alt="..." class="img-circle">
                                    @else
                                        <img src="{{ url('img/usuario_prueba.png') }}" width="40px" height="40px" alt="..." class="img-circle">
                                    @endif
                                    <span class="text_usuario">{{ traduceNombreUsr( Auth::user()->int_trabajadores->NOMBRE ).' '.Auth::user()->int_trabajadores->APELLIDO_PATERNO }}</span> <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Cerrar sesión
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        <!-- #menu -->

        @yield('content')

    </div>

    <!-- Scripts -->
    @yield('extra_script')


    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>


    <script type="text/javascript" src="{{ asset('organigrama/jquery.orgchart.js') }}"></script>
    <script type="text/javascript" src="{{ asset('organigrama/scripts.js') }}"></script>

    @yield('extra_script_2')
    <!-- subMenu -->
    <script>
        (function($){
            $(document).ready(function(){

                $('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
                    event.preventDefault();
                    event.stopPropagation();
                    $(this).parent().siblings().removeClass('open');
                    $(this).parent().toggleClass('open');
                });
            });
        })(jQuery);
    </script>
    <!-- #subMenu -->

    <script>
        $(document).ready(function(){
            $('.dropdown-submenu a.test').on("click", function(e){
                $(this).next('ul').toggle();
                e.stopPropagation();
                e.preventDefault();



            });

        });
    </script>

</body>
</html>

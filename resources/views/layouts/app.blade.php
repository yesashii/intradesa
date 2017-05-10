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

    <style>
        body {
            color: #0f0f0f !important;
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
                                <li> <a href="{{ route('historia') }}" class="list-group-item">Historia           </a></li>
                                <li> <a href="{{ route('misionvision') }}" class="list-group-item">Misión y Visión    </a></li>
                                <li> <a href="{{ route('organigrama') }}" class="list-group-item">Organigrama        </a></li>
                            </ul>
                        </li>
                        <!-- #nosotros -->

                        <!-- rrhh -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <strong>RRHH<span class="caret"></span></strong>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li> <a href="#" class="list-group-item">Certificados       </a></li>
                                <li> <a href="{{ route('formularios') }}" class="list-group-item">Formularios        </a></li>
                                <li> <a href="#" class="list-group-item">Liquidaciones      </a></li>
                            </ul>
                        </li>
                        <!-- #rrhh -->&nbsp;

                        <!-- procedimientos -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <strong>Procedimientos<span class="caret"></span></strong>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li> <a href="{{ route('reglamento') }}" class="list-group-item">Reglamento interno        </a></li>
                            </ul>
                        </li>
                        <!-- #procedimientos -->&nbsp;



                        <!-- contacto -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <strong>Contacto<span class="caret"></span></strong>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li> <a href="{{ route('listacontactos') }}" class="list-group-item">Lista de contanto        </a></li>
                            </ul>
                        </li>
                        <!-- #contacto -->&nbsp;


                    </ul>
                    <!-- #menu personal -->

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
                                    <img src="{{ url(Auth::user()->url_imagen) }}" width="40px" height="40px" alt="..." class="img-circle">{{ Auth::user()->int_trabajadores->NOMBRE }} <span class="caret"></span>
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

</body>
</html>

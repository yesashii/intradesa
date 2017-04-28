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

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
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
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Intranet') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">

                    <!-- menu personal -->
                    <ul class="nav navbar-nav navbar-left">
                        <!-- mi perfil -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                | Mi perfil<span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li>Opción 1</li>
                            </ul>
                        </li>
                        <!-- #mi perfil -->&nbsp;

                        <!-- rrhh -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                | RRHH<span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li>Opción 1</li>
                            </ul>
                        </li>
                        <!-- #rrhh -->&nbsp;

                        <!-- procedimientos -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                | Procedimientos<span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li>Opción 1</li>
                            </ul>
                        </li>
                        <!-- #procedimientos -->&nbsp;

                        <!-- nosotros -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                | Nosotros<span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li>Opción 1</li>
                            </ul>
                        </li>
                        <!-- #nosotros -->

                        <!-- contacto -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                | Contacto<span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li>Opción 1</li>
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
                                    <img src="{{ Auth::user()->url_imagen }}" width="40px" height="40px" alt="..." class="img-circle">{{ Auth::user()->int_trabajadores->NOMBRE }} <span class="caret"></span>
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
    <script type="text/javascript" >

        $( "#target" ).scroll(function() {
            $( "#log" ).append( "<div>Handler for .scroll() called.</div>" );
        });

        $( "#other" ).click(function() {
            $( "#target" ).scroll();
        });


        // para las noticias.
        $( "#noticias" ).scroll(function() {
            $( "#log" ).append( "<div>Handler for .scroll() called.</div>" );
        });


    </script>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
</body>
</html>

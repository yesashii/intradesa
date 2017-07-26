<!-- menu -->
<nav class="navbar navbar-default" >
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

            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">

        @if( isset(Auth::user()->id) )
            <!-- menu personal -->

                <ul class="nav navbar-nav navbar-left">

                   <!-- ESTO LANZA EL MENU VERTICAL CON JS, SE PIDIO ELIMINAR -->
                    <!--
                    <li class="dropdown">
                        <a href="#" role="button" onclick="toggle_menu_vertical()" aria-expanded="false">
                            <strong><span class="glyphicon glyphicon-align-justify"></span> Áreas</strong>
                        </a>
                    </li>
                    -->

                    <!-- mi perfil -->
                    <li class="dropdown">
                        <a
                                href="{{ url('/home') }}"
                                role="button" aria-expanded="false">
                            <strong>Home</strong>
                        </a>
                    </li>
                    <!-- #mi perfil -->&nbsp;

                    <!-- mi perfil -->
                    <li class="dropdown">
                        <a
                                href="{{ (isset(Auth::user()->id))?url('detalleUsuario/'.Auth::user()->id):'#'}}"
                                role="button" aria-expanded="false">
                            <strong>Mi perfil</strong>
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

                    <!-- sucursales -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <strong>Sucursales<span class="caret"></span></strong>
                        </a>
                    </li>
                    <!-- #sucursales -->


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
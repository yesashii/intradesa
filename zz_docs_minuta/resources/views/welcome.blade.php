@extends('layouts.appSemantic')

@section('titulo')
Ingreso
@endsection

@section('extra_css')

    <style type="text/css">

        #bod{
            /*  background-repeat: no-repeat; */
            background-position: center;
            background-image: url({{ asset('img/fondo/base.jpg') }}) !important;
            background-attachment: fixed;
            background-size: 10%;

            font-family: 'Overpass', sans-serif;
        }



    </style>


@endsection

@section('contenido')

    <br />
    <br />
    <br />
    <div class="ui container">

        <div class="ui grid ">


            <div class="sixteen wide column">

                <div id="login" class="ui raised segments" style="display: none; max-width: 500px; margin: 0 auto;" >
                    <div class="ui segment">
                        <p>Ingreso al Sistema de Intranet</p>
                    </div>
                    <div id="cuerpo" class="ui segment"  style="display: none">

                        <!-- formulario -->
                        <form id="form-login" class="ui fluid form" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
                            <div class="field">
                                <label>Correo electrónico</label>
                                <div class="ui left icon input">
                                    <input id="email" type="text" name="email" placeholder="Correo electrónico" onclick="select_all('email')">
                                    <i class="user icon"></i>
                                </div>
                                <!-- manejo de errores -->
                                @if( $errors->has('email') )
                                    <div class="ui pointing red basic label">{{ $errors->first('email') }}</div>
                            @endif
                            <!-- #manejo de errores -->
                            </div>

                            <div class="field">
                                <label>Contraseña</label>
                                <div class="ui left icon input">
                                    <input id="password" type="password"  name="password" placeholder="Contraseña" onclick="select_all('password')">
                                    <i class="lock icon"></i>
                                </div>
                                <!-- manejo de errores -->
                                @if( $errors->has('password') )
                                    <div class="ui pointing red basic label">{{ $errors->first('password') }}</div>
                            @endif
                            <!-- #manejo de errores -->
                            </div>

                            <span id="butom-submit">
                        <div id="ingresar" class="ui animated green basic button" tabindex="0" onclick="submit_form()">
                            <div class="visible content">Ingresar</div>
                            <div class="hidden content">
                                <i class="sign in icon"></i>
                            </div>
                        </div>
                        </span>
                        </form>
                        <!-- #formulario -->

                    </div>
                </div>


            </div>


        </div>
    </div>

@endsection

@section('extra_script')
    <script>

        $(document).ready( function () {

            $('#login').transition({
                animation  : 'fade left in',
                duration   : '0.3s',
                onComplete : apareceCorreo
            });
        } );

        // aparicion de correo electronico
        var apareceCorreo = function () {
            $('#cuerpo').transition('scale in');
        };

        // submit
        var submit_form = function () {
            $('#butom-submit').html('<button class="ui loading green basic button">Loading</button>');
            $('#form-login').submit();
        };

        // selecciona el texto del imput
        var select_all = function ( id_val ) {
            var identifier = "#"+id_val;
            $(identifier).select();
        };

        // enter en el campo password
        $('#password').on('keypress', function (e) {
           if(e.which === 13)
           {
               submit_form();
           }
        });

    </script>
@endsection
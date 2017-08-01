<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cambio de contraseña</title>
    <link href="{{ asset('semantic/semantic.css') }}" rel="stylesheet">
    @include('layouts.js.jquery')
    <script src="{{ asset('semantic/semantic.js') }}"></script>

</head>

<body>
@if( !isset( $contraseniaCambiada ) )
<br />
<br />
<br />
<div class="ui container">

    <div class="ui grid ">


        <div class="sixteen wide column">

            <div id="login" class="ui raised segments" style="display: none; max-width: 500px; margin: 0 auto;" >
                <div class="ui segment">
                    <p>CAMBIO DE CONTRASEÑA</p>
                </div>
                <div id="cuerpo" class="ui segment"  style="display: none">

                    <!-- formulario -->
                    <form id="form-login" class="ui fluid form" method="POST" action="{{ route('cambiaContrasenia') }}">
                        {{ csrf_field() }}

                        <input type="hidden" name="email" value="{{ $email }}">
                        <input type="hidden" name="idRespaldo" value="{{ $idRespaldo }}">
                        <input id="contraseniaInit" type="hidden" name="contraseniaInit" value="{{ $contraseniaInit }}">

                        <div class="field">
                            <label>Ingrese una Nueva Contraseña</label>
                            <div class="ui left icon input">
                                <input id="password_1" type="password" name="password_1" placeholder="Al menos 5 caracteres" onclick="select_all('password_1')">
                                <i class="lock icon"></i>

                        </div>

                        <div class="field">
                            <label>Repita la Nueva Contraseña</label>
                            <div class="ui left icon input">
                                <input id="password_2" type="password"  name="password_2" placeholder="Al menos 5 caracteres" onclick="select_all('password_2')">
                                <i class="lock icon"></i>
                            </div>
                        </div>

                        <span id="butom-submit">
                        <div id="ingresar" class="ui animated green basic button" tabindex="0" onclick="submit_form()">
                            <div class="visible content">Cambiar la contraseña</div>
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


<div class="ui basic modal">
    <div class="ui icon header">
        <i class="frown icon"></i>
        Existen Errores en el Cambio de la Contraseña
    </div>
    <div class="content">
        <ul id="errores">

        </ul>
    </div>
    <div class="actions">
        <div class="ui green ok inverted button">
            <i class="checkmark icon"></i>
            OK
        </div>
    </div>
</div>

@else

    <div class="ui basic modal">
        <div class="ui icon header">
            <i class="smile icon"></i>
            Tu Contraseña ha sido Actualizada Correctamente.
        </div>
        <div class="content">
            <p> Tines que Volver a Iniciar Sesión Con Tus Nuevas Credenciales.  </p>
        </div>
        <div class="actions">
            <div class="ui green ok inverted button" onclick='window.location ="{{ route("welcome") }}"'>
                <i class="checkmark icon"></i>
                Aceptar
            </div>
        </div>
    </div>
    <script>
        $('.ui.basic.modal').modal('show');
    </script>

@endif


<script>

    $(document).ready( function () {

        $('#login').transition({
            animation  : 'fade left in',
            duration   : '0.3s',
            onComplete : apareceCorreo
        });
    } );

    // aparicion de correo electronico
    let apareceCorreo = function () {
        $('#cuerpo').transition('scale in');
    };

    // submit
    let submit_form = function () {

        let errores             = '';
        const pass_1            = $('#password_1');
        const pass_2            = $('#password_2');
        const contraseniaInit   = $('#contraseniaInit');
        const domErrores        = $('#errores');

        if( pass_1.val() != pass_2.val() )
        {
            errores += '<li>Las Contraseñas no Coinciden. </li>';
        }else{
            if( pass_1.val().length < 5 ){ errores += '<li>La Contraseña Debe Contener al Menos 5 Caracteres. </li>'; }
            if( pass_1.val() == contraseniaInit.val() ){ errores += '<li>La Contraseña Debe Ser Distinta a la Anterior. </li>'; }
        }

        if( errores.length == 0 )
        {
            $('#butom-submit').html('<button class="ui loading green basic button">Loading</button>');
            $('#form-login').submit();
        }else{
            domErrores.html(errores);
            $('.ui.basic.modal').modal('show');
        }
    };

    // selecciona el texto del imput
    let select_all = function ( id_val ) {
        let identifier = "#"+id_val;
        $(identifier).select();
    };

    // enter en el campo password
    $('#password_1').on('keypress', function (e) {
        if(e.which === 13)
        {
            submit_form();
        }
    });

    $('#password_2').on('keypress', function (e) {
        if(e.which === 13)
        {
            submit_form();
        }
    });

</script>

</body>
</html>
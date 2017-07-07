@extends('layouts.appSemantic')

@section('titulo')
    Admin
@endsection

@section('contenido')
    <div class="ui teal inverted menu">
        <a class="active item">
            Home
        </a>

        <div class="right menu">
            <div class="item">
                <div class="ui primary button">Salir</div>
            </div>
        </div>
    </div>

    <div class="ui grid">

        <div id="menu-vertical"  style="display: none">
            <div class="ui five wide column raised segment" style="left: 0px; top: 0px; width: 250px !important; height: 1813px !important; margin-top: 0px;">
                <div class="ui accordion">
                    <div class="title ">
                        <i class="dropdown icon"></i>
                        SECCIÓN DE NOTICIAS
                    </div>
                    <div class="content ">
                        <p><i class="folder outline icon"></i> <span onclick="cargaSeccion( 'seccion-subir-noticia' );"><a href="#">Subir noticia</a></span> </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="eleven wide column">

            <div id="area-trabajo"> </div>

        </div>
    </div>
@endsection

@section('extra_script')
    <script type="text/javascript">

        $( document ).ready(function() {
            // Handler for .ready() called.
            $('.ui.accordion').accordion();
            $('#menu-vertical').transition('drop in');
        });

        var cargaSeccion = function( url_ ){
            var url = url_;
            $.ajax({
                async:true,
                type: "GET",
                contentType: "application/x-www-form-urlencoded",
                url: url,
                beforeSend:cargando,
                success:carga,
                //timeout:10000,
                error:error_
            });
        };

        var cargando = function(){
            var x=$("#tResutados1");
            x.html('<div class="ui loading form"></div>');
        };

        var carga = function( datos ){
            var x = $("#area-trabajo");
            x.html(datos);
        };
        
        var error_ = function () {
            $("#area-trabajo").text('Problemas al cargar contenido.');
            return false;
        };


    </script>
@endsection
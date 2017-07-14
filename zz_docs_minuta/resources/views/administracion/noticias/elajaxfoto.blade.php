Skip to content
This repository
Search
Pull requests
Issues
Marketplace
Gist
@yesashii
Sign out
Unwatch 1
Star 0
Fork 0 yesashii/intradesa
Code  Issues 0  Pull requests 0  Projects 0  Wiki  Settings Insights
Branch: master Find file Copy pathintradesa/resources/views/administracion/index.blade.php
a42a4e9  2 days ago
@yesashii yesashii agregando VUEJS
1 contributor
RawBlameHistory
182 lines (153 sloc)  5.38 KB
@extends('layouts.appSemantic')

@section('titulo')
    Admin
@endsection

@section('contenido')
    <div id="app">
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
                            <p><i class="folder outline icon"></i> <span v-on:click="cargaSeccionNoticias( 'seccion-subir-noticia' )"><a href="#">Subir noticia</a></span> </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="eleven wide column">

                <!-- <div v-if="mostrarArea" id="area-trabajo"> </div> -->
                <transition name="slide-fade">

                    <div v-if="mostrarArea" >
                        <div v-html="estructura"></div>
                    </div>

                </transition>

            </div>
        </div>
    </div>
@endsection

@section('extra_script')
    <script src="https://unpkg.com/vue"></script>
    <script type="text/javascript">
        $( document ).ready(function() {
            // Handler for .ready() called.
            $('.ui.accordion').accordion();
            $('#menu-vertical').transition('drop in');
            $('.ui.checkbox').checkbox();
            $('.activating.element').popup();
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
        var cargaSeccion_post = function( url_ ){
            var url = url_;
            var formData = new FormData($("form")[0]);
            //formData.append('file', $('#file')[0].files[0]);
            $.ajax({
                url : url,
                type : 'POST',
                data : formData,
                processData: false,  // tell jQuery not to process the data
                contentType: false,  // tell jQuery not to set contentType
                success:carga,
                beforeSend:cargando,
                error:error_
            });
        };
        var cargaTablaNoticias = function( numPag ){
            var url = 'seccion-subir-noticia?page='+numPag;
            $.ajax({
                async:true,
                type: "GET",
                contentType: "application/x-www-form-urlencoded",
                url: url,
                beforeSend:cargando,
                success:function( datos ){
                    var x = $("#area-trabajo");
                    x.html(datos);
                },
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

        var error_ = function ( err ) {
            $("#area-trabajo").text('Problemas al cargar contenido.'+ err);
            return false;
        };
        // VUEJS
        var app = new Vue({
            el: '#app',
            data: {
                mostrarArea: false,
                estructura:''
            },
            methods: {
                cargaSeccionNoticias: function(url_){
                    var url = url_;
                    $.ajax({
                        async:true,
                        type: "GET",
                        contentType: "application/x-www-form-urlencoded",
                        url: url,
                        beforeSend:function(){
                            this.estructura = 'Cargando...';
                        },
                        success:function( datos ){
                            this.estructura = datos;
                            this.mostrarArea = !this.mostrarArea;
                        }.bind(this),
                        error:function ( err ) {
                            this.estructura = 'Error al cargar componente';
                        }
                    });
                }
            }
        })
    </script>
@endsection

<style scoped>
    /* Enter and leave animations can use different */
    /* durations and timing functions.              */
    .slide-fade-enter-active {
        transition: all .3s ease;
    }
    .slide-fade-leave-active {
        transition: all .3s ease;
    }
    .slide-fade-enter, .slide-fade-leave-to
        /* .slide-fade-leave-active for <2.1.8 */ {
        transform: translateX(10px);
        opacity: 0;
    }
</style>
Contact GitHub API Training Shop Blog About
© 2017 GitHub, Inc. Terms Privacy Security Status Help
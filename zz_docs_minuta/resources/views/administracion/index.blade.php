@extends('layouts.appSemantic')

@section('titulo')
    Admin
@endsection

@section('contenido')

    <div id="app">

        <my-menu></my-menu>

        <div class="ui grid">

            <div class="ui four wide column raised segment" id="menu-vertical" style="display: none">

                <menu-vertical></menu-vertical>
            </div>

            <div class="twelve wide column">

                <transition name="slide-fade">
                        <carga-noticia></carga-noticia>
                </transition>
            </div>

        </div>

    </div>


    <script src="https://unpkg.com/vue"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    <script>


        // componente my-menu >>
        Vue.component('my-menu', {
            template:   `
                        <div class="ui teal inverted menu">
                            <a class="active item" v-text="home"></a>

                            <div class="right menu">
                                <div class="item">
                                    <div class="ui primary button" v-text="salir"></div>
                                </div>
                            </div>
                        </div>
                        `,
            data(){

                return  {home: 'Home', salir: 'Salir',};
            }
        });
        // componente my-menu <<

        // componente menu-vertical >>
        Vue.component('menu-vertical', {
            template:   `
                    <div class="ui accordion" style="left: 0px; top: 0px; width: 250px !important; height: 1813px !important; margin-top: 0px;">
                        <div class="title "><i class="dropdown icon"></i> <span v-text="item_1"></span> </div>
                        <div class="content ">
                            <p><i class="folder outline icon"></i> <span v-on:click="cargaMenu_1" ><a href="#" v-text="sub_item_1"></a></span> </p>
                        </div>
                    </div>
            `,
            data(){
                return { item_1: 'NOTICIAS', sub_item_1: 'Administrar noticias', };
            },
            methods: {
                cargaMenu_1(){
                    axios.get('/seccion-subir-noticia').then(function (response) {
                        this.http_r_1 = response.data;
                    }.bind(this)).catch(function (error) {
                            console.log(error);
                        });
                    //this.mostrar_adm_noticia = true;
                }
            }
        });
        // componente menu-vertical <<

        // Administrar noticias >>
        Vue.component('carga-noticia',{
            template: `

<form class="ui form" method="post" action="{{ 'seccion-subir-noticia-post' }}" id="form" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="field">
        <label>Imágen</label>
        <input type="file" name="file" id="file" >
    </div>
    <div class="field">
        <label>Título</label>
        <input type="text" name="titulo" placeholder="Ingrese el título de la noticia">
    </div>

    <div class="field">
        <label>Sub titulo</label>
        <input type="text" name="sub_titulo" placeholder="Ingrese el sub título de la noticia">
    </div>

    <div class="field">
        <label>Cuerpo de la noticia</label>
        <textarea name="texto" rows="2"></textarea>
    </div>

     <button class="ui button" type="button" onclick="cargaSeccion_post( 'seccion-subir-noticia-post' );" >Cargar noticia</button>
    <!-- <button class="ui button" type="submit" >Cargar noticia</button> -->
</form>
            `,
            data(){
                return data_shared;
            }
        });
        // Administrar noticias <<

        let app = new Vue( { el: '#app' } );
    </script>

@endsection

@section('extra_script')

    <script type="text/javascript">

        $( document ).ready(function() {
            // Handler for .ready() called.
            $('.ui.accordion').accordion();
            $('#menu-vertical').transition('drop in');
            $('.ui.checkbox').checkbox();
            $('.activating.element').popup();

        });

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
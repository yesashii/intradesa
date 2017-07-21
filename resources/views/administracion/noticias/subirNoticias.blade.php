@extends('administracion.index')


@section('work-space')

    <div id="app_">


        <div class="ui modal">
            <i class="close icon"></i>
            <div class="header">
                Previsualización de la noticia
            </div>
            <div class="image content">
                <div class="ui large image">
                    <img  :src="imagen_modal">
                </div>
                <div class="description">
                    <h2 >@{{ titulo_modal }}</h2>
                    <h4 >@{{ sub_titulo_modal }}</h4>
                    <p >@{{ cuerpo_modal }}</p>

                </div>
            </div>
            <div class="actions">
                <div class="ui positive right labeled icon button">
                    Cerrar
                    <i class="checkmark icon"></i>
                </div>
            </div>
        </div>


        <div class="ui container">

            @if( count($errors) > 0 )
                <div class="ui error message">
                    <ul>
                        @foreach( $errors->all() as $error )
                            <li><i class="close icon"></i>{{ $error }}</li>
                        @endforeach
                    </ul>

                </div>
            @endif

            @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                @if(Session::has('alert-' . $msg))

                    <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                @endif
            @endforeach

            <form class="ui form"
                  id="form"
                  method="post" action="{{ 'seccion-subir-noticia-post' }}"
                  enctype="multipart/form-data"
                  @submit.prevent="onSubmit">

                <input type="hidden" name="id_noticia" v-model="id_noticia" :value="id_noticia">

                <div class="field">
                    <label>Imágen</label>
                    <input type="file" name="file" id="file" >
                </div>
                <div class="field">
                    <label>Título</label>
                    <input type="text" name="titulo" placeholder="Ingrese el título de la noticia" v-model="titulo" :value="titulo">
                </div>

                <div class="field">
                    <label>Sub titulo</label>
                    <input type="text" name="sub_titulo" placeholder="Ingrese el sub título de la noticia" v-model="sub_titulo" :value="sub_titulo">
                </div>

                <div class="field">
                    <label>Cuerpo de la noticia</label>
                    <textarea name="texto" rows="2" v-model="cuerpo" >@{{ cuerpo }}</textarea>
                </div>

                <button class="ui button" type="submit"  >Cargar noticia</button>
            </form>

        </div>

        <br />
        <br />
        <div class="ui container">

            <div id="tabla-noticias">

                <table class="ui green fixed table">
                    <thead>
                    <tr>
                        <th class="twelve wide">TÍTULO</th>
                        <th class="two wide center aligned">ACCIÓN</th>
                        <th class="two wide center aligned">ESTADO</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="noticia in noticias">
                        <td ><img class="ui top aligned circular image"  width="50px" height="50px" :src="this.location.origin+'/'+noticia.imagen">  <span> @{{ noticia.titulo }} </span> </td>
                        <td class="center aligned" >
                            <span v-on:click="llamaActualizar( noticia.id_noticia )"><i class="large write square icon" title="Editar"></i></span> |

                            <span v-on:click="llamaMostrar( noticia.id_noticia )"><i class="large unhide icon" title="Ver detalle" ></i>|</span>

                            <span v-on:click="eliminaNoticia( noticia.id_noticia )"> <i class="large remove circle icon" title="Eliminar" ></i></span>
                        </td>
                        <td class="center aligned">

                            <div class="ui fitted toggle checkbox">
                                <input type="checkbox"
                                       v-on:change="activaNoticia(noticia.id_noticia)"
                                       name="activa" title="Desactivar/Activar" :checked="(noticia.activa == 1)?'checked':''" >
                                <label></label>
                            </div>
                        </td>
                    </tr>
                    </tbody>

                </table>


            </div>

        </div>

    </div>

    <script src="https://unpkg.com/vue"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>



    <script>

        let app = new Vue({
            el: '#app_',
            data: {
                chequear: '',
                noticias: '',
                id_noticia: '',
                imagen: '',
                titulo: '',
                sub_titulo: '',
                cuerpo:'',
                id_noticia_modal: '',
                titulo_modal: '',
                sub_titulo_modal: '',
                cuerpo_modal: '',
                imagen_modal: '',
            },

            methods:{
                activaNoticia: function ( idnoticia ) {

                    axios.get('/activar-noticia/'+idnoticia)
                        .then(function (response) {
                            console.log(response);
                            let mensage = '';
                            if(response.data.activa==0){
                                mensage = 'desactivada'
                            }else{
                                mensage = 'activada'
                            }


                            $.createNotification({
                                horizontal: 'right',
                                vertical: 'bottom',
                                content: 'Noticia '+mensage,
                                duration: 3000
                            })


                        })
                        .catch(function (error) {
                            console.log(error);
                        });

                },

                onSubmit: function () {

                    let string_error = '';
                    let falta = false;
                    if( !this.id_noticia )
                    {
                        let largo       = (document.getElementById('file').value).length;
                        let extencion   = document.getElementById('file').value.substring(largo - 3);
                        if( !document.getElementById('file').value ){ falta= true; string_error += '- No ha seleccionado ninguna imágen\n' }
                        if( extencion.toUpperCase() != 'JPG' ){ falta= true; string_error += '- El formáto de la imagen debe ser JPG\n' }
                    }
                    if( !this.titulo ){ falta= true; string_error       += '- No ha ingresado el título\n' }
                    if( !this.sub_titulo ){ falta= true; string_error   += '- No ha ingresado el sub título\n' }
                    if( !this.cuerpo ){ falta= true; string_error       += '- No ha ingresado el cuerpo de la noticia\n' }
                    if(falta)
                    {
                        alert(string_error); return false
                    }else{

                        if( this.id_noticia ){

                            var formData = new FormData($("form")[0]);
                            axios.post('/actualiza-noticia-post', formData)
                                .then(function (response) {
                                    console.log(response);
                                    this.noticias = response.data;
                                    document.getElementById("form").reset();
                                    this.titulo     = "";
                                    this.sub_titulo = "";
                                    this.cuerpo     = "";
                                }.bind(this))
                                .catch(function (error) {
                                    console.log(error);
                                });
                        }else{

                            var formData = new FormData($("form")[0]);
                            axios.post('/seccion-subir-noticia-post', formData)
                                .then(function (response) {
                                    console.log(response);
                                    this.noticias = response.data;
                                    document.getElementById("form").reset();
                                    this.titulo     = "";
                                    this.sub_titulo = "";
                                    this.cuerpo     = "";
                                }.bind(this))
                                .catch(function (error) {
                                    console.log(error);
                                });

                        }
                    }
                },

                eliminaNoticia: function( idnoticia ){
                    axios.get('/elimina-noticia/'+idnoticia)
                        .then(function (response) {
                            console.log(response);
                            this.noticias = response.data;

                            $.createNotification({
                                horizontal: 'right',
                                vertical: 'bottom',
                                content: 'Noticia eliminada',
                                duration: 3000
                            })



                        }.bind(this))
                        .catch(function (error) {
                            console.log(error);
                        });

                },

                llamaActualizar: function( idnoticia ){

                    axios.get('/actualiza-noticia/'+idnoticia)
                        .then(function (response) {
                            console.log(response.data.data);
                            this.id_noticia     = response.data.data.id_noticia;
                            this.titulo         = response.data.data.titulo;
                            this.sub_titulo     = response.data.data.sub_titulo;
                            this.cuerpo         = response.data.data.texto;

                        }.bind(this))
                        .catch(function (error) {
                            console.log(error);
                        });
                },
                llamaMostrar: function( idnoticia ){
                    axios.get('/actualiza-noticia/'+idnoticia)
                        .then(function (response) {
                            console.log(response.data.data);
                            this.id_noticia_modal     = response.data.data.id_noticia;
                            this.titulo_modal         = response.data.data.titulo;
                            this.sub_titulo_modal     = response.data.data.sub_titulo;
                            this.cuerpo_modal         = response.data.data.texto;
                            this.imagen_modal         = window.location.origin+'/'+response.data.data.imagen;

                        }.bind(this))
                        .catch(function (error) {
                            console.log(error);
                        });

                    $('.ui.modal')
                        .modal('show')
                    ;
                }
            },
            mounted(){
                axios.get('/trae-noticias')
                    .then(function (response) {
                        this.noticias = response.data;

                    }.bind(this))
                    .catch(function (error) {
                        console.log(error);
                    });

            }

        });

    </script>



@endsection










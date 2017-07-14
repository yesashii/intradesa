@extends('administracion.index')


@section('work-space')

    <div id="app_">

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

                <button class="ui button" type="submit"  >Cargar noticia</button>
                <!-- <button class="ui button" type="submit" >Cargar noticia</button> -->
            </form>

        </div>

        <br />
        <br />
        <div class="ui container">

            <div id="tabla-noticias">

                <table class="ui green fixed table">
                    <thead>
                    <tr>
                        <th class="twelve wide">TÍTULO <spam id="alerta-tabla-noticia" style="display: none"> - Noticia eliminada </spam></th>
                        <th class="two wide center aligned">ACCIÓN</th>
                        <th class="two wide center aligned">ESTADO</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="noticia in noticias">
                        <td> @{{ noticia.titulo }} </td>
                        <td class="center aligned">
                            <i class="large write square icon" title="Editar"></i> |

                            <i class="large unhide icon" title="Ver detalle" ></i>|

                            <span v-on:click="eliminaNoticia( noticia.id_noticia )"> <i class="large remove circle icon" title="Eliminar" ></i></span>
                        </td>
                        <td class="center aligned">
                            <div class="ui toggle checkbox">
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
                noticias: ''
            },
            methods:{
                activaNoticia: function ( idnoticia ) {

                    axios.get('/activar-noticia/'+idnoticia)
                        .then(function (response) {
                            console.log(response);
                        })
                        .catch(function (error) {
                            console.log(error);
                        });

                },

                onSubmit: function () {

                    var formData = new FormData($("form")[0]);
                    axios.post('/seccion-subir-noticia-post', formData)
                        .then(function (response) {
                            console.log(response);
                            this.noticias = response.data;
                            document.getElementById("form").reset();
                        }.bind(this))
                        .catch(function (error) {
                            console.log(error);
                        });

                },

                eliminaNoticia: function( idnoticia ){
                    axios.get('/elimina-noticia/'+idnoticia)
                        .then(function (response) {
                            console.log(response);
                            this.noticias = response.data;
                            $('#alerta-tabla-noticia').css('display', 'block');
                            setTimeout(function() {
                                $("#alerta-tabla-noticia").fadeOut(1500);
                            },3000);
                        }.bind(this))
                        .catch(function (error) {
                            console.log(error);
                        });

                },
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










@extends('layouts.app.index')


<template id="c-titulo-panel">
    <h1>@{{ titulo }}</h1>
</template>

<template id="c-formulario">
    <form v-on:submit.prevent="solicita" method="post" id="form">
        <div class="ui grid">
            <div class="eight wide column">
                <label for="sel1">Tipo de solicitud</label>
                <select class="form-control" id="sel1" name="tipo">
                    <option v-for="tipo in  {{ json_encode($tipos_solicitud) }}" :value="tipo.id">@{{ tipo.nombre | upper }}</option>
                </select>
            </div>
            <div class="eight wide column">
                <label for="sel1">Motivo de la solicitud</label>
                <select class="form-control" id="sel2" name="motivo">
                    <option v-for="motivo in  {{ json_encode($motivos_solicitud) }}" :value="motivo.id">@{{ motivo.nombre | upper }}</option>
                </select>
            </div>

        </div>
        <br />
        <br />

        <button type="submit" class="ui inverted green button"  >Solicitar</button>

    </form>
</template>

<template id="c-tabla">

    <table class="ui very basic table">
        <thead>
        <tr>
            <th>Tipo de Solicitud</th>
            <th>Motivo de la solicitud</th>
            <th>Estado</th>
            <th>Válido hasta</th>
            <th>Accion</th>
        </tr>
        </thead>
        <tbody>

        <tr v-for="item in solicitudes" >
            <td>@{{ item.tipo_id.nombre }}</td>
            <td>@{{ item.motivo_id.nombre }}</td>
            <td>@{{ item.estado_id.nombre }}</td>
            <td>@{{ item.fecha_caducacion | fecha }}</td>
            <td >
                <a href="#" v-on:click="eliminaSolicitud(item.id)"> <i class="remove icon"></i> </a>
                <span v-if="item.estado_id.id==2">|
                    <a v-on:click="muestraSolicitud(item.id)" href="#"><i class="unhide icon"></i></a>|
                    <a  :href="traeLink(item.id)"><i class="cloud download icon"></i></a>
                </span>
            </td>
        </tr>

        </tbody>

    </table>

</template>



@section('extra_css')
    <link href="{{ asset('semantic/semantic.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/notification.css') }}">
    <link href="https://unpkg.com/animate.css@3.5.1/animate.min.css" rel="stylesheet" type="text/css">
@endsection


@section('content')




    <!-- MODAL -->
    <div class="ui longer modal" style="margin-top: -355.398px;">
        <div class="header">Preview</div>
        <div class="scrolling content">
            <p id="vista_previa_certificado" style="padding-left: 20%"></p>
        </div>
    </div>
    <!-- MODAL -->



    <div id="solicitud-certificado" class="ui container">

        <div  id="panel" class="panel panel-default" style="display: none" >

            <div class="panel-heading">
                <titulo-component></titulo-component>
            </div>

            <div class="panel-body ">

                <div class="ui container">

                    <div class="ui sixteen wide columns">
                        <formulario-component></formulario-component>
                    </div>

                    <div class="ui sixteen wide columns">
                        <tabla-component></tabla-component>
                    </div>

                </div>

            </div>
        </div>

    </div>


    <script src="https://unpkg.com/vue"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="{{ asset('semantic/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('semantic/semantic.js') }}"></script>

    <script>

        let bus = new Vue();

        Vue.component('titulo-component', {
            template: '#c-titulo-panel',
            data() {
                return { titulo: 'Solicitud de Certificados'}
            }
        });

        Vue.component( 'formulario-component', {
            template: '#c-formulario',
            data: function () {
                return {
                    solicitudes: {}
                }
            },
            filters: {
                upper: function (value) {
                    return value.toUpperCase();
                }
            },
            methods: {
                solicita: function () {
                    const formData = new FormData($("form")[1]);
                    axios.post('/solicita-solicitud-post', formData)
                        .then(function (response) {
                            console.log(response);
                            this.solicitudes = response.data;
                            bus.$emit('solicita', 1); // EMIT
                            this.notifica('Solicitud Ingresada...');
                        }.bind(this))
                        .catch(function (error) {
                            console.log(error);
                        });
                },
                notifica: function ( mensaje ) {
                    $.createNotification({
                        horizontal: 'right',
                        vertical: 'bottom',
                        content: mensaje,
                        duration: 3000
                    });
                }
            },
            created: function () {
                bus.$on( 'notifica-elimina', function ( mensaje ) {
                    this.notifica(mensaje);
                }.bind(this) );
            }
        } );

        Vue.component( 'tabla-component', {
            template: '#c-tabla',
            data: function () {
                return {
                    solicitudes: {}
                }
            },
            methods: {
                traeSolicitudes: function () {

                    axios.get('/traeCertificados')
                        .then(function (response) {
                            console.log(response);
                            this.solicitudes = response.data.certificados;
                        }.bind(this))
                        .catch(function (error) {
                            console.log(error);
                        });
                },
                muestraSolicitud: function ( idcertificado ) {
                    axios.get('/muestraCertificado/'+idcertificado).then(function (response) {

                        $('#vista_previa_certificado').html(response.data);

                        }.bind(this))
                        .catch(function (error) {
                            console.log(error);
                        });



                    $('.ui.longer.modal').modal('show');
                },
                eliminaSolicitud: function ( idsolicitud ) {
                    axios.get('/eliminaSolicitud/'+idsolicitud)
                        .then(function (response) {
                            console.log(response);
                        }.bind(this))
                        .catch(function (error) {
                            console.log(error);
                        });
                    bus.$emit('notifica-elimina', 'Solicitud Eliminada...');
                    return this.traeSolicitudes();
                },
                traeLink: function (idSolicitud) {
                    // `this` points to the vm instance
                    return window.location.origin+'/descargaCertificado/'+idSolicitud;
                }
            },
            filters: {
                fecha: function (value) {
                    if(value){
                        const f     = new Date(value);
                        let mes     = (f.getMonth() +1)>9?(f.getMonth() +1):'0'+(f.getMonth() +1);
                        let dia     = (f.getDate()>9)?f.getDate():'0'+f.getDate();
                        let anio    = f.getFullYear();
                        return dia + "-" + mes + "-" + anio;
                    }else{
                        return '';
                    }

                }
            },
            created: function () {

                bus.$on('solicita', function (arguments) {

                    return this.traeSolicitudes();
                }.bind(this));
                return this.traeSolicitudes();

            }
        } );

        let app_sc = new Vue({
            el: '#solicitud-certificado',
            data: {

            },
            created: function () {
                $('#select').dropdown();
                $('#panel').transition({animation: 'scale'});


            },

        });


    </script>

@endsection

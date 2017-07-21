@extends('administracion.index')
<template id="c-tabla">

    <table class="ui very basic table">
        <thead>
        <tr>
            <th>Usuario</th>
            <th>Tipo de Solicitud</th>
            <th>Fecha</th>
            <th>Motivo</th>
            <th style="text-align: right">Acción</th>
        </tr>
        </thead>
        <tbody>

        <tr v-for="item in solicitudes" >
            <td>@{{ item.user_id.FICHA }}</td>
            <td>@{{ item.tipo_id.nombre }}</td>
            <td>@{{ item.fecha_solicitud | fecha}}</td>
            <td>@{{ item.motivo_id.nombre }}</td>
            <td >
                <a v-on:click="aprobarSolicitud(item.id)" class="ui teal right ribbon label">Aprobar</a><br /><br />
                <a class="ui red right ribbon label">Reprobar</a>
            </td>
        </tr>

        </tbody>

    </table>

</template>


@section('work-space')

    <div id="solicitud-certificado" class="ui container">
        <tabla-component></tabla-component>
    </div>


    <script src="https://unpkg.com/vue"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="{{ asset('semantic/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('semantic/semantic.js') }}"></script>

    <script>





        Vue.component( 'tabla-component', {
            template: '#c-tabla',
            data: function () {
                return {
                    solicitudes: {}
                }
            },
            filters: {
                fecha: function (value) {
                    const f     = new Date(value);
                    let mes     = (f.getMonth() +1)>9?(f.getMonth() +1):'0'+(f.getMonth() +1);
                    let dia     = (f.getDate()>9)?f.getDate():'0'+f.getDate();
                    let anio    = f.getFullYear();
                    return dia + "-" + mes + "-" + anio;
                }
            },
            methods: {
                traeSolicitudes: function () {

                    axios.get('/actualiza-solicitudes-admin')
                        .then(function (response) {
                            console.log(response);
                            this.solicitudes = response.data.certificados;
                        }.bind(this))
                        .catch(function (error) {
                            console.log(error);
                        });
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
                aprobarSolicitud: function ( idsolicitud ) {
                    axios.get('/aprueba-solicitud-admin/'+idsolicitud).then(response=>{
                        this.traeSolicitudes();
                        this.notifica('Solicitud aprobada...');
                    }).catch(function (error) {
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
            created(){
                setInterval(()=>this.traeSolicitudes(),7000);
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
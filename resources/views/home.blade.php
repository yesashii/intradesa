@extends('layouts.app')
@include('funciones.traductor')

@section('content')

    <div class="container">
        <div class="row">

            <div class="col-md-8">

                <div class="panel panel-default">

                    <div class="panel-heading">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab-1" role="tab" data-toggle="tab">Noticias recientes</a></li>
                            <li><a href="#tab-2" role="tab" data-toggle="tab">Noticia principal</a></li>
                            <li><a href="#tab-3" role="tab" data-toggle="tab">Eventos</a></li>
                        </ul>
                    </div>

                    <div class="panel-body">

                        <div class="tab-content">

                            <!-- pestaña 1 -->
                            <div class="tab-pane active" role="tabpanel" id="tab-1">

                                @foreach( $noticias as $noticia )

                                    <div class="thumbnail">
                                        <img src="{{ url($noticia->imagen) }}"/>
                                        <div class="caption">
                                            <h1>{{ $noticia->titulo }}</h1>
                                            <h3>{{ $noticia->sub_titulo }}</h3>
                                            <p>{{ $noticia->texto }}</p>
                                        </div>
                                    </div>
                                @endforeach
                                {{ $noticias->links() }}

                            </div>
                            <!-- #pestaña 1 -->

                            <!-- pestaña 2 -->
                            <div class="tab-pane" role="tabpanel" id="tab-2">
                                <p>Second tab content.</p>
                            </div>
                            <!-- #pestaña 2 -->

                            <!-- pestaña 3 -->
                            <div class="tab-pane" role="tabpanel" id="tab-3">
                                <p>Third tab content.</p>
                            </div>
                            <!-- #pestaña 3 -->

                        </div><!-- <div class="tab-content"> -->
                    </div>
                </div>
            </div>

            <div class="col-md-4 ">

                <div class="panel panel-default">
                    <div class="panel-heading">Cumpleaños</div>

                    <div class="panel-body">

                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab1-1" role="tab" data-toggle="tab">Hoy</a></li>
                            <li><a href="#tab1-2" role="tab" data-toggle="tab">Semana</a></li>
                            <li><a href="#tab1-3" role="tab" data-toggle="tab">Mes</a></li>
                        </ul>

                        <div class="tab-content">
                            <!-- pestaña 1 -->
                            <div class="tab-pane active" role="tabpanel" id="tab1-1">

                               <!-- testimonios -->
                                <p>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <div class="panel-title">

                                            <div class="row">
                                                <div class="col-md-2 "><img src="img/usuario_prueba.png" width="50px" height="50px" alt="..." class="img-circle"></div>
                                                <div class="col-md-10 ">
                                                    <blockquote>
                                                        <p>Nombre de usuario</p>
                                                        <small>Cargo de prueba </small>
                                                    </blockquote>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                </p>
                                <!-- #testimonios -->

                            </div>
                            <!-- #pestaña 1 -->

                            <!-- pestaña 2 -->
                            <div class="tab-pane" role="tabpanel" id="tab1-2">

                                @foreach( $cumpleSemanaUsuarios as $cumpleanero )


                                    <div class="panel panel-default well">
                                        <div class="panel-heading">
                                            <div class="panel-title">

                                                <div class="row">
                                                        <div class="col-md-3 center-block">
                                                            <img src="{{ $cumpleanero->url_imagen }}" width="50px" height="50px" alt="..." class="img-circle">
                                                            <div class="text-danger">
                                                                <div class="lead">
                                                                    {{ traduceMes( $cumpleanero->fecha_nacimiento ) }}
                                                                    <br>
                                                                    {{ traduceDia($cumpleanero->fecha_nacimiento) }}
                                                                </div>

                                                            </div>
                                                        </div>
                                                    <div class="col-md-9 ">
                                                        <blockquote>
                                                            <p>{{ $cumpleanero->nombre }}</p>
                                                            <small>{{ $cumpleanero->cargos()->get()[0]->nombre }}</small>
                                                            <small>{{ $cumpleanero->cargos()->get()[0]->departamentos()->get()[0]->nombre }}</small>
                                                        </blockquote>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>


                                @endforeach

                            </div>
                            <!-- #pestaña 2 -->

                            <!-- pestaña 3 -->
                            <div class="tab-pane" role="tabpanel" id="tab1-3">
                                <p>Third tab content.</p>
                            </div>
                            <!-- #pestaña 3 -->
                        </div>

                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">Cumpleaños del mes</div>

                    <div class="panel-body">
                        Sin información
                    </div>
                </div>

            </div>

        </div>

    </div>
@endsection



@extends('layouts.app')
@include('funciones.traductor')

@section('content')

    <div class="container">
        <div class="row">

            <div class="col-md-8">

                <div class="panel panel-default">

                    <div class="panel-heading">
                        <h1>NOTICIAS</h1>
                    </div>

                    <div class="panel-body">

                        <div id="noticias" class="tab-content">


                            <div style="overflow: scroll; width: 100%; height: 400px;">
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

                                <div class="list-group well">
                                    @foreach( $cumpleSemanaUsuarios as $cumpleanero )

                                        <a href="#" class="list-group-item"><span>{{ traduceDia($cumpleanero->FECHA_NACIMIENTO).' '.traduceMes( $cumpleanero->FECHA_NACIMIENTO ).' | '.ucwords(mb_strtolower($cumpleanero->NOMBRE)).' '.ucwords(mb_strtolower($cumpleanero->APELLIDO_PATERNO)) }}</span></a>

                                    @endforeach
                                </div>

                                <!-- cumpleaños -->

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

                        <div id="target" style="overflow: scroll; width: 200px; height: 100px;">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna
                            aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                            ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            Duis aute irure dolor in reprehenderit in voluptate velit
                            esse cillum dolore eu fugiat nulla pariatur. Excepteur
                            sint occaecat cupidatat non proident, sunt in culpa qui
                            officia deserunt mollit anim id est laborum.
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
@endsection



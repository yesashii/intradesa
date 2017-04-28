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


                            <div style="overflow: scroll; width: 100%; height: 600px;">
                                @foreach( $noticias as $noticia )

                                    <div class="thumbnail">
                                        <h1>{{ $noticia->titulo }}</h1><small>{{ $noticia->fecha }}</small>
                                        <img width="400px" height="400px" src="{{ url($noticia->imagen) }}"/>

                                        <div class="caption">

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
                            <li class="active"><a href="#tab1-1" role="tab" data-toggle="tab">Hoy <span class="badge">{{ count($cumplesDia) }}</span></a></li>
                            <li><a href="#tab1-2" role="tab" data-toggle="tab">Semana <span class="badge">{{ count($cumpleSemanaUsuarios) }}</span></a></li>
                            <li><a href="#tab1-3" role="tab" data-toggle="tab">Mes <span class="badge">{{ count($cumplesMes) }}</span></a></li>
                        </ul>

                        <div class="tab-content">
                            <!-- pestaña 1 -->
                            <div class="tab-pane active well" role="tabpanel" id="tab1-1" style="overflow: scroll; width: 100%; height: 400px;">

                                <div class="list-group">
                                    @if( count($cumplesDia) > 0 )
                                        @foreach( $cumplesDia as $cumpleanero )
                                            <a href="#" class="list-group-item"><span>{{ traduceDia($cumpleanero->FECHA_NACIMIENTO).' '.traduceMes( $cumpleanero->FECHA_NACIMIENTO ).' | '.ucwords(mb_strtolower($cumpleanero->NOMBRE)).' '.ucwords(mb_strtolower($cumpleanero->APELLIDO_PATERNO)) }}</span></a>
                                        @endforeach
                                    @else
                                        <a href="#" class="list-group-item list-group-item-info">{{ 'Hoy, no hay cumpleaños' }}</a>
                                    @endif

                                </div>


                            </div>
                            <!-- #pestaña 1 -->

                            <!-- pestaña 2 -->
                            <div class="tab-pane well" role="tabpanel" id="tab1-2" style="overflow: scroll; width: 100%; height: 400px;">

                                <div class="list-group">
                                    @if( count($cumpleSemanaUsuarios) > 0 )
                                        @foreach( $cumpleSemanaUsuarios as $cumpleanero )
                                            <a href="#" class="list-group-item"><span>{{ traduceDia($cumpleanero->FECHA_NACIMIENTO).' '.traduceMes( $cumpleanero->FECHA_NACIMIENTO ).' | '.ucwords(mb_strtolower($cumpleanero->NOMBRE)).' '.ucwords(mb_strtolower($cumpleanero->APELLIDO_PATERNO)) }}</span></a>
                                        @endforeach
                                    @else
                                        <a href="#" class="list-group-item list-group-item-info">{{ 'Esta semana, no hay cumpleaños' }}</a>
                                    @endif

                                </div>

                                <!-- cumpleaños -->

                            </div>
                            <!-- #pestaña 2 -->

                            <!-- pestaña 3 -->
                            <div class="tab-pane well" role="tabpanel" id="tab1-3" style="overflow: scroll; width: 100%; height: 400px;">
                                <div class="list-group">
                                    @if( count($cumplesMes) > 0 )
                                        @foreach( $cumplesMes as $cumpleanero )
                                            <a href="#" class="list-group-item"><span>{{ traduceDia($cumpleanero->FECHA_NACIMIENTO).' '.traduceMes( $cumpleanero->FECHA_NACIMIENTO ).' | '.ucwords(mb_strtolower($cumpleanero->NOMBRE)).' '.ucwords(mb_strtolower($cumpleanero->APELLIDO_PATERNO)) }}</span></a>
                                        @endforeach
                                    @else
                                        <a href="#" class="list-group-item list-group-item-info">{{ 'Este mes, no hay cumpleaños' }}</a>
                                    @endif

                                </div>
                            </div>
                            <!-- #pestaña 3 -->
                        </div>

                    </div>
                </div>


            </div>

        </div>

    </div>
@endsection



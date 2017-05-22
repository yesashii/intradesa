@extends('layouts.app')
@include('funciones.traductor')

@section('extra_css')

    <style>
        /**
        esto hace que solo el fondo sea transparente.
         */
        .fondoCumple{

            background-color: rgba(255, 255, 255, 0.5) !important;
            background-image: url(img/cumpleanios/fondo_01.png);
            background-blend-mode: color;
            background-repeat: no-repeat;
            overflow: scroll;
            width: 100%;
            height: 200px;
        }

        .transparente{
            background: rgba(2, 41, 136, 0) !important;
            color: #3113ff !important;
            font-weight: bold !important;
        }

        .transparente_sin_correo{
            background: rgba(122, 130, 136, 0)!important;
            color: rgba(2, 2, 6, 0.95) !important;
            font-weight: bold !important;
        }
        
    </style>
    
@endsection


@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-1">
                <div class="list-group"> Comercial</div>
                <div class="list-group"> Marketing</div>
                <div class="list-group"> Adm. y Finanzas</div>
                <div class="list-group"> Logística</div>
                <div class="list-group"> Sistemas</div>
            </div>
            <div class="col-md-1">

            </div>

            <div class="col-md-6">

                <div class="panel panel-default">

                    <div class="panel-heading">
                        <h2>NOTICIAS</h2>
                    </div>

                    <div class="panel-body">

                        <div id="noticias" class="tab-content">


                            <div style="overflow: scroll; width: 100%; height: 600px;">
                                @foreach( $noticias as $noticia )

                                    <div class="thumbnail">
                                    <article class="blog-item"><img style="padding-right: 10px;" width="200" height="240" src="{{ url($noticia->imagen) }}" class="pull-left img-responsive" />
                                        <div class="text">
                                            <h3><a href="#">{{ $noticia->titulo }} </a></h3>
                                            <p>{{ $noticia->sub_titulo }}   </p>
                                            <p>{{ $noticia->fecha }}        </p>
                                            <p style="font-size: smaller">{{ $noticia->texto }}        </p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </article>
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
                    <div class="panel-heading"><img width="15" src="{{ asset('img/cumpleanios/torta.png') }}" alt=""> <strong>Cumpleaños</strong> </div>

                    <div class="panel-body">

                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab1-1" role="tab" data-toggle="tab">Hoy <span class="badge">{{ count($cumplesDia) }}</span></a></li>
                            <li><a href="#tab1-2" role="tab" data-toggle="tab">Semana <span class="badge">{{ count($cumpleSemanaUsuarios) }}</span></a></li>
                            <li><a href="#tab1-3" role="tab" data-toggle="tab">Mes <span class="badge">{{ count($cumplesMes) }}</span></a></li>
                        </ul>

                        <div class="tab-content">
                            <!-- pestaña 1 -->
                            <div class="tab-pane active well fondoCumple " role="tabpanel" id="tab1-1">

                                <div class="list-group ">
                                    @if( count($cumplesDia) > 0 )
                                        @foreach( $cumplesDia as $cumpleanero )
                                            @if( isset($cumpleanero->int_usuarios->id) )
                                                <a href="{{ url('detalleUsuario/'.$cumpleanero->int_usuarios->id) }}" class="list-group-item transparente"><span>{{ traduceDia($cumpleanero->FECHA_NACIMIENTO).' '.traduceMes( $cumpleanero->FECHA_NACIMIENTO ).' | '.ucwords(mb_strtolower($cumpleanero->NOMBRE)).' '.ucwords(mb_strtolower($cumpleanero->APELLIDO_PATERNO)) }} </span> </a>
                                            @else
                                                <a href="#" class="list-group-item transparente_sin_correo"><span>{{ traduceDia($cumpleanero->FECHA_NACIMIENTO).' '.traduceMes( $cumpleanero->FECHA_NACIMIENTO ).' | '.ucwords(mb_strtolower($cumpleanero->NOMBRE)).' '.ucwords(mb_strtolower($cumpleanero->APELLIDO_PATERNO)) }}</span></a>
                                            @endif
                                        @endforeach
                                    @else
                                        <a href="#" class="list-group-item list-group-item-info">{{ 'Hoy, no hay cumpleaños' }}</a>
                                    @endif

                                </div>


                            </div>
                            <!-- #pestaña 1 -->

                            <!-- pestaña 2 -->
                            <div class="tab-pane well fondoCumple" role="tabpanel" id="tab1-2" >

                                <div class="list-group">
                                    @if( count($cumpleSemanaUsuarios) > 0 )
                                        @foreach( $cumpleSemanaUsuarios as $cumpleanero )
                                            @if( isset($cumpleanero->int_usuarios->id) )
                                                <a href="{{ url('detalleUsuario/'.$cumpleanero->int_usuarios->id) }}" class="list-group-item transparente" ><span>{{ traduceDia($cumpleanero->FECHA_NACIMIENTO).' '.traduceMes( $cumpleanero->FECHA_NACIMIENTO ).' | '.ucwords(mb_strtolower($cumpleanero->NOMBRE)).' '.ucwords(mb_strtolower($cumpleanero->APELLIDO_PATERNO)) }} </span> </a>
                                            @else
                                                <a href="#" class="list-group-item transparente_sin_correo"><span>{{ traduceDia($cumpleanero->FECHA_NACIMIENTO).' '.traduceMes( $cumpleanero->FECHA_NACIMIENTO ).' | '.ucwords(mb_strtolower($cumpleanero->NOMBRE)).' '.ucwords(mb_strtolower($cumpleanero->APELLIDO_PATERNO)) }} </span></a>
                                            @endif
                                        @endforeach
                                    @else
                                        <a href="#" class="list-group-item list-group-item-info">{{ 'Esta semana, no hay cumpleaños' }}</a>
                                    @endif

                                </div>

                                <!-- cumpleaños -->

                            </div>
                            <!-- #pestaña 2 -->

                            <!-- pestaña 3 -->
                            <div class="tab-pane well fondoCumple" role="tabpanel" id="tab1-3" >
                                <div class="list-group">
                                    @if( count($cumplesMes) > 0 )
                                        @foreach( $cumplesMes as $cumpleanero )
                                            @if( isset($cumpleanero->int_usuarios->id) )
                                                <a href="{{ url('detalleUsuario/'.$cumpleanero->int_usuarios->id) }}" class="list-group-item transparente"><span>{{ traduceDia($cumpleanero->FECHA_NACIMIENTO).' '.traduceMes( $cumpleanero->FECHA_NACIMIENTO ).' | '.ucwords(mb_strtolower($cumpleanero->NOMBRE)).' '.ucwords(mb_strtolower($cumpleanero->APELLIDO_PATERNO)) }} </span> </a>
                                            @else
                                                <a href="#" class="list-group-item transparente_sin_correo"><span>{{ traduceDia($cumpleanero->FECHA_NACIMIENTO).' '.traduceMes( $cumpleanero->FECHA_NACIMIENTO ).' | '.ucwords(mb_strtolower($cumpleanero->NOMBRE)).' '.ucwords(mb_strtolower($cumpleanero->APELLIDO_PATERNO)) }} </span></a>
                                            @endif
                                        @endforeach
                                    @else
                                        <a href="#" class="list-group-item list-group-item-info">{{ 'Este mes, no hay cumpleaños' }}</a>
                                    @endif

                                </div>
                            </div>
                            <!-- #pestaña 3 -->
                        </div>
                      <div class="col-md-4"></div>  <i class="material-icons md-15" >&#xE88E;</i> <span style="font-size: x-small; ">Pincha en el nombre para ver su perfil.</span>
                    </div>


                </div>


            </div>

        </div>

    </div>
@endsection

@section('extra_script')

    <script type="text/javascript" >

        //scroll para las noticias.
        $( "#noticias" ).scroll(function() {
            $( "#log" ).append( "<div>Handler for .scroll() called.</div>" );
        });

        //scroll para los cumpleaños del mes.
        $( "#tab1-3" ).scroll(function() {
            $( "#log" ).append( "<div>Handler for .scroll() called.</div>" );
        });

        //scroll para los cumpleaños de la semana.
        $( "#tab1-2" ).scroll(function() {
            $( "#log" ).append( "<div>Handler for .scroll() called.</div>" );
        });

        //scroll para los cumpleaños del día.
        $( "#tab1-1" ).scroll(function() {
            $( "#log" ).append( "<div>Handler for .scroll() called.</div>" );
        });

    </script>


@endsection



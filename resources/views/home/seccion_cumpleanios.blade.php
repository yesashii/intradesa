


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

                    <div class="list-group " style="border: 0!important;">
                        @if( count($cumplesDia) > 0 )
                            @foreach( $cumplesDia as $cumpleanero )

                                @if( isset($cumpleanero->int_usuarios->id) )
                                    <a href="{{ url('detalleUsuario/'.$cumpleanero->int_usuarios->id) }}"  class="list-group-item transparente" ><span>{{ traduceDia($cumpleanero->FECHA_NACIMIENTO).' '.traduceMes( $cumpleanero->FECHA_NACIMIENTO ).' | '.ucwords(mb_strtolower($cumpleanero->NOMBRE)).' '.ucwords(mb_strtolower($cumpleanero->APELLIDO_PATERNO)) }} </span> </a>
                                @else
                                    <a href="#" class="list-group-item transparente_sin_correo" ><span>{{ traduceDia($cumpleanero->FECHA_NACIMIENTO).' '.traduceMes( $cumpleanero->FECHA_NACIMIENTO ).' | '.ucwords(mb_strtolower($cumpleanero->NOMBRE)).' '.ucwords(mb_strtolower($cumpleanero->APELLIDO_PATERNO)) }}</span></a>
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



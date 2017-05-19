@extends('layouts.app')


@section('extra_css')

    <style>

        .toolTip{
            background: rgba(20,20,20,0.9) url('../../img/nosotros/organigrama/info.gif') center left 5px no-repeat;
            border: 2px solid #87cefa;
            border-radius: 5px;
            box-shadow: 5px 5px 5px #333;
            color: #87cefa;
            font-size: 0.8em;
            padding: 10px 10px 10px 35px;
            max-width: 600px;
            position: absolute;
            z-index: 100;
        }

    </style>

@endsection

@section('extra_script_2')

    <script !src="">
        function mostrarTooltip(elemento,mensaje){

            // Si no existe aun el tooltip se crea
            if (!document.getElementById(elemento.id+"tp") ){
                // Dimensiones del elemento al que se quiere añadir el tooltip
                anchoElemento = $('#'+elemento.id).width();
                altoElemento = $('#'+elemento.id).height();

                // Coordenadas del elemento al que se quiere añadir el tooltip
                coordenadaXElemento = $('#'+elemento.id).position().left;
                coordenadaYElemento = $('#'+elemento.id).position().top;

                // Coordenadas en las que se colocara el tooltip
                x = coordenadaXElemento + anchoElemento/2 + 20;
                y = coordenadaYElemento + altoElemento/2 + 10;

                // Crea el tooltip con sus atributos
                var tooltip = document.createElement('div');
                tooltip.id = elemento.id + "tp";
                tooltip.className = 'toolTip';
                tooltip.innerHTML = mensaje;
                tooltip.style.left = x + "px";
                tooltip.style.top = y + "px";

                // Añade el tooltip
                document.body.appendChild(tooltip);
            }

            // Cambia la opacidad del tooltip y lo muestra o lo oculta (Si el raton esta encima del elemento se muestra el tooltip y sino se oculta)
            $('#'+elemento.id).hover(
                function(){
                    tooltip.style.display = "block";
                    $('#'+tooltip.id).animate({"opacity" : 1});

                },
                function(){
                    $('#'+tooltip.id).animate({"opacity" : 0});
                    setTimeout(
                        function (){
                            tooltip.style.display = "none";
                        },
                        400
                    );

                }
            );
        }
    </script>

@endsection

@section('content')


<!--
    <input type="text" id="nombre" onmouseover="mostrarTooltip(this,'Tu nombre');"/>
    <a href="#" id="enlace" onmouseover="mostrarTooltip(this,'Mira un enlace que tiene en su tooltip una tabla <table><tr><td>Celda 1,1</td><td>Celda 2,1</td></tr><tr><td>Celda 1,2</td><td>Celda 2,2</td></tr></table>');">Un enlace</a>
    <span id="texto" onmouseover="mostrarTooltip(this,'Lo que tu quieras poner');">Un texto</span>
-->

<div class="orgchart col-md-10 col-md-offset-1 table-responsive">


    <table>
        <tbody>

        <!-- nodos -->
        <tr class="nodes">
            <td colspan="2">

                <table>
                    <tbody>
                    <!-- PADRE -->
                    <tr>
                        <td colspan="16" >
                            <a id="texto" onmouseover="mostrarTooltip(this,'{{ $padre->cargo.', Nivel: '.$padre->nivel($padre->id) }}');" href="{{ (isset($padre->padre))?route('organigrama',[$padre->padre]):'#' }}" >
                            <div draggable="true" class="node">
                                <div class="title">{{ $padre->cargo }}</div>
                                <div class="content"> {{ $padre->nombre }} </div>
                                <i class="edge verticalEdge topEdge fa"></i><i class="edge verticalEdge bottomEdge fa"></i>
                            </div>
                            </a>
                        </td>
                    </tr>
                    <tr class="lines">
                        <td colspan="16">
                            <div class="downLine"></div>
                        </td>
                    </tr>
                    <!-- #PADRE -->


                    <!-- caso un hijo -->
                    @if( count($padre->hijos ) < 2 )

                        @forelse( $padre->hijos as $hijo )
                            <!-- lineas -->
                            <tr class="lines">
                                <td class="rightLine">&nbsp;</td>
                                <td class="leftLine">&nbsp;</td>
                            </tr>
                            <!-- #lineas -->
                            <tr class="nodes">

                                    <td colspan="2" id="hijo_1" onmouseover="mostrarTooltip(this,'{{ $hijo->cargo.', Nivel: '.($padre->nivel($padre->id)+1) }}');">
                                        <table>
                                            <tbody>
                                            <tr>
                                                <td><a href="{{ (isset($hijo->hijos))?route('organigrama',[$hijo->id]):'#' }}">
                                                    <div draggable="true" class="node">
                                                        <div class="title"> {{ $hijo->cargo }} </div>
                                                        <div class="content"> {{ $hijo->nombre }}</div>
                                                        <i class="edge verticalEdge topEdge fa"></i><i class="edge horizontalEdge rightEdge fa"></i><i class="edge horizontalEdge leftEdge fa"></i>
                                                    </div>
                                                    </a>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </td>

                            </tr>

                            <!-- #Hijos -->
                            @empty
                        @endforelse
                    <!-- #caso un hijo -->

                        <!-- Hijos -->



                    @else

                        <!-- caso varios hijos -->

                        <!-- lineas depende de cuantos hijos-->

                        <tr class="lines">
                            <td class="rightLine">&nbsp;</td>
                            @for ($i = 0; $i < count($padre->hijos) - 1; $i++)

                                <td class="leftLine topLine">&nbsp; </td>
                                <td class="rightLine topLine">&nbsp;</td>

                            @endfor
                            <td class="leftLine">&nbsp;</td>
                        </tr>
                        <!-- #lineas -->

                        <!-- cajas -->
                        <tr class="nodes">
                            @forelse( $padre->hijos as $hijo )
                            <td colspan="2" id="{{'hijo_'.$hijo->id}}" onmouseover="mostrarTooltip(this,'{{ $hijo->cargo.', Nivel: '.($padre->nivel($padre->id)+1) }}');">
                                <table>
                                    <tbody>
                                    <tr>
                                        <td><a href="{{ (isset($hijo->hijos))?route('organigrama',[$hijo->id]):'#' }}">
                                            <div draggable="true" class="node">
                                                <div class="title"> {{ $hijo->cargo }} </div>
                                                <div class="content"> {{ $hijo->nombre }}</div>
                                                <i class="edge verticalEdge topEdge fa"></i><i class="edge horizontalEdge rightEdge fa"></i><i class="edge horizontalEdge leftEdge fa"></i>
                                            </div>
                                            </a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </td>
                            @empty
                            @endforelse
                        </tr>
                        <!-- #cajas -->

                        <!-- #caso varios hijos -->

                    @endif



                    </tbody>
                </table>

            </td>
        </tr>
        <!-- #nodos -->

        </tbody>
    </table>

</div>


@endsection










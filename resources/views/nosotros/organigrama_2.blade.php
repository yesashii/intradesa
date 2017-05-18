@extends('layouts.app')


@section('content')


<div class="orgchart col-md-10 col-md-offset-1 table-responsive">

    {{ 'Nivel: '.$padre->nivel($padre->id) }}


    <table>
        <tbody>

        <!-- nodos -->
        <tr class="nodes">
            <td colspan="2">

                <table>
                    <tbody>
                    <!-- PADRE -->
                    <tr>
                        <td colspan="16">
                            <a href="{{ (isset($padre->padre))?route('organigrama',[$padre->padre]):'#' }}">
                            <div draggable="true" class="node">
                                <div class="title">{{ $padre->nombre }}</div>
                                <div class="content"> {{ $padre->cargo }} </div>
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

                                    <td colspan="2">
                                        <table>
                                            <tbody>
                                            <tr>
                                                <td><a href="{{ (isset($hijo->hijos))?route('organigrama',[$hijo->id]):'#' }}">
                                                    <div draggable="true" class="node">
                                                        <div class="title"> {{ $hijo->nombre }} </div>
                                                        <div class="content"> {{ $hijo->cargo }}</div>
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
                            <td colspan="2">
                                <table>
                                    <tbody>
                                    <tr>
                                        <td><a href="{{ (isset($hijo->hijos))?route('organigrama',[$hijo->id]):'#' }}">
                                            <div draggable="true" class="node">
                                                <div class="title"> {{ $hijo->nombre }} </div>
                                                <div class="content"> {{ $hijo->cargo }}</div>
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





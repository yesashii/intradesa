@extends('layouts.app')

@section('extra_css')
    <link rel="stylesheet" href="{{ asset('historia/css/base.css') }}">
@endsection

@section('content')
    <div class="container">

        <div class="panel panel-default">

            <div class="panel-heading">
                <h1 class="text-center">Historia de Desa SA.</h1>
            </div>

            <div class="panel-body">

                <div id="historia" class="tab-content">


                    <div style="overflow: scroll; width: 100%; height: 600px;">


                        <ul class="timeline ">
                            <li>
                                <div class="timeline-image">
                                    <img class="img-circle img-responsive" src="{{ asset('img/nosotros/anios/1989/nacimiento.jpg') }}" alt="">
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h2>1989</h2>
                                    </div>
                                    <div class="timeline-body">
                                        <p class="text-muted" >
                                            Se funda DESA para atender el mercado <br>nacional de Vinos, Licores y Cervezas.
                                        </p>
                                    </div>
                                </div>
                                <div class="line"></div>
                            </li>
                            <li class="timeline-inverted">
                                <div class="timeline-image">
                                    <img class="img-circle img-responsive" src="{{ asset('img/nosotros/anios/1993/corona.jpg') }}" alt="">
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h2>1993</h2>
                                    </div>
                                    <div class="timeline-body">
                                        <p class="text-muted">
                                            DESA establece un acuerdo con Grupo<br>
                                            Modelo para la distribución de su marca Corona.</p>
                                        <p class="text-muted">
                                            DESA establece un Joint Vneture con<br>
                                            Allied Domecq.</p>
                                    </div>
                                </div>
                                <div class="line"></div>
                            </li>
                            <li>
                                <div class="timeline-image">
                                    <img class="img-circle img-responsive" src="{{ asset('img/nosotros/anios/1994/dym.jpg') }}" alt="">
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h2>1994</h2>
                                    </div>
                                    <div class="timeline-body">
                                        <p class="text-muted">
                                            DESA adquiere el 50% de D&M en Bolivia
                                        </p>
                                    </div>
                                </div>
                                <div class="line"></div>
                            </li>
                            <li class="timeline-inverted">
                                <div class="timeline-image">
                                    <img class="img-circle img-responsive" src="{{ asset('img/nosotros/anios/2003/redbull.jpg') }}" alt="">
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h2>2003</h2>
                                    </div>
                                    <div class="timeline-body">
                                        <p class="text-muted">
                                            DESA se asocia con Red Bull para<br>
                                            su distribución en Chile.
                                        </p>
                                    </div>
                                </div>
                                <div class="line"></div>
                            </li>
                            <li>
                                <div class="timeline-image">
                                    <img class="img-circle img-responsive" src="{{ asset('img/nosotros/anios/2004/centros.jpg') }}" alt="">
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h2>2004</h2>
                                    </div>
                                    <div class="timeline-body">
                                        <p class="text-muted">
                                            Se construyen 10 nuevos centros <br>
                                            de distribución a largo del país.
                                        </p>
                                    </div>
                                </div>
                                <div class="line"></div>
                            </li>

                            <li class="timeline-inverted">
                                <div class="timeline-image">
                                    <img class="img-circle img-responsive" src="{{ asset('img/nosotros/anios/2005/logo-cav.png') }}" alt="">
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h2>2005</h2>
                                    </div>
                                    <div class="timeline-body">
                                        <p class="text-muted">
                                            DESA adquiere el 50% de la revista <br>
                                            especializada en vinos La CAV.
                                        </p>
                                    </div>
                                </div>
                                <div class="line"></div>
                            </li>
                            <li>
                                <div class="timeline-image">
                                    <img class="img-circle img-responsive" src="{{ asset('img/nosotros/anios/2006/ocd.jpg') }}" alt="">
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h2>2006</h2>
                                    </div>
                                    <div class="timeline-body">
                                        <p class="text-muted">
                                            DESA comienza el sistema de <br>
                                            distribución OCD.
                                        </p>
                                    </div>
                                </div>
                                <div class="line"></div>
                            </li>

                            <li class="timeline-inverted">
                                <div class="timeline-image">
                                    <img class="img-circle img-responsive" src="{{ asset('img/nosotros/anios/2009/logo-cav.png') }}" alt="">
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h2>2009</h2>
                                    </div>
                                    <div class="timeline-body">
                                        <p class="text-muted">
                                            DESA Adquiere el 70% de la revista <br>
                                            La CAV.
                                        </p>
                                    </div>
                                </div>
                                <div class="line"></div>
                            </li>
                            <li>
                                <div class="timeline-image">
                                    <img class="img-circle img-responsive" src="{{ asset('img/nosotros/anios/2010/desa.jpg') }}" alt="">
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h2>2010</h2>
                                    </div>
                                    <div class="timeline-body">
                                        <p class="text-muted">
                                            Se inaugura el nuevo CD Lampa.
                                        </p>
                                    </div>
                                </div>
                                <div class="line"></div>
                            </li>

                            <li class="timeline-inverted">
                                <div class="timeline-image">
                                    <img class="img-circle img-responsive" src="{{ asset('img/nosotros/anios/2011/logo-cav.png') }}" alt="">
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h2>2011</h2>
                                    </div>
                                    <div class="timeline-body">
                                        <p class="text-muted">
                                            Adquiere el 100% de la revista La CAV.
                                        </p>
                                    </div>
                                </div>
                                <div class="line"></div>
                            </li>
                            <li>
                                <div class="timeline-image">
                                    <img class="img-circle img-responsive" src="{{ asset('img/nosotros/anios/2015/cc.png') }}" alt="">
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h2>2015</h2>
                                    </div>
                                    <div class="timeline-body">
                                        <p class="text-muted">
                                            DESA inicia  alianza estratégica con <br>
                                            Cervecerías Chile (CCH).
                                        </p>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>


                </div><!-- <div class="tab-content"> -->
            </div>
        </div>
    </div>
@endsection


@section('extra_script')

    <script type="text/javascript" >

        //scroll para la historia.
        $( "#historia" ).scroll(function() {
            $( "#log" ).append( "<div>Handler for .scroll() called.</div>" );
        });

    </script>

@endsection

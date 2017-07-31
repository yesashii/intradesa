@extends('layouts.app.index')


@section('content')

    <div class="container">

        <div class="panel panel-default">

            <div class="panel-heading">
                <h1>NUESTROS VALORES</h1>
            </div>

            <div class="panel-body">

                <div class="row ">
                    <div class="col-md-8 col-md-offset-2">

                        <div class="row">
                            <div class="col-md-7 ">

                                <div class="bs-callout bs-callout-success  ">
                                    <h4>Compromiso.</h4>
                                    Con los objetivos y resultados; cumplimos con lo que prometemos.
                                </div>

                                <div class="bs-callout bs-callout-success  ">
                                    <h4>Transparencia.</h4>
                                    En nuestras acciones.
                                </div>

                                <div class="bs-callout bs-callout-success  ">
                                    <h4>Confianza.</h4>
                                    A nuestros proveedores y clientes, creando relaciones de largo plazo.
                                </div>

                                <div class="bs-callout bs-callout-success  ">
                                    <h4>Innovación y Flexibilidad.</h4>
                                    Para detectar oportunidades.
                                </div>

                                <div class="bs-callout bs-callout-success  ">
                                    <h4>Colaboración y respeto.</h4>
                                    Entre los Distintos Equipos de Colaboradores de DESA.
                                </div>

                            </div>

                            <div class="col-md-5 ">

                                <br> <img src="{{ asset('img/nosotros/valores/valores.jpg') }}" alt="">

                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>

    </div>

@endsection


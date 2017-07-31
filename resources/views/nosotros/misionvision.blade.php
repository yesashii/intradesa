@extends('layouts.app.index')

@section('content')

    <div class="container">

        <div class="panel panel-default">

            <div class="panel-heading">
                <h1 class="text-center">Desa SA.</h1>
            </div>

            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                        <div class="intro">
                            <h2 class="text-center">Nuestra Misión </h2></div>
                        <p style=" text-align : justify; ">Convertirse en el líder de comercialización y distribución de vinos, licores, cervezas y bebidas premium, con cobertura nacional y alcance en todos los canales de venta.</p>
                        <div class="text"><img width="750" height="500" src="{{ url('img/nosotros/misionVision/valores.png') }}"></div>

                    </div>


                </div>

                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-10">
                        <a href="{{URL::previous()}}" class="btn btn-info" role="button"><span class="glyphicon glyphicon-chevron-left"></span>Volver</a>
                    </div>
                </div>
                <br>

            </div>
        </div>

    </div>


@endsection
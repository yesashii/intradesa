@extends('layouts.app')

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
                            <div class="tab-pane active" role="tabpanel" id="tab-1">
                                <p>
                                    <!-- noticia de prueba -->
                                    <div class="thumbnail">
                                        <img src="{{ url('img/noticias/noticia_1.jpg') }}"/>
                                        <div class="caption">
                                            <h1>Título</h1>
                                            <h3>Sub título</h3>
                                <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                            </div>
                        </div>
                        <!-- #noticia de prueba -->
                        </p>
                            </div>
                            <div class="tab-pane" role="tabpanel" id="tab-2">
                                <p>Second tab content.</p>
                            </div>
                            <div class="tab-pane" role="tabpanel" id="tab-3">
                                <p>Third tab content.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-md-4 ">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        You are logged in!
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



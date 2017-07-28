<div class="panel panel-default">

    <div class="panel-heading"><h4><strong><span class="titulo-panel">Eventos</span></strong></h4></div>
    <div class="panel-body">

        <div class="carousel slide" data-ride="carousel" id="carousel-1">

            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <div class="jumbotron hero-nature carousel-hero" style="background-image:url({{ asset('img/eventos/portadas/dpadre.jpg') }});">
                        <div><h3>Día del padre</h3></div>
                        <div >Día del padre.</div>
                        <div><a class="btn btn-primary btn-sm hero-button" role="button" href="{{ url('muestra-galeria/1') }}">Ver Más</a></div>
                    </div>
                </div>

                <div class="item ">
                    <div class="jumbotron hero-nature carousel-hero" style="background-image:url({{ asset('img/eventos/portadas/dmujer.jpg') }});">
                        <div><h3>Día de la mujer</h3></div>
                        <div >Día de la mujer.</div>
                        <div><a class="btn btn-primary btn-sm hero-button" role="button" href="{{ url('muestra-galeria/2') }}">Ver Más</a></div>
                    </div>
                </div>


                <div class="item ">
                    <div class="jumbotron hero-nature carousel-hero" style="background-image:url({{ asset('img/eventos/portadas/navidad.jpg') }});">
                        <div><h3>Navidad 2016</h3></div>
                        <div >Navidad 2016.</div>
                        <div><a class="btn btn-primary btn-sm hero-button" role="button" href="{{ url('muestra-galeria/3') }}">Ver Más</a></div>
                    </div>
                </div>

            </div>

            <div><a class="left carousel-control" href="#carousel-1" role="button" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i><span class="sr-only">Previous</span></a>
                <a class="right carousel-control" href="#carousel-1" role="button" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i><span class="sr-only">Next</span></a>
            </div>
            <ol class="carousel-indicators">
                <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-1" data-slide-to="1"></li>
                <li data-target="#carousel-1" data-slide-to="1"></li>
            </ol>
        </div>

    </div>

</div>






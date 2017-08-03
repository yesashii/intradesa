<div class="panel panel-default">

    <div class="panel-heading"><strong><span class="titulo-panel">Noticias</span></strong></div>

    <div class="panel-body">

        <div id="noticias" class="tab-content">


            <div style="overflow: scroll; width: 100%; height: 588px;">
                @foreach( $noticias as $noticia )
                    <div class="thumbnail">
                        <article class="blog-item"><img style="padding-right: 10px;" width="200" height="240" src="{{ url($noticia->imagen) }}" class="pull-left img-responsive" />
                            <div class="text">
                                <h3><a href="#">{{ $noticia->titulo }} </a></h3>
                                <p>{{ $noticia->sub_titulo }}               </p>
                                <p>{{ $noticia->fecha }}                    </p>
                                <p style="font-size: smaller; text-align : justify;"> <?=htmlspecialchars_decode( $noticia->texto)?></p>
                            </div>
                            <div class="clearfix"></div>
                        </article>
                    </div>

                @endforeach

            </div>


        </div>
    </div>
</div>

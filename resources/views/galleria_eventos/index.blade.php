@extends('layouts.app.index')

@section('extra_css')
    <style type="text/css">

        .gallerycontainer{
            position: relative;
            /*Add a height attribute and set to largest image's height to prevent overlaying*/
        }

        .thumbnail img{
            border: 1px solid white;
            margin: 0 5px 5px 0;
        }

        .thumbnail:hover{
            background-color: transparent;
        }

        .thumbnail:hover img{
            border: 1px solid blue;
        }

        .thumbnail span{ /*CSS for enlarged image*/
            position: absolute;
            background-color: lightyellow;
            padding: 5px;
            left: -1000px;
            border: 1px dashed gray;
            visibility: hidden;
            color: black;
            text-decoration: none;
        }

        .thumbnail span img{ /*CSS for enlarged image*/
            border-width: 0;
            padding: 2px;
        }

        .thumbnail:hover span{ /*CSS for enlarged image*/
            visibility: visible;
            top: 0;
            left: 230px; /*position where enlarged image should offset horizontally */
            z-index: 50;
        }

    </style>
@endsection


@section('content')

    <div class="container">

        <div class="panel panel-default">

            <div class="panel-heading">
                <h1 >GALERÍA</h1>
            </div>

            <div class="panel-body">

                <div class="row">

                    <div class="gallerycontainer col col-lg-2" >

                        <div style="overflow: scroll; width: 100%; height: 545px;">
                            @foreach( $arr_fotos as $foto )
                                <a class="thumbnail"
                                   href="#thumb">
                                    <img onclick="muestraImagen( '{{ asset('img/eventos/'.$foto) }}' )" src="{{ asset('img/eventos/'.$foto) }}" width="100px" height="66px" border="0" />
                                </a>

                            @endforeach
                        </div>
                    </div>

                    <div id="imagen" class="col col-lg-10">
                        <img width="100%" height="100%" class="image" src="{{ asset('img/eventos/'.$arr_fotos[0]) }}" />
                    </div>

                </div>

            </div>

            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-11">
                    <a href="{{URL::previous()}}" class="btn btn-info" role="button"><span class="glyphicon glyphicon-chevron-left"></span>Volver</a>
                </div>
            </div>
            <br>
        </div>

    </div>

    <script src="{{ asset('semantic/semantic.js') }}"></script>
    <script>

        const muestraImagen = function ( urlImg ) {
            const img = $('#imagen');
            img.html('<img width="100%" height="100%" class="image" src="'+urlImg+'" />')
        }

    </script>

@endsection



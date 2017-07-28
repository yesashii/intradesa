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
    <div class="gallerycontainer" style="width: 100px">
        <div style="overflow: scroll; width: 100%; height: 545px;">
        @foreach( $arr_fotos as $foto )

                <a class="thumbnail" href="#thumb"><img src="{{ asset('img/eventos/'.$foto) }}" width="100px" height="66px" border="0" />
                <span><img width="700px" height="500px" src="{{ asset('img/eventos/'.$foto) }}" /><br />.</span></a>

        @endforeach
        </div>


    </div>
@endsection



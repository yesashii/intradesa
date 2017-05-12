@extends('layouts.app')

@section('extra_css')
    <link rel="stylesheet" href="{{ asset('historia/css/base.css') }}">
@endsection

@section('content')
    <div class="container">

        <div class="panel panel-default">

            <div class="panel-heading">
                <h1 class="text-center">Historia de DESA SA.</h1>
            </div>

            <div class="panel-body">

                <img src="{{ url('img/historia/historia.png') }}">
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
@endsection


@section('extra_script')

    <script type="text/javascript" >

        //scroll para la historia.
        $( "#historia" ).scroll(function() {
            $( "#log" ).append( "<div>Handler for .scroll() called.</div>" );
        });

    </script>

@endsection

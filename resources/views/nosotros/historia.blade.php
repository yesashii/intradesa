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

                <img src="{{ url('img/historia/historia.png') }}">
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

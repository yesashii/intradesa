@extends('layouts.app')

@section('extra_css')

    <style type="text/css">
        #portapdf {
            width: 100%;
            height: 900px;
            border: 1px solid #484848;
            margin: 0 auto;
        }
    </style>

@endsection

@section('content')
    <div class="container">

        <div class="panel panel-default">

            <div class="panel-heading">
                <h1>Reglamento interno</h1>
            </div>

            <div class="panel-body">

                <div id="portapdf">
                    <object data="{{ asset('documentos/regla_interno_2017.pdf') }}" type="application/pdf" width="100%" height="100%"></object>
                </div>

            </div>
        </div>



    </div>

@endsection






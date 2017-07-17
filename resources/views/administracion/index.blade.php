@extends('layouts.appSemantic')

@section('titulo')
    Admin
@endsection

@section('contenido')

    <div class="ui teal inverted menu">
        <a class="active item" > Home </a>

        <div class="right menu">
            <div class="item">
                <div class="ui primary button" > Salir </div>
            </div>
        </div>

    </div>

    <div class="ui grid">

        <div class="ui three wide column raised segment" id="menu-vertical" >
            <div class="ui accordion" style="left: 0px; top: 0px; width: 250px !important; height: 1813px !important; margin-top: 0px;">
                <div class="title "><i class="dropdown icon"></i> NOTICIAS </div>
                <div class="content ">
                    <p><i class="folder outline icon"></i> <a href="{{ url('seccion-subir-noticia') }}" > Administrar noticias </a></p>
                </div>
            </div>
        </div>

        <div class="ui thirteen wide column"  >
            @yield('work-space')
        </div>

    </div>

@endsection

@section('extra_script')

    <script type="text/javascript">

        $( document ).ready(function() {
            // Handler for .ready() called.
            $('.ui.accordion').accordion();
            $('.ui.checkbox').checkbox();
            $('.activating.element').popup();

        });

    </script>
    <script src="{{ asset('js/jquery.notification.js') }}"></script>

@endsection


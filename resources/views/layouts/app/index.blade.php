@include('layouts.app.funciones_php')
<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'INTRANET') }}</title>
    @include('layouts.app.app_css')
    @yield('extra_css')
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body >
<div id="app" class="col-12">

    <div class="row">
        <div id="menu_vertical" class="col col-lg-2"  style="display: none">
            @include('layouts.app.menu_vertical')
        </div>

        <div class="col col-lg-12" id="cuerpo_sitio" >
            @include('layouts.app.menu_horizontal')
            @yield('content')
        </div>
    </div>


</div>

@include('layouts.app.app_js')
<!-- Scripts -->
@yield('extra_script')
@yield('extra_script_2')

</body>
</html>

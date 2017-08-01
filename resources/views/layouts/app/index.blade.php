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
    <!-- footer -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,80">
    @include('layouts.app.scope_css.footer.font_awesome_css')
    @include('layouts.app.scope_css.footer.Simple_Footer_with_Icon_css')
    <!-- #footer -->
    @include('layouts.app.app_css')
    @yield('extra_css')
    <!-- Scripts -->
    @include('layouts.app.app_js')
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    @yield('extra_js_app')
    <!-- #Scripts -->
</head>
<body style="margin: 0 auto!important;" >
<div id="app" class="col-12">

    <div id="rowfoot" class="row">
        <div class="col col-lg-12" id="cuerpo_sitio" >

            <div class="col col-lg-2" style="padding-right: 0!important; max-width: 208px">
                @include('layouts.app.menu_vertical')
            </div>
            <div class="col col-lg-10" style="padding-left: 0!important;">
                @include('layouts.app.menu_horizontal')
                @yield('content')
            </div>


        </div>
    </div>


</div>




<!-- Scripts -->
@yield('extra_script')
@yield('extra_script_2')


</body>

@yield('footer')

</html>

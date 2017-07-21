<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.googleapis.com/css?family=Overpass" rel="stylesheet">
    <!-- styles -->
    <link href="{{ asset('semantic/semantic.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/notification.css') }}">

@yield('extra_css')
<!-- #styles -->

    <title>intranet - @yield('titulo')</title>

    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body id="bod">

<div id="app">
    @yield('contenido')
</div>

<!-- scripts -->
<script src="{{ asset('semantic\jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('semantic/semantic.js') }}"></script>

<!-- menu -->
<script type="text/javascript">

    $(document).ready( function () {
        $('.ui.right.dropdown.item').dropdown();

    });

</script>
<!-- #menu -->



@yield('extra_script')

<!-- #scripts -->


</body>
</html>
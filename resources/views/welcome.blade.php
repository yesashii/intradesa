<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Intranet</title>


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">

        <!-- Styles -->
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/Burger-Menu.css">
        <link rel="stylesheet" href="assets/css/Burger-Menu1.css">
        <link rel="stylesheet" href="assets/css/Carousel-Hero.css">
        <link rel="stylesheet" href="assets/css/dh-navbar-inverse.css">
        <link rel="stylesheet" href="assets/css/Features-Blue.css">
        <link rel="stylesheet" href="assets/css/Paralax-Hero-Banner.css">
        <link rel="stylesheet" href="assets/css/Paralax-Hero-Banner1.css">
        <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
        <link rel="stylesheet" href="assets/css/styles.css">

    </head>
    <body>

    <nav class="navbar navbar-default navigation-clean navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand navbar-link" href="#" style="padding:0px;margin-left:0px;height:78px;"></a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right" style="margin-top:13px;">
                    @if (Route::has('login'))
                        @if (Auth::check())
                            <li role="presentation"><a href="{{ url('/home') }}" uk-scroll="offset:50">Home </a></li>
                        @else
                            <li role="presentation"><a href="{{ url('/login') }}" uk-scroll="offset:100">Iniciar sesión</a></li>
                        @endif
                    @endif
                </ul>
            </div>
        </div>
    </nav>


    <div class="jumbotron hero-technology">
        <h1 class="hero-title">INTRANET DESA</h1>
        <p class="hero-subtitle">Si aún no posees cuenta, solicita tu registo.</p>
        <p><a class="btn btn-primary btn-lg hero-button" role="button" href="#">Solicita tu registro</a></p>
    </div>


    <div class="features-blue">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Acá podrás</h2>
                <p class="text-center">Encontrar información sobre la empresa y sus novedades, noticias del sector y cuestiones de interés, además de gestiones personales. </p>
            </div>
            <div class="row features">
                <div class="col-md-4 col-sm-6 item"><i class="glyphicon glyphicon-map-marker icon"></i>
                    <h3 class="name">Works everywhere</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est.</p>
                </div>
                <div class="col-md-4 col-sm-6 item"><i class="glyphicon glyphicon-time icon"></i>
                    <h3 class="name">Always available</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est.</p>
                </div>
                <div class="col-md-4 col-sm-6 item"><i class="glyphicon glyphicon-list-alt icon"></i>
                    <h3 class="name">Customizable</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est.</p>
                </div>
                <div class="col-md-4 col-sm-6 item"><i class="glyphicon glyphicon-leaf icon"></i>
                    <h3 class="name">Organic</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est.</p>
                </div>
                <div class="col-md-4 col-sm-6 item"><i class="glyphicon glyphicon-plane icon"></i>
                    <h3 class="name">Fast</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est.</p>
                </div>
                <div class="col-md-4 col-sm-6 item"><i class="glyphicon glyphicon-phone icon"></i>
                    <h3 class="name">Mobile-first</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est.</p>
                </div>
            </div>
        </div>
    </div>


    <footer>
        <div class="row">
            <div class="col-md-4 col-sm-6 footer-navigation">
                <h3><a href="#">Company<span>logo </span></a></h3>
                <p class="links"><a href="#">Home</a><strong> · </strong><a href="#">Blog</a><strong> · </strong><a href="#">Pricing</a><strong> · </strong><a href="#">About</a><strong> · </strong><a href="#">Faq</a><strong> · </strong><a href="#">Contact</a></p>
                <p class="company-name">Distribución y Excelencia S.A. © 2017 </p>
            </div>
            <div class="col-md-4 col-sm-6 footer-contacts">
                <div><span class="fa fa-map-marker footer-contacts-icon"> </span>
                    <p><span class="new-line-span">Av. La Montaña 776 </span> Lampa, Chile</p>
                </div>
                <div><i class="fa fa-phone footer-contacts-icon"></i>
                    <p class="footer-center-info email text-left"> +562 248 91 500</p>
                </div>
                <div><i class="fa fa-envelope footer-contacts-icon"></i>
                    <p> <a href="#" target="_blank">contacto@desa.cl</a></p>
                </div>
            </div>
            <div class="clearfix visible-sm-block"></div>
            <div class="col-md-4 footer-about">
                <h4>Distribución y Excelencia S.A. </h4>
                <p> Comercializadora e Importadora de vinos y licores. </p>
                <div class="social-links social-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div>
            </div>
        </div>
    </footer>

        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/Burger-Menu.js"></script>
        <script src="assets/js/Paralax-Hero-Banner.js"></script>
    </body>
</html>

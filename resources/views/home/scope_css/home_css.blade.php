<style>
    /**
    esto hace que solo el fondo sea transparente.
     */
    .fondoCumple{

        background-color: rgba(255, 255, 255, 0.5) !important;
        background-image: url(img/cumpleanios/fondo_01.png);
        background-blend-mode: color;
        background-repeat: no-repeat;
        overflow: scroll;
        width: 100%;
        height: 200px;
    }
    .transparente{
        background: rgba(2, 41, 136, 0) !important;
        color: #3113ff !important;
        font-weight: bold !important;
    }
    .transparente_sin_correo{
        background: rgba(122, 130, 136, 0)!important;
        color: rgba(2, 2, 6, 0.95) !important;
        font-weight: bold !important;
    }

    /* Container personalizado para el home */

    @media (min-width: 768px){.container_home     { width: 750px;  } }
    @media (min-width: 992px){.container_home     { width: 970px;  } }
    @media (min-width: 1200px){.container_home    { width: 1400px; } }

    .container_home{
        margin-right: auto;
        margin-left: auto;
        padding-left: 15px;
        padding-right: 15px;
    }

    #menu_vertical{
        font-size: small;
    }
</style>

<link rel="stylesheet" href="{{ asset('extras/assets/css/Simple-Vertical-Navigation-Menu.css') }}"/>
<link rel="stylesheet" href="{{ asset('extras/evento/css/Important-Highlighted-Event.css') }}"/>

<!-- carrousel -->
<style>
    div.jumbotron.carousel-hero {
        color:#fff;
        text-align:center;
        /*  background-size:cover;
          background-position:center;
          padding-top:100px;
          padding-bottom:100px;
          margin-bottom:0;*/
    }

    h1.hero-title, h2.hero-title, h3.hero-title {
        text-shadow:0 3px 3px rgba(0,0,0,0.4);
        color:#fff;
    }

    p.hero-subtitle {
        max-width:600px;
        margin:25px auto;
        padding:10px 15px;
        color:#fff;
    }

</style>
<!-- #carrousel -->

















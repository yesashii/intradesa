<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('organigrama/jquery.orgchart.css') }}">
<link rel="stylesheet" href="{{ asset('organigrama/style.css') }}">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
<!-- CALLOUT -->
<style>
    .bs-callout {
        padding: 20px;
        margin: 20px 0;
        border: 1px solid #eee;
        border-left-width: 5px;
        border-radius: 3px;
    }
    .bs-callout h4 {
        margin-top: 0;
        margin-bottom: 5px;
    }
    .bs-callout p:last-child {
        margin-bottom: 0;
    }
    .bs-callout code {
        border-radius: 3px;
    }
    .bs-callout+.bs-callout {
        margin-top: -5px;
    }
    .bs-callout-default {
        border-left-color: #777;
    }
    .bs-callout-default h4 {
        color: #777;
    }
    .bs-callout-primary {
        border-left-color: #428bca;
    }
    .bs-callout-primary h4 {
        color: #428bca;
    }
    .bs-callout-success {
        border-left-color: #5cb85c;
    }
    .bs-callout-success h4 {
        color: #5cb85c;
    }
    .bs-callout-danger {
        border-left-color: #d9534f;
    }
    .bs-callout-danger h4 {
        color: #d9534f;
    }
    .bs-callout-warning {
        border-left-color: #f0ad4e;
    }
    .bs-callout-warning h4 {
        color: #f0ad4e;
    }
    .bs-callout-info {
        border-left-color: #5bc0de;
    }
    .bs-callout-info h4 {
        color: #5bc0de;
    }
    .material-icons.md-15 { font-size: 15px; }

    .panel-heading{
        color: #20895e !important;
    }

</style>
<!-- #CALLOUT -->


<!-- sub_menú -->
<style>

    .dropdown-submenu{position:relative;}
    .dropdown-submenu>.dropdown-menu{top:0;left:100%;margin-top:-6px;margin-left:-1px;-webkit-border-radius:0 6px 6px 6px;-moz-border-radius:0 6px 6px 6px;border-radius:0 6px 6px 6px;}
    .dropdown-submenu:hover>.dropdown-menu{display:block;}
    .dropdown-submenu>a:after{display:block;content:" ";float:right;width:0;height:0;border-color:transparent;border-style:solid;border-width:5px 0 5px 5px;border-left-color:#cccccc;margin-top:5px;margin-right:-10px;}
    .dropdown-submenu:hover>a:after{border-left-color:#ffffff;}
    .dropdown-submenu.pull-left{float:none;}.dropdown-submenu.pull-left>.dropdown-menu{left:-100%;margin-left:10px;-webkit-border-radius:6px 0 6px 6px;-moz-border-radius:6px 0 6px 6px;border-radius:6px 0 6px 6px;}

</style>
<!-- #sub_menú -->

<!-- ICONOS -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!-- fuentes -->
<link href="https://fonts.googleapis.com/css?family=Baloo|Kaushan+Script" rel="stylesheet">

<style>
    .navbar-default {
        background-color: #c8c6a5 !important;
        border-color: #d3e0e9;
    }

    /* Texto del menú */
    .navbar-default .navbar-nav>li>a, .navbar-default .navbar-text {
        color: white;
    }

    body {
        color: #0f0f0f !important;
    }

    .text_usuario{
        font-family: 'Kaushan Script', cursive;
    }

</style>

<style >



    .body{
        background-repeat: no-repeat;
        background-position: center;
        background-image: url({{ asset('img/fondo/base.jpg') }}) !important;
        background-attachment: fixed;
        background-size: 100%;
    }
</style>
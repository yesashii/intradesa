<script type="text/javascript">

    $(document).ready(function(){

        // PARA EL DROP DOWN DEL MENÚ >>
        $('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
            event.preventDefault();
            event.stopPropagation();
            $(this).parent().siblings().removeClass('open');
            $(this).parent().toggleClass('open');
        });
        $('.dropdown-submenu a.test').on("click", function(e){
            $(this).next('ul').toggle();
            e.stopPropagation();
            e.preventDefault();
        });
        // PARA EL DROP DOWN DEL MENÚ <<

        // PARA MOSTRAR EL MENÚ VERTICAL CON EL BOTÓN EMPAREDADO >>
        $("#mostrar").on( "click", function() {
            $('#menu-vertical').toggle(); //muestro mediante id
        });
        // PARA MOSTRAR EL MENÚ VERTICAL CON EL BOTÓN EMPAREDADO <<

        // PARA el acordeon de semantic >>
        $('.ui.accordion').accordion();
        // PARA el acordeon de semantic <<


    });

    window.Laravel = {!! json_encode(['csrfToken' => csrf_token(), ]) !!};
    // PARA MOSTRAR EL MENÚ VERTICAL CON EL BOTÓN EMPAREDADO >>
    const toggle_menu_vertical = function () {
        let html_menu               = $('#menu_vertical');
        let cuerpo_sitio    = $('#cuerpo_sitio');

        if( cuerpo_sitio[0].className == 'col col-lg-12')
        {
            cuerpo_sitio.removeClass("col col-lg-12");
            cuerpo_sitio.addClass("col col-lg-10");
            html_menu.show();
        }else{
            cuerpo_sitio.removeClass("col col-lg-10");
            cuerpo_sitio.addClass("col col-lg-12");
            html_menu.hide();
        }
    };
    // PARA MOSTRAR EL MENÚ VERTICAL CON EL BOTÓN EMPAREDADO <<

</script>
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('js/jquery.notification.js') }}"></script>
<script src="{{ asset('semantic/semantic.js') }}"></script>

<script type="text/javascript" src="{{ asset('organigrama/jquery.orgchart.js') }}"></script>
<script type="text/javascript" src="{{ asset('organigrama/scripts.js') }}"></script>


<script>
    $(document).ready(function(){

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
    });
</script>


<script type="text/javascript">

    $(document).ready(function(){

        $("#mostrar").on( "click", function() {
            $('#menu-vertical').toggle(); //muestro mediante id
        });

    });

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


        //html_resto_pagina_10.toggle();
        //html_resto_pagina_12.toggle();
    }



</script>
<script type="text/javascript" >

    //scroll para las noticias.
    $( "#noticias" ).scroll(function() {
        $( "#log" ).append( "<div>Handler for .scroll() called.</div>" );
    });

    //scroll para los cumpleaños del mes.
    $( "#tab1-3" ).scroll(function() {
        $( "#log" ).append( "<div>Handler for .scroll() called.</div>" );
    });

    //scroll para los cumpleaños de la semana.
    $( "#tab1-2" ).scroll(function() {
        $( "#log" ).append( "<div>Handler for .scroll() called.</div>" );
    });

    //scroll para los cumpleaños del día.
    $( "#tab1-1" ).scroll(function() {
        $( "#log" ).append( "<div>Handler for .scroll() called.</div>" );
    });

</script>
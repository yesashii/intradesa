<?php


Route::get('/orga', function (){
    return view('nosotros.organigrama_2');
});
// HOME - CALENDARIO
Route::get( 'calendario', function (){
    //return 'en prueba';
    return view('extras.calendario_2');
} );
// SECCION DE GALERIA >>.
Route::get('muestra-galeria/{id}', 'Eventos\GalleriaController@muestraGaleria');
// pruebas certificados
Route::get('p_certificado', function (){
    return view('rrhh.certificados.certificado_antiguedad');
});
// APISBIF
Route::get('prueba_api',function (){
    $url = 'http://api.sbif.cl/api-sbifv3/recursos_api/dolar?apikey=8eeda224be021de585df5588435aa489eb4c5fde&formato=JSON';
    $datas_json = file_get_contents($url);
    $datas_array = json_decode($datas_json, true);


    dd($datas_array['Dolares']['0']['Valor']);

    foreach ( $datas_array['Dolares']['0'] as $data )
    {
        echo($data);
    }

    dd();

} );
Route::get('/test/', function () {
    $pdf = PDF::loadView('rrhh.vacaciones');
// Enviamos el fichero PDF al navegador.
    // $pdf->stream('FicheroEjemplo.pdf');
    $pdf->output(['isRemoteEnabled' => true]);
    return $pdf->download('FicheroEjemplo.pdf');
});
Route::get( 'Prueba', function (){

    //return 'en prueba';
    return view('extras.calendario');
} );
//Dinamico B2B
Route::get('b2bAutorizaIncCombo', 'ExtraControllers\b2bcontroller@cargaComboProceso');
Route::get('/test_galleria/', function () {
    return view('galleria_eventos.index');
});
Route::get('/test_galleria_web/', function () {
    return view('galleria_eventos.2.index_2');
});


Route::get('/test_galleria_web_2/', function () {
    return view('galleria_eventos.3.index');
});


Route::get('trae_fotos_galeria', 'Eventos\GalleriaController@index');

<?php
use Illuminate\Support\Facades\App;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/listacontactos', 'ContactoController@listar')->name('listacontactos');
Route::post('/listacontactos', 'ContactoController@buscar')->name('listacontactos');
// detalle usuario
Route::get( 'detalleUsuario/{id}', 'ContactoController@detalleusuario' )->name('detalleUsuario');


// nosotros
Route::get( 'nosotros/mision', 'NosotrosController@mision' )->name('mision');
Route::get( 'nosotros/valores', 'NosotrosController@valores' )->name('valores');
Route::get( 'nosotros/organigrama/{id}', 'NosotrosController@organigrama' )->name('organigrama');
Route::get( 'nosotros/historia', 'NosotrosController@historia' )->name('historia');

Route::get('/orga', function (){

    return view('nosotros.organigrama_2');

});


// procedimientos

Route::get( '/procedimientos/reglamento', 'ProcedimientosController@reglamentoInterno' )->name('reglamento');

// RRHH
Route::get( '/rrhh/formularios', 'RrhhControler@muestraFormularios' )->name('formularios');
Route::post( '/rrhh/formularios', 'RrhhControler@imprimir_formulario_vacaciones' )->name('formularios');
Route::get( '/rrhh/liquidaciones', 'RrhhControler@liquidaciones' )->name('liquidaciones');
Route::get( '/rrhh/beneficios', 'RrhhControler@beneficios' )->name('beneficios');
// RRHH->Certificados
Route::get('/rrhh/certificados', 'Rrhh\CertificadosController@index')->name('certificados');
Route::post('/solicita-solicitud-post', 'Rrhh\CertificadosController@solicita');
Route::get('/traeCertificados', 'Rrhh\CertificadosController@traeCertificados');
Route::get('/eliminaSolicitud/{id}', 'Rrhh\CertificadosController@eliminaSolicitud');

Route::get('/muestraCertificado/{id}', 'Rrhh\CertificadosController@muestraCertificado');
Route::get('/descargaCertificado/{id}', 'Rrhh\CertificadosController@descargaCertificado');


// HOME - CALENDARIO
Route::get( 'calendario', function (){
    //return 'en prueba';
    return view('extras.calendario_2');

} );


// SECCION DE ADMINISTRACION.
Route::get('administracion', 'Admin\AdminController@index');
Route::get('seccion-subir-noticia', 'Admin\SubirNoticiaController@index');
Route::get('activar-noticia/{id}', 'Admin\SubirNoticiaController@activarNoticia');
Route::get('elimina-noticia/{id}', 'Admin\SubirNoticiaController@eliminaNoticia');
//ADMINISTRACION -> certificados
Route::get('aprobar-solicitudes', 'Admin\SolicitudesController@index');
Route::get('actualiza-solicitudes-admin', 'Admin\SolicitudesController@actualiza_solicitudes');
Route::get('aprueba-solicitud-admin/{id}', 'Admin\SolicitudesController@aprueba_solicitudes');
//ADMINISTRACION -> actualiza-contador
Route::get('actualiza-contador', 'Admin\SolicitudesController@actualiza_contador');


Route::post('seccion-subir-noticia-post', 'Admin\SubirNoticiaController@save');
Route::post('actualiza-noticia-post', 'Admin\SubirNoticiaController@actualizaStore');
//API
Route::get('trae-noticias', 'Admin\SubirNoticiaController@traeNoticias');
Route::get('actualiza-noticia/{id}', 'Admin\SubirNoticiaController@actualiza');
Route::get('muestra-noticia/{id}', 'Admin\SubirNoticiaController@muestra');

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




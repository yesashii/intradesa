<?php

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

Route::get('/home', 'HomeController@index');

Route::get('/listacontactos', 'ContactoController@listar')->name('listacontactos');
Route::post('/listacontactos', 'ContactoController@buscar')->name('listacontactos');
// detalle usuario
Route::get( 'detalleUsuario/{id}', 'ContactoController@detalleusuario' )->name('detalleUsuario');


// nosotros

Route::get( 'nosotros/misionvision', 'NosotrosController@misionvision' )->name('misionvision');
Route::get( 'nosotros/organigrama', 'NosotrosController@organigrama' )->name('organigrama');
Route::get( 'nosotros/historia', 'NosotrosController@historia' )->name('historia');


// procedimientos

Route::get( '/procedimientos/reglamento', 'ProcedimientosController@reglamentoInterno' )->name('reglamento');

// RRHH
Route::get( '/rrhh/formularios', 'RrhhControler@muestraFormularios' )->name('formularios');
Route::post( '/rrhh/formularios', 'RrhhControler@imprimir_formulario_vacaciones' )->name('formularios');


Route::get( 'Prueba', function (){

    return view('rrhh.vacaciones');

} );


Route::get('/test/', function () {
    $pdf = PDF::loadView('rrhh.vacaciones');


// Enviamos el fichero PDF al navegador.
   // $pdf->stream('FicheroEjemplo.pdf');
    $pdf->output(['isRemoteEnabled' => true]);

    return $pdf->download('FicheroEjemplo.pdf');

});









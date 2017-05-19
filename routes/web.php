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









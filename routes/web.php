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
})->name('welcome');

Auth::routes();

Route::group(['middleware' => 'auth'], function(){

    Route::get('/home', 'HomeController@index')->name('home');
    include ('secciones/listaContactos.php');
    Route::get( 'detalleUsuario/{id}', 'ContactoController@detalleusuario' )->name('detalleUsuario');
    include ('secciones/nosotros.php');
    include ('secciones/rrhh.php');
    include ('secciones/admin.php');
    include ('secciones/extras.php');
});


Route::post( 'cambiaContrasenia', 'Extras\CambioPassController@cambiaContrasenia' )->name('cambiaContrasenia');

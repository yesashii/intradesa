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









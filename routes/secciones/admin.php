<?php

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
<?php
Route::get('/listacontactos', 'ContactoController@listar')->name('listacontactos');
Route::post('/listacontactos', 'ContactoController@buscar')->name('listacontactos');
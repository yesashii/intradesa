<?php

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

Route::get( '/procedimientos/reglamento', 'ProcedimientosController@reglamentoInterno' )->name('reglamento');
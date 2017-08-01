<?php
Route::get( 'nosotros/mision', 'NosotrosController@mision' )->name('mision');
Route::get( 'nosotros/valores', 'NosotrosController@valores' )->name('valores');
Route::get( 'nosotros/organigrama/{id}', 'NosotrosController@organigrama' )->name('organigrama');
Route::get( 'nosotros/historia', 'NosotrosController@historia' )->name('historia');
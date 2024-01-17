<?php

use Illuminate\Support\Facades\Route;



Route::get('/error','WebController@error');

Route::get('/','IndexController@index');
Route::get('/nosotros','WebController@nosotros');
Route::get('/proyectos','PoryectoController@proyectos');
Route::get('/proyectos/lotes/{slug}', 'PoryectoController@detalle_proyecto');


Route::get('/proyecto/{slug}','PoryectoController@detalle_proyecto');



Route::get('/proyectos/lotes/{slug}/gracias','PoryectoController@detalle_proyecto');


Route::get('/blog','BlogController@blog');
Route::get('/detalle_blog/{slug}','BlogController@blogd');
Route::get('/contactanos','WebController@contactanos');

Route::post('/atencion/registrar','ClienteController@store')->name('/atencion/registrar');

Route::get('/terminos','WebController@terminos');
Route::get('/politicas','WebController@politicas');
Route::get('/reclamaciones','WebController@reclamaciones');


Route::get('/download/{file}','WebController@download')->where('file', '.*');;




Route::post('/promociones/registrar','PromocionesController@registrar')->name('/promociones/registrar');

Route::post('/promociones/formulario','PromocionesController@registrarLandingFormulario')->name('/promociones/formulario');


Route::get('/eventos/robles-tours','PromocionesController@roblesTours');
Route::get('/eventos/robles-tours/gracias','PromocionesController@roblesTours');

Route::get('/lotes-en-oxapampa','PromocionesController@lotesOxapampa');
Route::get('/lotes-en-oxapampa/gracias','PromocionesController@lotesOxapampa');

Route::get('/terrenos-en-oxapampa','PromocionesController@terrenosOxapampa');
Route::get('/terrenos-en-oxapampa/gracias','PromocionesController@terrenosOxapampa');


Route::get('/nuestros-proyectos','PromocionesController@nuestrosProyectos');
Route::get('/nuestros-proyectos/gracias','PromocionesController@nuestrosProyectos');

Route::get('/financiamiento','PromocionesController@financiamiento');
Route::get('/financiamiento/gracias','PromocionesController@financiamiento');






Route::post('/zapier-salvar-financiamiento','ZapierController@guardarFinancimiento');
Route::post('/zapier-salvar-nosotros','ZapierController@guardarNosotros');






Route::get('/landing/lotes-en-oxapampa', 'PromocionesController@formularioLotesOxapampa');
Route::get('/landing/lotes-en-oxapampa/gracias', 'PromocionesController@graciasLanding');

Route::get('/landing/terrenos-en-oxapampa', 'PromocionesController@formularioTerrenosOxapampa');
Route::get('/landing/terrenos-en-oxapampa/gracias', 'PromocionesController@graciasLanding');





Route::get('/landing/lotes/{slug}', 'PromocionesController@formularioDetalle');
Route::get('/landing/lotes/{slug}/gracias', 'PromocionesController@graciasLanding');


Route::post('/reclamaciones/guardar','PromocionesController@guardarReclamaciones');
Route::get('/reclamaciones/success','PromocionesController@successReclamaciones');
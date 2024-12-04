<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;


use App\Http\Controllers\ApiController;

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



Route::get('/terminos','WebController@terminos');
Route::get('/politicas','WebController@politicas');
Route::get('/reclamaciones','WebController@reclamaciones');


Route::get('/download/{file}','WebController@download')->where('file', '.*');;




Route::post('/promociones/registrar','PromocionesController@registrar')->name('/promociones/registrar');


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








Route::get('/landing/lotes-en-oxapampa', 'PromocionesController@formularioLotesOxapampa');
Route::get('/landing/lotes-en-oxapampa/gracias', 'PromocionesController@graciasLanding');

Route::get('/landing/terrenos-en-oxapampa', 'PromocionesController@formularioTerrenosOxapampa');
Route::get('/landing/terrenos-en-oxapampa/gracias', 'PromocionesController@graciasLanding');





Route::get('/landing/lotes/{slug}', 'PromocionesController@formularioDetalle');
Route::get('/landing/lotes/{slug}/gracias', 'PromocionesController@graciasLanding');


Route::post('/reclamaciones/guardar','PromocionesController@guardarReclamaciones');
Route::get('/reclamaciones/success','PromocionesController@successReclamaciones');






Route::post('/add-tiktok','PromocionesController@addTiktok');


 Route::group(['prefix' => 'sperant'], function () {

        Route::get('listEntities', 'SperantController@listEntities');
       
          
     
    });





Route::get('/webinar','PromocionesController@webinar');
Route::get('/webinar/gracias','PromocionesController@webinar');
Route::get('/webinar/gracias-familia','PromocionesController@webinar');
Route::get('/webinar/gracias-inversionista','PromocionesController@webinar');


Route::get('/webinar-2','PromocionesController@webinar2');
Route::get('/webinar-2/gracias','PromocionesController@webinar2');



Route::get('/landing-color','PromocionesController@color');




Route::get('/visitas-guiadas','PromocionesController@visitasGuiadas');
Route::get('/visitas-guiadas/gracias','PromocionesController@visitasGuiadas');






Route::post('/promociones/visitas','PromocionesController@saveVisitas');




Route::get('/webinar-inversion','PromocionesController@webinarInversor');
Route::get('/webinar-inversion/gracias','PromocionesController@webinarInversor');



Route::get('/landing-fundo-los-robles','PromocionesController@landingFundoLosRobles');
Route::get('/landing-fundo-los-robles/gracias','PromocionesController@landingFundoLosRobles');




Route::get('/robles-night','PromocionesController@roblesNight');
 Route::get('/robles-night/gracias','PromocionesController@roblesNight');
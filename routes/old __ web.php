<?php

use Illuminate\Support\Facades\Artisan;
Route::get('/', 'HomeController@index')->name('home');

Route::any('/buscar', 'HomeController@buscar')->name('home.buscar');


Route::group(['prefix' => 'concursos/'], function () {
    Route::get('/', 'ConcursosController@index')->name('concursos.index');
    Route::get('/{concurso}/info', 'ConcursosController@show')->name('concursos.show');
    Route::get('/{concurso}', 'ConcursosController@show')->name('concursos.show');
});


Route::group(['prefix' => 'unidad/'], function () {
    Route::get('/index', 'UnidadController@index')->name('unidad.index');
    Route::get('/{unidad}/info', 'UnidadController@show')->name('unidad.show');
});
Route::get('/nuestras-oficinas', 'UnidadController@lista')->name('unidad.lista');


Route::group(['prefix' => 'contacto/'], function () {
    Route::get('/', 'ContactoController@index')->name('contacto.index');
    Route::post('/', 'ContactoController@contacto')->name('contacto.contacto');
    Route::get('/{cajoirs}/ficha', 'ContactoController@ficha')->name('contacto.ficha');
});


Route::group(['prefix' => 'noticias/'], function () {
    Route::get('/', 'NoticiasController@index')->name('noticias.index');
    Route::get('/{noticia}/info', 'NoticiasController@show')->name('noticias.show');
    Route::get('/{noticia}', 'NoticiasController@show')->name('noticias.show');
});


Route::group(['prefix' => 'participacion-ciudadana/'], function () {
    Route::get('/index', 'ParticipacionCiudadanaController@index')->name('pciudadana.index');
    Route::get('/cosoc', 'ParticipacionCiudadanaController@cosoc')->name('pciudadana.cosoc');
    Route::get('/postulacion-cosoc', 'ParticipacionCiudadanaController@postulacionCosoc')->name('pciudadana.postulacion.cosoc');
    Route::get('/consulta-ciudadana', 'ParticipacionCiudadanaController@consciudadana')->name('pciudadana.consciudadana');
    Route::get('/plaza-justicia', 'ParticipacionCiudadanaController@plazajusticia')->name('pciudadana.plazajusticia');
    Route::get('/moviles', 'ParticipacionCiudadanaController@moviles')->name('pciudadana.moviles');
    Route::get('/informacion-relevante', 'ParticipacionCiudadanaController@inforelevante')->name('pciudadana.inforelevante');

    Route::get('/cuentas-publicas', 'ParticipacionCiudadanaController@cpp')->name('pciudadana.cpp');
    Route::post('/cuentas-publicas', 'ParticipacionCiudadanaController@postConsulta')->name('pciudadana.cpp');

});


Route::group(['prefix' => 'documentos/'], function () {
    Route::get('/index', 'DocumentosController@index')->name('documentos.index');
    Route::get('/incentivo-retiro', 'DocumentosController@retiro')->name('documentos.retiro');
});


Route::group(['prefix' => 'nosotros/'], function () {
    Route::get('/presentacion', 'NosotrosController@presentacion')->name('nosotros.presentacion');
    Route::get('/consejo-directivo', 'NosotrosController@consejo')->name('nosotros.consejo');
    Route::get('/testimonios', 'NosotrosController@testimonios')->name('nosotros.testimonios');
    Route::get('/organigrama', 'NosotrosController@organigrama')->name('nosotros.organigrama');
    Route::get('/{usuario}/autoridades', 'NosotrosController@autoridades')->name('nosotros.autoridades');
    Route::get('/resumen', 'NosotrosController@resumen')->name('nosotros.resumen');
    Route::get('/resumen-general', 'NosotrosController@resumen_consolidado')->name('nosotros.resumen_consolidado');

    Route::group(['prefix' => 'servicios/'], function() {
        Route::get('/materias', 'NosotrosController@servmaterias')->name('nosotros.servicios.materias');
        Route::get('/linea-servicio', 'NosotrosController@servprestaciones')->name('nosotros.servicios.prestaciones');
        Route::get('/usuarios', 'NosotrosController@servusuarios')->name('nosotros.servicios.usuarios');
    });

    Route::group(['prefix' => 'postulantes/'], function() {
        Route::get('/', 'NosotrosController@postulantes')->name('nosotros.postulantes');
        Route::get('/solicitud', 'NosotrosController@postulantes_solicitud')->name('nosotros.postulantes.solicitud');
    });
});


Route::group(['prefix' => 'quedate-en-cajta/'], function () {
    Route::get('/', 'QuedateCajtaController@index')->name('quedatecajta.index');
});


Route::group(['prefix' => 'centro-mediacion/'], function () {
    Route::get('/', 'Mediacion\CmedController@index')->name('mediacion.index');
    Route::get('/solicitud', 'Mediacion\CmedController@solicitud')->name('mediacion.solicitud');
    Route::post('/solicitud', 'Mediacion\CmedController@registro')->name('mediacion.registro');
});

/**
Route::group(['prefix' => 'inscripciones/'], function () {
    Route::get('/', 'Eventos\InscripcionesController@index')->name('eventos.index');
    Route::get('/info', 'Eventos\InscripcionesController@show')->name('eventos.show');
});**/


/**
 * Modulos hechos solo para intranet
 */

Route::group(['prefix' => 'intranet/noticias/'], function () {
    Route::group(['prefix' => 'subida/documentos/'], function () {
        Route::get('/{noticia}/noticias', 'Intranet\SubidaNoticiasController@index')->name('intranet.noticias.index');
        Route::post('/{noticia}/postnoticia', 'Intranet\SubidaNoticiasController@postnoticia')->name('intranet.noticias.postnoticia');

        Route::get('/{noticia}/galeria', 'Intranet\SubidaNoticiasController@indexGaleria')->name('intranet.noticias.indexgaleria');
        Route::post('/{noticia}/postgaleria', 'Intranet\SubidaNoticiasController@storeGaleria')->name('intranet.noticias.postgaleria');
    });

    Route::group(['prefix' => 'previsualizacion/'], function () {
        Route::get('/{noticia}/show', 'Intranet\PrevisualizacionNoticiaController@show')->name('intranet.noticias.showprev');
    });
});




/**
 *  php artisan
 */
Route::group(['prefix' => 'artisan'], function() {
    /**         CLEAR CONFIGURATION     **/
    Route::get('reset/configuration', function (){
        Artisan::call('route:clear');
        Artisan::call('cache:clear');
        Artisan::call('config:clear');
        Artisan::call('config:cache');
    });

    /**     SET TO MAINTENANCE DOWN         **/
    Route::get('mantencion/down', function (){
        Artisan::call('down');
    });

    /**     SET TO MAINTENANCE UP         **/
    Route::get('mantencion/up', function (){
        Artisan::call('up');
    });
});


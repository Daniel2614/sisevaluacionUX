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
    return redirect('/docenteslista');
});
// rutas de las carreras existentes dentro de la Universidad de Xalapa
 	Route::get('/carreras/create','CarreraController@create')->name('cc.create');
    Route::post('/carreras/storeC/','CarreraController@store')->name('cc.store');
    Route::get('/catalogoscarrera/edit/{id}','CarreraController@edit')->name('cc.edit');
    Route::post('/catalogoscarrera/updateCC','CarreraController@update')->name('cc.update');
    Route::get('/carreralista', 'CarreraController@index')->name('carrerascc');
// rutas de los docentes activos dentro de la Universidad de Xalapa
  	Route::get('/docentes/create','DocenteController@create')->name('dc.create');
    Route::post('/docentes/storeDC/','DocenteController@store')->name('dc.store');
    Route::get('/catalogos/edit/{id}','DocenteController@edit')->name('dc.edit');
    Route::post('/catalogos/updateCT','DocenteController@update')->name('dc.update');
    Route::get('/docenteslista', 'DocenteController@index')->name('docentesdc');
// rutas de los criterios de evaluacion de la Universidad de Xalapa
    Route::get('/criterios/create','CriteriosController@create')->name('c.create');
    Route::post('/criterios/storeC/','CriteriosController@store')->name('c.store');
    Route::get('/catalogoscriterios/edit/{id}','CriteriosController@edit')->name('c.edit');
    Route::post('/catalogoscriterios/updateC','CriteriosController@update')->name('c.update');
    Route::get('/criterioslista', 'CriteriosController@index')->name('criteriosc');
// rutas de las frecuentas de la evaluacion de la Universidad de Xalapa
    Route::get('/frecuencias/create','FrecuenciasController@create')->name('f.create');
    Route::post('/frecuencias/storeF/','FrecuenciasController@store')->name('f.store');
    Route::get('/catalogosfrecuencias/edit/{id}','FrecuenciasController@edit')->name('f.edit');
    Route::post('/catalogosfrecuencias/updateF','FrecuenciasController@update')->name('f.update');
    Route::get('/frecuenciaslista', 'FrecuenciasController@index')->name('frecuenciasf');

  

    
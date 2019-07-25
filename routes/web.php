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


  Route::get('/docentes/create','DocenteController@create')->name('dc.create');
    Route::post('/docentes/storeDC/','DocenteController@store')->name('dc.store');
    Route::get('/catalogos/edit/{id}','DocenteController@edit')->name('dc.edit');
    Route::post('/catalogos/updateCT','DocenteController@update')->name('dc.update');
    Route::get('/docenteslista', 'DocenteController@index')->name('docentesdc');


    
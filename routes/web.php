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
    return view('inicio');
});


Route::post('/createuser', 'CreaUserController@store');
Route::get('/listaruser', 'CreaUserController@show');

Auth::routes();

Route::get('/acceso', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//resultado de analisi
Route::get('/resultadoAnalisis','ResultadoAnalisisController@index');

Route::get('/showFormEmpresa', function(){
    return view ('registroEmpresa');
});

Route::post('/createEmpresa','empresaController@store');

Route::get('/listEmpresas','empresaController@index');

Route::get('/listEditEmpresas', function(){
    return view ('editEmpresa_2');
});

Route::get('/updateEmpresa','empresaController@update');


//particular

Route::get('/showFormParticular', function(){
    return view ('registroParticular');
});

Route::get('/createPersona','ParticularController@store');

Route::get('/listParticular','ParticularController@index');

//muestras
Route::get('/formMuestras', function(){
    return view ('formMuestras');
});
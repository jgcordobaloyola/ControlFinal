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

//registrando
//Route::get('/registro', function() {
//    return view('register');
//    //echo 'debe de retornar el PHP del registro';
//});

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
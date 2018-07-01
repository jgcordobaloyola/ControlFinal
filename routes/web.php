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
    return view('/home/inicio');
});

//registrando
Route::get('/registro', function() {
    return view('../register/register');
    //echo 'debe de retornar el PHP del registro';
});

//listar empresa
Route::get('listarEmpresa/', 'empresaController@index');

<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/contato', 'App\Http\Controllers\ContatoController@contato');
Route::get('/', 'App\Http\Controllers\PrincipalController@principal');
Route::get('/sobre-nos', 'App\Http\Controllers\SobreNosController@sobreNos');
Route::get('/paises', 'App\Http\Controllers\PaisController@index') -> name('paises.index');
Route::get('/paises/{nome}', 'App\Http\Controllers\PaisController@show') -> name('paises.show');
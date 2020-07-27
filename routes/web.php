<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'PagesController@inicio' );

Route::get('registrarse', 'PagesController@registrarse')->name('registrarse');

Route::post('/', 'PagesController@nuevoRegistro') ->name('usuario.registrarse');

Route::get('juegos/{numero?}', 'PagesController@detalleJuego' )->where('id', '[0-9]+');

Route::view('detalle','juego' , ['numero'=>125]);
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

Route::get('/', function () {
    return view('juegos');
});

Route::get('registrarse', function () {
    return view('registrarse');
})->name('registrarse');

Route::get('juegos/{numero?}', function ($numero = 'sin numero') {
    return 'Estas en el juego: '.$numero;
})->where('id', '[0-9]+');

Route::view('detalle','juego' , ['numero'=>125]);
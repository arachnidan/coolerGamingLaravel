<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function inicio() {
        return view('juegos');
    }

    public function registrarse() {
        return view('registrarse');
    }

    public function detalleJuego($numero = 'sin numero'){
        return 'Estas en el juego: '.$numero;
    }

    public function nuevoRegistro(Request $request){
        // return $request->all();
        // $operadorNuevo  = new App/;
    }
}

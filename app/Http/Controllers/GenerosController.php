<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelicula;
use App\Models\Genero;

class GenerosController extends Controller
{
    public function create(){
        $argumentos = array();
        $generos = Genero::all();
        $argumentos['generos'] = $generos;
        return view('peliculas.create', $argumentos);
    }

    public function store(Request $request) {
        $nuevoGenero = new Pelicula();
        $nuevoGenero->nombre = $request->input('nombre');

        $nuevoGenero->save();

        return redirect()->route('peliculas.create');
    }
}

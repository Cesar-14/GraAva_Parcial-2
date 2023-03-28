<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelicula;
use App\Models\Genero;

class PeliculasController extends Controller
{
    public function index(){
        $peliculas = Pelicula::all();

        $argumentos = array();
        $argumentos['peliculas'] = $peliculas;

        return view("peliculas.menu1", $argumentos);
    }

    public function create(){
        $argumentos = array();
        $generos = Genero::all();
        $argumentos['generos'] = $generos;
        return view('peliculas.create', $argumentos);
    }

    public function store(Request $request) {
        $nuevaPelicula = new Pelicula();
        $nuevaPelicula->nombre = $request->input('nombre');
        $nuevaPelicula->director = $request->input('director');
        $nuevaPelicula->año = $request->input('año');
        $nuevaPelicula->foto = $request->input('foto');
        $nuevaPelicula->descripcion = $request->input('descripcion');
        $nuevaPelicula->genero = $request->input('genero');

        

        $nuevaPelicula->save();

        return redirect()->route('peliculas.index');
    }

    public function delete($id){
        $pelicula = Pelicula::find($id);

        $argumentos = array();
        $argumentos['pelicula'] = $pelicula;

        return view('peliculas.delete',$argumentos);
    }

    public function destroy(Request $request, $id) {
        $pelicula = Pelicula::find($id);
        $pelicula->delete();
        return redirect()->route('peliculas.index');
    }

    public function edit($id) {
        $pelicula = Pelicula::find($id);
        $argumentos = array();
        $argumentos['pelicula'] = $pelicula;
        return view('peliculas.edit',$argumentos);
    }

    public function update(Request $request,$id) {
        //busca al alumno
        $pelicula = Pelicula::find($id);
        //Actualiza sus datos en base a los valores del form
        $pelicula->nombre = $request->input('nombre');
        $pelicula->director = $request->input('director');
        $pelicula->año = $request->input('año');
        $pelicula->foto = $request->input('foto');
        $pelicula->descripcion = $request->input('descripcion');
        $pelicula->genero = $request->input('genero');

        $pelicula->save();
        return redirect()->route('peliculas.index',$id);
    }

}

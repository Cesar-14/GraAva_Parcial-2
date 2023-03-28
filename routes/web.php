<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeliculasController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Index - Listar
// Route::get('/iniciar-sesion',[PeliculasController::class,'index'])
//     ->name('peliculas.index');

//Menu
Route::get('/menu',[PeliculasController::class,'index'])
    ->name('peliculas.index');

//Create
Route::get('/menu/create',[PeliculasController::class, 'create'])
    ->name('peliculas.create');

//Store
Route::post('/menu', [PeliculasController::class, 'store'])
    ->name('peliculas.store');

//Edit
Route::get('/peliculas/{id}/edit',[PeliculasController::class,'edit'])->name('peliculas.edit');
Route::put('/peliculas/{id}',[PeliculasController::class,'update'])->name('peliculas.update');

//Delete
Route::get('/peliculas/{id}/delete',[PeliculasController::class,'delete'])->name('peliculas.delete');
Route::delete('/peliculas/{id}',[PeliculasController::class,'destroy'])->name('peliculas.destroy');

//Historial
Route::get('/historial', function () {
    return view('peliculas.historial');
});
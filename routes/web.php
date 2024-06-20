<?php

use App\Http\Controllers\AutorController;
use App\Http\Controllers\BibliotecaController;
use App\Http\Controllers\CopiaLibroController;
use App\Http\Controllers\EstanteriaController;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\TemaController;
use App\Models\Libro;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/login', LoginController::class);

Route::resource('/registro', RegistroController::class);

Route::resource('/biblioteca', BibliotecaController::class);

Route::resource('/tema', TemaController::class);
Route::resource('/estanteria', EstanteriaController::class);
Route::resource('/autor', AutorController::class);
Route::resource('/libro', LibroController::class);
Route::resource('/copiaLibro', CopiaLibroController::class);





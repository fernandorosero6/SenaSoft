<?php

use App\Http\Controllers\AutorController;
use App\Http\Controllers\BibliotecaController;
use App\Http\Controllers\CopiaLibroController;
use App\Http\Controllers\EstanteriaController;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TemaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/biblioteca', BibliotecaController::class);

Route::resource('/tema', TemaController::class);
Route::resource('/estanteria', EstanteriaController::class);
Route::resource('/autor', AutorController::class);
Route::resource('/libro', LibroController::class);
Route::resource('/copiaLibro', CopiaLibroController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

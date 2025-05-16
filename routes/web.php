<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactoController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::get('/publicaciones', [HomeController::class, 'papers'])->name('papers');

Route::get('/libros', [HomeController::class, 'books'])->name('books');

Route::get('/noticias', [HomeController::class, 'papers'])->name('noticias');

Route::post('/create', [ContactoController::class, 'store'])->name('contacto.store');

Route::get('/contacto', [ContactoController::class, 'index'])->name('contacto');

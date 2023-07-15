<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BooksController;
use App\Http\Controllers\BookstoresController;
use App\Http\Controllers\CharactersController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\LanguagesController;
use App\Http\Controllers\BooksUserController;
use App\Http\Controllers\CharactersUserController;

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
    return view('layouts/index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

//Front
Route::view('/inicio', 'layouts/index')->name('index');
Route::view('/nosotros', 'layouts/nosotros')->name('nosotros');
Route::view('/aplicacion', 'layouts/aplicacion')->name('aplicacion');
//Route::view('/libros','layouts/libros')->name('libros');
//Route::view('/personaje','layouts/personajes')->name('personajes');
Route::view('/galeria', 'layouts/galeria')->name('galeria');
Route::view('/contacto', 'layouts/contacto')->name('contacto');
//Back
Route::view('/admin', 'admin/plantilla/index')->name('index')->middleware(['auth', 'verified']);
Route::view('/admin/bibliotecas', 'admin/bibliotecas/index')->name('bibliotecas')->middleware(['auth', 'verified']);
Route::view('/admin/contactos', 'admin/contactos/index')->name('contactos')->middleware(['auth', 'verified']);
Route::view('/admin/libros', 'admin/libros/index')->name('libros')->middleware(['auth', 'verified']);
Route::view('/admin/personajes', 'admin/personajes/index')->name('personajes')->middleware(['auth', 'verified']);
Route::view('/admin/sesion', 'admin/sesion/index')->name('sesion')->middleware(['auth', 'verified']);

Route::resource('books', BooksController::class)->middleware(['auth', 'verified']);
Route::resource('bookstores', BookstoresController::class)->middleware(['auth', 'verified']);
Route::resource('characters', CharactersController::class)->middleware(['auth', 'verified']);
Route::resource('contacts', ContactsController::class)->middleware(['auth', 'verified']);

Route::get('/galeria', [BooksUserController::class, 'index']);
Route::get('/libro/{id}', [BooksUserController::class, 'show']);

Route::get('/personaje', [CharactersUserController::class, 'index',]);
Route::get('/personaje/{id}', [CharactersUserController::class, 'show']);

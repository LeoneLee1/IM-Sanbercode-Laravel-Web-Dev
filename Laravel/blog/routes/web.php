<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenreController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/welcome', function () {
    return view('dashboard');
});

Route::get('/genre',[GenreController::class,'index'])->name('genre');
Route::get('/genre/create',[GenreController::class,'create'])->name('genre.create');
Route::post('/genre/create/insert',[GenreController::class,'store'])->name('genre.insert');
Route::get('/genre/show/{id}',[GenreController::class,'show'])->name('genre.show');
Route::get('/genre/edit/{id}',[GenreController::class,'edit'])->name('genre.edit');
Route::put('/genre/edit/update/{id}',[GenreController::class,'update'])->name('genre.update');
Route::get('/genre/delete/{id}',[GenreController::class,'destroy'])->name('genre.delete');

<?php

use App\Http\Controllers\PublicacionController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::view('/', 'miwelcome')->name('miwelcome');

Route::view('/Help', 'Help')->name('Help');

Route::view('/about', 'about')->name('about');

Route::view('/blog', 'blog')->name('blog');

Route::view('/miregistro', 'miregister')->name('miregistro');

Route::view('/milogin', 'milogin')->name('milogin');

Route::view('/start', 'start')->name('start')->middleware(['auth', 'verified']);

Route::view('/perfil', 'perfil')->name('perfil');

Route::resource('/publicacion', PublicacionController::class)->middleware('auth');

Route::resource('/product', ProductController::class)->middleware('auth');

Route::get('/Canino', [PublicacionController::class, 'indexCanino'])->name('canino')->middleware('auth');
Route::get('/Felino', [PublicacionController::class, 'indexFelino'])->name('felino')->middleware('auth');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

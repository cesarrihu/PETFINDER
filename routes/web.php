<?php

use App\Http\Controllers\PublicacionController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StripeController;

Route::view('/', 'miwelcome')->name('miwelcome');

Route::view('/Help', 'Help')->name('Help');

Route::view('/about', 'about')->name('about');

Route::view('/blog', 'blog')->name('blog');

Route::view('/miregistro', 'miregister')->name('miregistro');

Route::view('/milogin', 'milogin')->name('milogin');

Route::view('/start', 'start')->name('start')->middleware(['auth', 'verified']);

Route::view('/perfil', 'perfil')->name('perfil');

Route::get('/Panel-Administrador',  [PublicacionController::class, 'InicioPanel'])->name('Panel-Administrador')->middleware('auth');


Route::resource('/publicacion', PublicacionController::class)->middleware('auth');

Route::post('/interes/{publicacion_id}', [PublicacionController::class, 'interes'])->name('publicacion.interes')->middleware('auth');

Route::get('/publicacion-interesados/{publicacion}', [PublicacionController::class, 'publicacionInteresados'])->name('interesados-publics')->middleware('auth');

Route::put('/publicacion/{publicacion}/adoptar', [PublicacionController::class, 'adoptado'])->name('publicacion.adoptar')->middleware('auth');

Route::put('/publicacion/{publicacion}/noadoptar', [PublicacionController::class, 'noadoptado'])->name('publicacion.noadoptar')->middleware('auth');

Route::resource('/product', ProductController::class)->middleware('auth');

Route::get('/Canino', [PublicacionController::class, 'indexCanino'])->name('canino')->middleware('auth');
Route::get('/Felino', [PublicacionController::class, 'indexFelino'])->name('felino')->middleware('auth');

Route::post('/checkout', [StripeController::class, 'checkout'])->name('checkout')->middleware('auth');
Route::get('/success', [StripeController::class, 'success'])->name('success')->middleware('auth');
Route::get('/cancel', [StripeController::class, 'cancel'])->name('cancel')->middleware('auth');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


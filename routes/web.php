<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::view('/', 'miwelcome')->name('miwelcome');

Route::view('/Help', 'Help')->name('Help');

Route::view('/about', 'about')->name('about');

Route::view('/blog', 'blog')->name('blog');

Route::view('/miregistro', 'miregister')->name('miregistro');

Route::view('/milogin', 'milogin')->name('milogin');

Route::view('/start', 'start')->name('start');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

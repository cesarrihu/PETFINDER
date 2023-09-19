<?php

use App\Http\Controllers\PublicacionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::view('/', 'welcome')->name('welcome');

Route::view('/Help', 'Help')->name('Help');

Route::view('/about', 'about')->name('about');

Route::view('/blog', 'blog')->name('blog');

Route::view('/registro', 'register')->name('registro');

Route::view('/login', 'login')->name('login');

Route::view('/start', 'start')->name('start');

Route::resource('/publicacion', PublicacionController::class);


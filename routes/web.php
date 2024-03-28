<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\HomePageController;

// Rota de Login
Route::get('/login', 'App\Http\Controllers\Auth\LoginController@showLoginForm')->name('login')->middleware('guest');
Route::post('/login', 'App\Http\Controllers\Auth\LoginController@login');

// Rota de Logout
Route::post('/logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout')->middleware('auth');

// Rotas de Registro
Route::get('/register', 'App\Http\Controllers\Auth\RegisterController@showRegistrationForm')->name('register')->middleware('guest');
Route::post('/register', 'App\Http\Controllers\Auth\RegisterController@register')->middleware('guest');

// Rota da Home
Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home')->middleware('auth');


// Redirecionar a rota raiz para o login (caso não autenticado)
Route::redirect('/', '/login');


/*
Route::get('/artist', 'App\Http\Controllers\Auth\ArtistController@showArtistForm')->name('artist');
Route::post('/artist', 'App\Http\Controllers\Auth\ArtistController@showArtistForm');

Route::get('/album', 'App\Http\Controllers\Auth\AlbumController@showAlbumForm')->name('album');
Route::post('/album', 'App\Http\Controllers\Auth\AlbumController@showAlbumForm');*/
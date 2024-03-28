<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/login', 'App\Http\Controllers\Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'App\Http\Controllers\Auth\LoginController@login');
Route::post('/logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');

// Rotas de Registro
Route::get('/register', 'App\Http\Controllers\Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('/register', 'App\Http\Controllers\Auth\RegisterController@register');

Route::middleware('auth')->group(function () {
    Route::get('/', 'App\Http\Controllers\Auth\HomePageController@showHomePage')->name('home');
    Route::post('/', 'App\Http\Controllers\Auth\HomePageController@showHomePage');
});


Route::get('/', 'App\Http\Controllers\Auth\HomePageController@showHomePage')->name('home');
Route::post('/', 'App\Http\Controllers\Auth\HomePageController@showHomePage');

/*
Route::get('/artist', 'App\Http\Controllers\Auth\ArtistController@showArtistForm')->name('artist');
Route::post('/artist', 'App\Http\Controllers\Auth\ArtistController@showArtistForm');

Route::get('/album', 'App\Http\Controllers\Auth\AlbumController@showAlbumForm')->name('album');
Route::post('/album', 'App\Http\Controllers\Auth\AlbumController@showAlbumForm');*/
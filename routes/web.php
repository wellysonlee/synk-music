<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', 'App\Http\Controllers\Auth\LoginController@showLoginForm')->name('login');


Route::get('/register', 'App\Http\Controllers\Auth\RegisterController@showRegisterForm')->name('register');
Route::post('/register', 'App\Http\Controllers\Auth\RegisterController@showRegisterForm');

Route::get('/home', 'App\Http\Controllers\Auth\HomePageController@showHomePageForm')->name('home');
Route::post('/home', 'App\Http\Controllers\Auth\HomePageController@showHomePageForm');

Route::get('/artist', 'App\Http\Controllers\Auth\ArtistController@showArtistForm')->name('artist');
Route::post('/artist', 'App\Http\Controllers\Auth\ArtistController@showArtistForm');
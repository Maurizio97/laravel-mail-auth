<?php

use Illuminate\Support\Facades\Route;


Route::post('/login', 'Auth\LoginController@login') -> name('login');
Route::post('/register', 'Auth\RegisterController@register') -> name('register');
Route::get('/logout', 'Auth\LoginController@logout') -> name('logout');


Route::get('/', 'GuestController@home') -> name('home');

Route::get('/api/get/videogames', 'ApiController@getVideogames') -> name('api.getVideogames');
Route::get('/delete/videogame/{id}', 'ApiController@delete') ->name('delete');
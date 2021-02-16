<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'MainController@index') -> name('index');

// API
Route::get('/get/ghosts', 'MainController@getGhosts') -> name('get-ghosts');

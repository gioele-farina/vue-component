<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'MainController@index') -> name('index');

// API
Route::get('/get/ghosts', 'MainController@getGhosts') -> name('get-ghosts');
Route::post('/edit/ghost/{id}', 'MainController@editGhost') -> name('edit-ghost');
Route::post('create/ghost', 'MainController@createGhost') -> name('create-ghost');
Route::get('delete/ghost/{id}', 'MainController@deleteGhost') -> name('delete-ghost');

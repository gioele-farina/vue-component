<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'MainController@index') -> name('index');

// API
Route::get('/get/ghosts', 'MainController@getGhosts') -> name('get-ghosts');
Route::post('/edit/ghost/{id}', 'MainController@editGhost') -> name('edit-ghost');


// DA FARE
//fatto Tabella colori con relazione con i fantasmini (1 colore + fantasmini, un fantasmino 1 colore)

// La lista per la select per cambiare i colori la prendo dalla tabella colors

//Per cambiare il colore faccio un'API, in modo da non ricaricare la pagina.

<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () { // funzione che accetta dei parametri, GET POST DELETE
    // return view('welcome'); // pagina di base, ritorna qualcosa
    return view('index'); // percorso con dot notation
    // return 'ciao classe 10';
})->name('index');

Route::get('/prodotti', function () {
  return view('prodotti'); // va a cercare il ns file home
})->name('prodotti'); // abbiamo creato un nome alla route

Route::get('/news', function () {
  return view('news'); // va a cercare il ns file home
})->name('news'); // abbiamo creato un nome alla route

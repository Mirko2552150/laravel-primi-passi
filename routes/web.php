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
    return view('users/index'); // percorso con dot notation
    // return 'ciao classe 10';
})->name('index');

Route::get('/home', function () {
  return view('home'); // va a cercare il ns file home
})->name('home'); // abbiamo creato un nome alla route

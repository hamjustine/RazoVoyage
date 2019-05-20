<?php

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

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/voyages', function () {
    return view('destination');
})->name('voyages');

Route::get('/voyages/{id}', function ($id) {
    return view('show');
})->name('voyage');

Route::get('/a_propos', function () {
    return view('a_propos');
})->name('about');

Route::get('/admin/voyage', function () {
    return " Ceci est la page qui affichera les
    informations concernant l’entreprise";
});

Route::get('/admin/users', function () {
    return "Ceci est la page users de la console
    d’administration";
});

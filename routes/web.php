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

Route::get('/', 'VoyagesController@index')->name('index');

Route::get('/voyages','VoyagesController@voyages')->name('voyages');

Route::get('/voyages/{voyage}','VoyagesController@show')->name('voyage');

Route::get('/a_propos', 'StaticPageController@about')->name('about');

Route::get('/admin/voyage', function () {
    return " Ceci est la page qui affichera les
    informations concernant l’entreprise";
});

Route::get('/admin', function () {
    return view('admin/admin_index');
});

// Route::get('/admin/add-new-post', function(){
//     return view('admin/new_posts');
// })->name('newpost');

Route::get('/coucou', function(){
    return 'coucou';
});

Route::get('/admin/add-new-post', 'PostController@create')->name('newPost');
Route::post('/admin/add-new-post', 'PostController@store')->name('addPost');
Route::get('/admin/update-post/{voyage}', 'PostController@show')->name('showPost');
Route::post('/admin/update-post/{voyage}', 'PostController@update')->name('updatePost');
Route::get('/admin/tables/{voyage}', 'PostController@destroy')->name('deletePost');
Route::get('/admin/tables', 'PostController@index')->name('tables');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

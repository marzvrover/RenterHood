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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::view('/search', 'search')->name('search');
Route::view('/about', 'about')->name('about');
Route::view('/add', 'item/add')->name('add');

Route::get('/users', function () {
    if (Auth::check()) return Redirect::route('users.show', Auth::user());
    else abort(404);
});
Route::resource('users', 'UserController')->only(['show', 'edit', 'update', 'destroy']);

Route::resource('items', 'ItemController');

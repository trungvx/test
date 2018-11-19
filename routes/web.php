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

Route::middleware(['auth'])->prefix('blog')->name('blog.')->group(function () {
    Route::get('create', 'Blog\BlogController@create')->name('create');
    Route::get('edit/{blog}', 'Blog\BlogController@edit')->name('edit');

    Route::post('store', 'Blog\BlogController@store')->name('store');
    Route::post('update', 'Blog\BlogController@update')->name('update');
    Route::post('delete/{blog}', 'Blog\BlogController@delete')->name('delete');
});

Route::prefix('blog')->name('blog.')->group(function () {
    Route::get('home', 'Blog\BlogController@home')->name('home');
    Route::get('show/{blog}', 'Blog\BlogController@show')->name('show');
});
Route::get('/', function () {
    return redirect()->route('blog.home');
});

Auth::routes();


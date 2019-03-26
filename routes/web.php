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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/posts','PostsController@index')->name('allarticles');


Route::get('/posts/create','PostsController@create')->name('AddArticle');

Route::post('/posts','PostsController@store');


Route::get('/posts/edit/{id}','PostsController@edit')->name('EditArticle');

Route::post('/posts/edit/{id}','PostsController@update');

//Route::get('/posts/edit/{id}','PostsController@update');

Route::delete('/posts/delete/{id}','PostsController@destroy')->name('DeleteArticle');

Route::get('/', function () {
    return view('home');
});
//Route::get('/logout', '/home')->name('home');
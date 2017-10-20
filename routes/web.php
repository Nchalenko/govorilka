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
Route::get('/posts/create', 'PostController@create');

Route::get('/', 'HomeController@index')->name('home');
Route::get('/article', 'HomeController@article')->name('post');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/contact', 'HomeController@about')->name('about');
Route::get('/uploader', 'HomeController@uploader')->name('uploader');
Route::post('/save_image', 'HomeController@save_image')->name('save_image');


Route::get('/posts', 'PostController@index');

Route::get('/posts/{post}', 'PostController@show');


Route::post('/posts', 'PostController@store');

Route::post('/posts/{post}/edit', 'PostController@show');

Route::delete('/posts/{post}', 'PostController@delete');

//Route::post('/posts/{post}/comment', 'CommentsController@store');

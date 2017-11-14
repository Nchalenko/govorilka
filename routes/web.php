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

Route::get('/article', 'HomeController@article')->name('post');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/contact', 'ContactController@index')->name('contact');
Route::post('/contact', 'ContactController@create')->name('post_contact');
Route::post('/save_image', 'HomeController@save_image')->name('save_image');

Route::get('/posts', 'PostController@index');
Route::post('/posts', 'PostController@store');

Route::get('/posts/{post}', 'PostController@show');

Route::post('/posts/{post}/comment', 'CommentController@comment')->name('comment');

Route::post('/posts/{post}/edit', 'PostController@show');

Route::delete('/posts/{post}', 'PostController@delete');
Route::get('/', 'PostController@index')->name('home');

//Route::post('/posts/{post}/comment', 'CommentsController@store');

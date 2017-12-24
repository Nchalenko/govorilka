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
Route::get('/admin/posts/create', 'PostController@create')->middleware('admin');;

Route::get('/article', 'HomeController@article')->name('post');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/contact', 'ContactController@index')->name('contact');
Route::post('/contact', 'ContactController@create')->name('post_contact');
Route::post('/save_image', 'HomeController@save_image')->name('save_image');

Route::get('/posts', 'PostController@index');
Route::post('/posts', 'PostController@store')->name('store');

Route::get('/posts/{post}', 'PostController@show');

Route::post('/posts/{post}/comment', 'CommentController@comment')->name('comment');
Route::get('/posts/{post}/change_status', 'PostController@change_status')->name('change_status');

Route::get('/posts/{post}/edit', 'PostController@edit')->name('post_edit');

Route::delete('/posts/{post}', 'PostController@delete');
Route::get('/', 'PostController@index')->name('home');

Route::get('/admin', 'AdminController@index')->name('admin')->middleware('admin');
Route::get('/admin/posts', 'AdminController@posts')->name('admin_posts')->middleware('admin');
Route::get('/admin/contacts', 'AdminController@contacts')->name('admin_contacts')->middleware('admin');
Route::get('/admin/contacts/{contact}/change_status', 'ContactController@change_status')->name('contact_change_status')->middleware('admin');

//Route::post('/posts/{post}/comment', 'CommentsController@store');

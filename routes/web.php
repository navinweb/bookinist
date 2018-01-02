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

//PAGES
Route::get('/', 'PagesController@home');
Route::get('about', 'PagesController@about');

//USERS
Route::get('users', 'UsersController@index');
Route::get('users/create', 'UsersController@create');
Route::post('users', 'UsersController@store');

//BOOKS
Route::get('books', 'BookController@index');
Route::get('books/create', 'BookController@create');
Route::post('books', 'BookController@store');
Route::get('books/{book_id}', 'BookController@show');

//COMMENTS
Route::post('comments/{book_id}', 'CommentController@store');

Auth::routes();

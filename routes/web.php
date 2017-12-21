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

Route::get('/', 'PagesController@home');

Route::get('about', 'PagesController@about');

Route::get('users', 'UsersController@index');
Route::get('users/create', 'UsersController@create');
Route::post('users', 'UsersController@store');

Route::get('books', 'BooksController@index');
Route::get('books/create', 'BooksController@create');
Route::post('books', 'BooksController@store');
Route::get('books/{book_id}', 'BooksController@show');


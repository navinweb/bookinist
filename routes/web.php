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


$stripe = resolve('App\Billing\Stripe');


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

//POSTS
Route::get('posts', 'PostController@index');
Route::get('posts/create', 'PostController@create');
Route::post('posts', 'PostController@store');
Route::get('posts/{post_id}', 'PostController@show');

//TAGS
Route::get('posts/tag/{tag}', 'TagsController@index');

Auth::routes();

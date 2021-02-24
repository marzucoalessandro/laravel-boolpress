<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'MyController@home')->name('home');
Route::get('about', 'MyController@about')->name('about');
Route::get('blog', 'MyController@blog')->name('blog');
Route::get('posts_api', 'MyController@posts_api')->name('posts_api');

Route::resource('posts', 'PostController');

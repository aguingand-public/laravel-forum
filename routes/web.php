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

Route::get('/', 'ThreadController@viewAll');
Route::get('/new_thread', 'ThreadController@createForm');

Route::get('/thread/{id}', 'ThreadController@viewOne')->name('thread');

Route::get('/thread/{id}/new_post', 'PostController@createForm')->name('new_post');
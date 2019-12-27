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

Route::get('/','FriendsController@index') -> name('top');
// Route::get('/search','FriendsController@search')-> name('search');

Route::resource('friends','FriendsController',['only'=>['create','store','show', 'edit', 'update','destroy']]);
Route::get('/friends/search', 'FriendsController@search')->name('friends.search');
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

Route::resource('friends','FriendsController',['only'=>['create','store']]);
Route::post('/friends/search', 'PostController@search')->name('friends.search');
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

Route::get('/','FriendsController@index')->name('top');

Route::get('/friends/search', 'FriendsController@search')->name('friends.search');
Route::get('/friends/list', 'FriendsController@list')->name('friends.list');
//Route::get('/friends/show', 'FriendsController@show')->name('friends.show');


Route::resource('friends','FriendsController',['only'=>['create','store','show', 'edit', 'update','destroy']]);
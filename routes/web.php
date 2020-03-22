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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function() {
    Route::get('news/creat', 'Admin\NewsController@add');
});

//kadai3
Route::group(['prefix' => 'user'], function() {
    Route::get('profile/creat', 'User\ProfileController@add');
});

//kadai4
Route::group(['prefix' => 'admin'], function() {
    Route::get('admin/profile/creat', 'Admin\ProfileController@add');
    Route::get('admin/profile/edit', 'Admin\ProfileController@edit');
});

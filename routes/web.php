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
Route::get('/home', 'Home\HomeController@index');



Route::group(['prefix' => 'movie'], function() {
    Route::get('/', 'Movie\MovieController@listForm');
    Route::get('/{id}', 'Movie\MovieController@index');
    //Route::get('/{id}', 'Movie\MovieController@editForm');
    Route::post('/{id}', 'Movie\MovieController@edit');
    Route::delete('/{id}', 'Movie\MovieController@delete');
});
Route::get('/movies', 'Movie\MovieController@list');

Route::group(['prefix' => 'category'], function() {
    Route::get('/{id}', 'Category\CategoryController@index');
});

Route::group(['middleware' => 'checkRole', 'prefix' => 'admin'], function() {
    Route::get('/', 'Admin\AdminController@index');

    Route::group(['prefix' => 'user'], function() {
        Route::get('/', 'User\UserController@index');
        Route::get('/{id}', 'User\UserController@editForm');
        Route::post('/{id}', 'User\UserController@edit');
        Route::delete('/{id}', 'User\UserController@delete');
    });
});


Auth::routes();


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

Route::group(array('prefix' => 'user'), function() {
    Route::get('/', 'User\UserController@index');
    Route::get('/{id}', 'User\UserController@editForm');
    Route::post('/{id}', 'User\UserController@edit');
    Route::delete('/{id}', 'User\UserController@delete');
});

Auth::routes();


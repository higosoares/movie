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

Route::get('/', 'Home\HomeController@index');
//Route::post('/checkLogin', 'Auth\LoginController@checkLogin');
//Route::post('/register', 'Auth\UserController@register');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


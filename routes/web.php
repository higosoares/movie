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
    Route::get('/', 'Movie\MovieController@index');
    Route::get('/{id}', 'Movie\MovieController@show');
});

Route::group(['prefix' => 'category'], function() {
    Route::get('/', 'Category\CategoryController@index')->name('category/index');
    Route::get('/{id}', 'Category\CategoryController@show')->name('category.show');
});

Route::group(['middleware' => 'checkRole', 'prefix' => 'admin'], function() {
    Route::get('/', 'Admin\AdminController@index');

    Route::group(['prefix' => 'user'], function() {
        Route::get('/', 'User\UserController@index')->name('user/index');
        Route::get('/registerForm', 'User\UserController@registerForm')->name('user/registerForm');
        Route::post('/', 'User\UserController@register')->name('user.register');
        Route::get('/editForm', 'User\UserController@editForm')->name('user/editForm');
        Route::put('/{id}', 'User\UserController@edit')->name('user.edit');
        Route::delete('/{id}', 'User\UserController@delete')->name('user.delete');
    });

    Route::group(['prefix' => 'profile'], function() {
        Route::get('/', 'Profile\ProfileController@index')->name('profile/index');
        Route::get('/registerForm', 'Profile\ProfileController@registerForm')->name('profile/registerForm');
        Route::post('/', 'Profile\ProfileController@register')->name('profile.register');
        Route::get('/editForm', 'Profile\ProfileController@editForm')->name('profile/editForm');
        Route::put('/{id}', 'Profile\ProfileController@edit')->name('profile.edit');
        Route::delete('/{id}', 'Profile\ProfileController@delete')->name('profile.delete');
    });

    Route::group(['prefix' => 'category'], function() {
        Route::get('/', 'Category\CategoryController@index')->name('category/index');
        Route::get('/{id}', 'Category\CategoryController@show')->name('category/show');
        Route::get('/registerForm', 'Category\CategoryController@registerForm')->name('category/registerForm');
        Route::post('/', 'Category\CategoryController@register')->name('category.register');
        Route::get('/editForm', 'Category\CategoryController@editForm')->name('category/editForm');
        Route::put('/{id}', 'Category\CategoryController@edit')->name('category.edit');
        Route::delete('/{id}', 'Category\CategoryController@delete')->name('category.delete');
    });

    Route::group(['prefix' => 'movie'], function() {
        Route::get('/', 'Movie\MovieController@index')->name('movie/index');
        Route::get('/{id}', 'Movie\MovieController@show')->name('movie/show');
        Route::get('/registerForm', 'Movie\MovieController@registerForm')->name('movie/registerForm');
        Route::post('/', 'Movie\MovieController@register')->name('movie.register');
        Route::get('/editForm', 'Movie\MovieController@editForm')->name('movie/editForm');
        Route::put('/{id}', 'Movie\MovieController@edit')->name('movie.edit');
        Route::delete('/{id}', 'Movie\MovieController@delete')->name('movie.delete');
    });
});


Auth::routes();


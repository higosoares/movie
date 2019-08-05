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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'movie'], function() {
    Route::get('/', 'Web\Movie\MovieController@index');
    Route::get('/{id}', 'Web\Movie\MovieController@show');
});

Route::group(['prefix' => 'category'], function() {
    Route::get('/', 'Web\Category\CategoryController@index')->name('admin/category/index');
    Route::get('/{id}', 'Web\Category\CategoryController@show')->name('admin/category/show');
});

Route::group(['middleware' => 'checkRole', 'prefix' => 'admin'], function() {
    Route::get('/', 'Web\Admin\AdminController@index');

    Route::group(['prefix' => 'user'], function() {
        Route::get('/', 'Web\Admin\AdminUser\UserController@index')->name('admin/user/index');
        Route::get('/registerForm', 'Web\Admin\User\UserController@registerForm')->name('admin/user/registerForm');
        Route::get('/editForm', 'Web\Admin\User\UserController@editForm')->name('admin/user/editForm');
    });

    Route::group(['prefix' => 'profile'], function() {
        Route::get('/', 'Web\Admin\Profile\ProfileController@index')->name('admin/profile/index');
        Route::get('/registerForm', 'Web\Admin\Profile\ProfileController@registerForm')->name('admin/profile/registerForm');
        Route::get('/editForm', 'Web\Admin\Profile\ProfileController@editForm')->name('admin/profile/editForm');
    });

    Route::group(['prefix' => 'category'], function() {
        Route::get('/', 'Web\Admin\Category\CategoryController@index')->name('admin/category/index');
        Route::get('/{id}', 'Web\Admin\Category\CategoryController@show')->name('admin/category/show');
        Route::get('/registerForm', 'Web\Admin\Category\CategoryController@registerForm')->name('admin/category/registerForm');
        Route::get('/{id}', 'Web\Admin\Category\CategoryController@editForm')->name('admin/category/editForm');
    });

    Route::group(['prefix' => 'movie'], function() {
        Route::get('/', 'Web\Admin\Movie\MovieController@index')->name('admin/movie/index');
        Route::get('/{id}', 'Web\Admin\Movie\MovieController@show')->name('admin/movie/show');
        Route::get('/registerForm', 'Web\Admin\Movie\MovieController@registerForm')->name('admin/movie/registerForm');
        Route::get('/editForm', 'Web\Admin\Movie\MovieController@editForm')->name('admin/movie/editForm');
    });
});

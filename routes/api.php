<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(['middleware' => 'checkRoleApi', 'prefix' => 'admin'], function() {
    Route::group(['prefix' => 'user'], function() {
        Route::post('/', 'Api\Admin\User\UserController@register')->name('admin.user.register');
        Route::put('/{id}', 'Api\Admin\User\UserController@edit')->name('admin.user.edit');
        Route::delete('/{id}', 'Api\Admin\User\UserController@delete')->name('admin.user.delete');
    });

    Route::group(['prefix' => 'profile'], function() {
        Route::post('/', 'Api\Admin\Profile\ProfileController@register')->name('admin.profile.register');
        Route::put('/{id}', 'Api\Admin\Profile\ProfileController@edit')->name('admin.profile.edit');
        Route::delete('/{id}', 'Api\Admin\Profile\ProfileController@delete')->name('admin.profile.delete');
    });

    Route::group(['prefix' => 'category'], function() {
        Route::post('/', 'Api\Admin\Category\CategoryController@register')->name('admin.category.register');
        Route::put('/{id}', 'Api\Admin\Category\CategoryController@edit')->name('admin.category.edit');
        Route::delete('/{id}', 'Api\Admin\Category\CategoryController@delete')->name('admin.category.delete');
    });

    Route::group(['prefix' => 'movie'], function() {
        Route::post('/', 'Api\Admin\Movie\MovieController@register')->name('admin.movie.register');
        Route::put('/{id}', 'Api\Admin\Movie\MovieController@edit')->name('admin.movie.edit');
        Route::delete('/{id}', 'Api\Admin\Movie\MovieController@delete')->name('admin.movie.delete');
    });
});

<?php

use Illuminate\Http\Request;

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

Route::prefix('auth')->group(function () {
    // Below mention routes are public, user can access those without any restriction.
    // Create New User
    Route::post('register', 'AuthController@register');
    // Login User
    Route::post('login', 'AuthController@login');

    // Refresh the JWT Token
    Route::get('refresh', 'AuthController@refresh');

    // Below mention routes are available only for the authenticated users.
    Route::middleware('auth:api')->group(function () {
        // Get user info
        Route::get('user', 'AuthController@user');
        // Logout user from application
        Route::post('logout', 'AuthController@logout');

    });
});



// Posts
Route::prefix('posts')->group(function () {      // http://localhost:8000/api/posts/  Postman
    Route::get('/', 'PostController@index');
    Route::get('show/{id}', 'PostController@show');
        Route::middleware('auth:api')->group(function () {
            Route::post('add', 'PostController@store'); // http://localhost:8000/api/posts/add   Postman
            Route::get('edit/{id}', 'PostController@edit');
            Route::put('update/{id}', 'PostController@update');
            Route::delete('delete/{id}', 'PostController@destroy');
            Route::get('userPosts', 'PostController@getUserPosts'); // so müsste ich alle Posts von dem einen User sehen
            Route::get('userPosts/edit/{id}', 'PostController@editUserPost');
            Route::put('userPost/update/{id}', 'PostController@updateUserPost');
            Route::delete('userPost/delete/{id}', 'PostController@destroyUserPost');
            Route::post('userPost/add', 'PostController@storeUserPost');

        });

});

// Users
Route::prefix('users')->group(function () {
    Route::middleware('auth:api')->group(function () {
        Route::get('getUsers', 'UserController@index');
        Route::put('putUser', 'UserController@putUser');
        Route::get('getEmail', 'UserController@getEmail');
        Route::put('putEmail', 'UserController@putEmail');
        Route::put('putRole', 'UserController@putRole');
        Route::delete('delete/{id}', 'UserController@destroy');

    });
});

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

Route::prefix('/user')->group( function () {
    Route::get('/login', 'api\v1\login\PassportLoginController@login')->name('login');;
    Route::post('/register', 'api\v1\login\PassportLoginController@register');

    Route::middleware('auth:api')->group(function () {
        Route::get('/logout', 'api\v1\login\PassportLoginController@logout');
    });

});

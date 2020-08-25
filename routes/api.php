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

Route::prefix('v1')->group(function () {

    Route::prefix('admin')->group(function () {
        Route::get('/','API\AdminController@index');
        Route::get('/genre','API\GenreController@index');
        Route::get('/quality','API\QualityController@index');
        Route::get('/year','API\YearController@index');
        Route::get('/movie','API\MovieController@index');
        Route::get('/allmovie','API\MovieController@allmovie');
    });

});
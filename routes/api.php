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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('get_movies', 'MovieController@get_all_data');
Route::post('get_movie_by_category', 'MovieController@get_data_by_genre');
Route::post('get_movie_by_tag', 'MovieController@get_data_by_tag');
Route::post('get_users', 'UserController@get_data');
Route::post('get_user_with_detail', 'UserController@get_data_with_detail');

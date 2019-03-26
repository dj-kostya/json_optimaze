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

Route::get('users', 'ApiController@users');
Route::get('users_debug', 'ApiController@users_debug');
Route::get('users_debug_v2', 'ApiController@users_debug_v2');

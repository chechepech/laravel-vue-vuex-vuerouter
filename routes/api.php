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

Route::get('/', 'ListingController@getHomeApi');
Route::get('/saved', 'ListingController@getHomeApi');
Route::get('listing/{listing}', 'ListingController@getApi');
Route::post('/user/toggle_saved', 'UserController@toggle_saved')->middleware('auth:api');
<?php

use Illuminate\Support\Facades\Route;
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

// Route::get('/', function () {
//     return view('app');
// });

// Route::get('/listing/{listing}', function(Listing $listing) {
// 	$model = $listing->toArray();
//   return view('app',['model' => $model]);
// });

Auth::routes();
Route::get('/', 'ListingController@getHome');
Route::get('/saved', 'ListingController@getHome')->middleware('auth');
Route::get('listing/{listing}', 'ListingController@getWeb');
//Route::get('/home', 'HomeController@index')->name('home');

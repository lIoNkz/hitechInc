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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::resource('photos', 'PhotoAPIController');

Route::resource('advantages', 'AdvantageAPIController');

Route::resource('reviews', 'ReviewAPIController');

Route::resource('textblocks', 'TextblockAPIController');

Route::resource('siteprices', 'SitepriceAPIController');
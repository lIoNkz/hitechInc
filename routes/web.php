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

// ROUTES ON TOP MENU LINKS IN HEADER
Route::get('/', 'FrontendController@index');
Route::get('/about', 'FrontendController@about');
Route::get('/contacts', 'FrontendController@contacts');
Route::get('/order', 'FrontendController@order');
Route::get('/portfolio', 'FrontendController@portfolio');
Route::get('/testimonials', 'FrontendController@review');
Route::get('/services', 'FrontendController@services');

// ROUTES ON SUBMENU LINKS IN HEADER 

Route::get('/dev-sites', 'FrontendController@devSites');
Route::get('/dev-po', 'FrontendController@devPO');
Route::get('/dev-mobile-apps', 'FrontendController@devMobileApps');
Route::get('/seo', 'FrontendController@seo');
Route::get('/tech-support', 'FrontendController@techSupport');


// ROUTES OF ADMIN PANEL
Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('photos', 'PhotoController');
Route::resource('advantages', 'AdvantageController');
Route::resource('reviews', 'ReviewController');
Route::resource('textblocks', 'TextblockController');
Route::resource('siteprices', 'SitepriceController');

//Delete image from advantage
Route::delete('/destroy-advantage-photo-from-here//{id}', 'PhotoController@destroy_advantage')->name('destroy_advantage');
// Image upload

Route::post('/upload-images-to-the-server', 'PhotoController@upload')->name('upload');
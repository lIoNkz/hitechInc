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

Route::get('/razrabotka-saitov', 'FrontendController@devSites');
Route::get('/razrabotka-po', 'FrontendController@devPO');
Route::get('/razrabotka-mobilnyh-prilozhenii', 'FrontendController@devMobileApps');
Route::get('/seo', 'FrontendController@seo');
Route::get('/tech-support', 'FrontendController@techSupport');

// ROUTES TO SEPARATE PAGE OF SITETYPES
Route::prefix('razrabotka-saitov')->group(function () {
	Route::get('/landing-page', 'FrontendController@lp');
	Route::get('/business-site', 'FrontendController@corpsite');
	Route::get('/site-vizitka', 'FrontendController@siteVizitka');
	Route::get('/internet-magazin', 'FrontendController@onlineshop');
	Route::get('/site-catalog', 'FrontendController@siteCatalog');
});

Route::prefix('seo')->group(function () {
	Route::get('/google-adwords', 'FrontendController@adwords');
	Route::get('/yandex-direct', 'FrontendController@yandex');
	Route::get('/optimizacia-saita', 'FrontendController@optimization');
	Route::get('/prodvizhenie-saita', 'FrontendController@prodvizhenie');
	Route::get('/contextnoe-prodvizhenie', 'FrontendController@context');
	Route::get('/youtube', 'FrontendController@youtube');
	Route::get('/instagram', 'FrontendController@instagram');
});

// ROUTES ON FOOTER LINKS IN HEADER

Route::get('/shymkent', 'FrontendController@shymkent');
Route::get('/almaty', 'FrontendController@almaty');
Route::get('/astana', 'FrontendController@astana');

// OTHER ROUTES

Route::get('/mission', 'FrontendController@mission');
Route::get('/team', 'FrontendController@team');
Route::get('/razrabotka-logotipa', 'FrontendController@logoDev');
Route::get('/individual-design', 'FrontendController@individualDes');

// ROUTES OF ADMIN PANEL
Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('photos', 'PhotoController');
Route::resource('advantages', 'AdvantageController');
Route::resource('reviews', 'ReviewController');
Route::resource('textblocks', 'TextblockController');
Route::resource('siteprices', 'SitepriceController');
Route::resource('metatags', 'MetatagController');
// Search by filter

Route::get('/admin/metatags-search-by-url', 'HomeController@search');

//Delete image from advantage
Route::delete('/destroy-advantage-photo-from-here//{id}', 'PhotoController@destroy_advantage')->name('destroy_advantage');
// Image upload

Route::post('/upload-images-to-the-server', 'PhotoController@upload')->name('upload');



Route::resource('breadcrumbs', 'BreadcrumbController');
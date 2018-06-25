<?php

// ROUTES ON TOP MENU LINKS IN HEADER

/*Route::get('/about', 'FrontendController@about');
Route::get('/contacts', 'FrontendController@contacts');
Route::get('/order', 'FrontendController@order');
Route::get('/portfolio', 'FrontendController@portfolio');
Route::get('/testimonials', 'FrontendController@review');
Route::get('/services', 'FrontendController@services');
Route::get('/blog', 'FrontendController@blog');
Route::get('/blog/{id}', 'FrontendController@blog_post');

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
Route::get('/reklama-v-socsetyah', 'FrontendController@socialAdv');*/



Route::get('/', 'FrontendController@index');

// DYNAMIC ROUTING

Route::get('/{slug}','FrontendController@dynamic');
Route::get('/{slug}/{category}','FrontendController@dynamic_2');



// ROUTES MAIL 

Route::post('/order/sendmail', 'FrontendController@mail_order')->name('mail_order');
Route::post('/order/sendmail2', 'FrontendController@mail_textToUs')->name('mail_textToUs');

// ROUTES OF ADMIN PANEL
Auth::routes();


Route::group(['prefix' => 'admin/panel',  'middleware' => 'auth'], function() {
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
	Route::resource('articles', 'ArticleController');
	Route::resource('works', 'WorkController');
	Route::resource('urls', 'UrlController');

});

<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Home Routes
Route::get('/', [
    'as' => 'frontend', 'uses' => 'NewsController@showRecent'
]);

Route::get('/search', [
    'as' => 'inquiry.frontend2', 'uses' => 'BookingController@inquiry'
]);

Route::post('/search' , [
    'as' => 'inquiry.storeatas', 'uses' => 'BookingController@inquirysearch'
]);

// Inquiry Routes
Route::get('/inquiry/{slug}', [
    'as' => 'inquiry.frontend_atas', 'uses' => 'BookingController@inquiry'
]);

Route::post('/inquiry/{slug}' , [
    'as' => 'inquiry.storeatas', 'uses' => 'BookingController@inquiry_store'
]);

// Inquiry Routes
Route::get('/inquiry/{slug}', [
    'as' => 'inquiry.frontend', 'uses' => 'BookingController@inquiry'
]);

Route::post('/inquiry/{slug}' , [
    'as' => 'inquiry.store', 'uses' => 'BookingController@inquiry_store'
]);

// Destination Routes
Route::get('/destination', [
    'as' => 'frontend.destination', 'uses' => 'DestinationController@showAll'
]);

Route::get('/destination/{slug}', [
    'as' => 'frontend.destination.single', 'uses' => 'DestinationController@single'
]);

// Charter Routes
Route::get('/charters/luxury-yatch', [
    'as' => 'charters.frontend', 'uses' => 'ChartersController@luxury'
]);

Route::get('/charters/luxury-yatch/{slug}', [
    'as' => 'charters.frontend', 'uses' => 'ChartersController@luxurysingle'
]);

Route::get('/charters/wood-motor-sail', [
    'as' => 'charters.frontend', 'uses' => 'ChartersController@wood'
]);

Route::get('/charters/wood-motor-sail/{slug}', [
    'as' => 'charters.frontend', 'uses' => 'ChartersController@woodsingle'
]);

Route::get('/charters/phinisi-schooner', [
    'as' => 'charters.frontend', 'uses' => 'ChartersController@phinschoon'
]);

Route::get('/charters/phinisi-schooner/{slug}', [
    'as' => 'charters.frontend', 'uses' => 'ChartersController@phinschoonsingle'
]);

Route::get('/charters/motor-yacth', [
    'as' => 'charters.frontend', 'uses' => 'ChartersController@motor'
]);

Route::get('/charters/motor-yacth/{slug}', [
    'as' => 'charters.frontend', 'uses' => 'ChartersController@motorsingle'
]);

Route::get('/charters/wooden-schooner', [
    'as' => 'charters.frontend', 'uses' => 'ChartersController@schoon'
]);

Route::get('/charters/wooden-schooner/{slug}', [
    'as' => 'charters.frontend', 'uses' => 'ChartersController@schoonsingle'
]);

Route::get('/charters/commercial', [
    'as' => 'charters.frontend', 'uses' => 'ChartersController@commercial'
]);

Route::get('/charters/commercial/{slug}', [
    'as' => 'charters.frontend', 'uses' => 'ChartersController@commercialsingle'
]);


// News Routes
Route::get('/news', [
    'as' => 'news.frontend', 'uses' => 'NewsController@showAll'
]);

Route::get('/news/{slug}', [
    'as' => 'news.frontend.single', 'uses' => 'NewsController@showSingle'
]);

Route::post('/news/{slug}', [
    'as' => 'news.frontend.single', 'uses' => 'NewsController@comment'
]);

// Contact Routes
Route::get('/contact', [
    'as' => 'contact', 'uses' => 'ContactController@getIndex'
]);

Route::post('/contact', [
     'as' => 'contact', 'uses' => 'ContactController@postIndex'
]);


// BACKEND ROUTES
Route::group(['middleware' => 'auth'], function () {
    //Dashboard
    Route::get('/admin', [
    'as' => 'dashboard', 'uses' => 'DashboardController@index'
    ]);

    //News

    Route::get('/admin/news/create', [
        'as' => 'news.create', 'uses' => 'NewsController@create'
    ]);

    Route::get('/admin/news', [
        'as' => 'news', 'uses' => 'NewsController@index'
    ]);


    Route::post('/admin/news/store', [
        'as' => 'news.store', 'uses' => 'NewsController@store'
    ]);

    Route::get('/admin/news/edit/{id}', array('as' => 'news.edit', 'uses' => 'NewsController@edit'));

    Route::post('/admin/news/update/{id}', [
        'as' => 'news.update', 'uses' => 'NewsController@update'
    ]);

    Route::get('/admin/news/category/create', [
        'as' => 'news.category.create', 'uses' => 'NewsController@createCategory'
    ]);

    Route::get('/admin/news/category', [
        'as' => 'news.category', 'uses' => 'NewsController@indexCategory'
    ]);

    Route::post('/admin/news/category/store', [
        'as' => 'news.category.store', 'uses' => 'NewsController@storeCategory'
    ]);

    Route::resource('news.category.store', 'NewsController@storeCategory');

    Route::resource('/admin/news/delete','NewsController@destroy');

    Route::get('/admin/api/news', array('as'=>'api.news', 'uses'=>'NewsController@getDatatable'));

    Route::get('/admin/api/news/category', array('as'=>'api.news.category', 'uses'=>'NewsController@getDatatableCategory'));
});

    // Booking

    Route::get('/admin/booking', [
        'as' => 'booking', 'uses' => 'BookingController@index'
    ]);

    Route::get('/admin/booking/edit/{id}', array('as' => 'news.edit', 'uses' => 'BookingController@edit'));

    Route::post('/admin/booking/update/{id}', [
        'as' => 'booking.update', 'uses' => 'BookingController@update'
    ]);

    Route::resource('/admin/booking/delete','BookingController@destroy');

    Route::get('/admin/api/booking', array('as'=>'api.booking', 'uses'=>'BookingController@getDatatable'));

    // Charters

    Route::get('/admin/charters', [
        'as' => 'charters', 'uses' => 'ChartersController@index'
    ]);

    Route::get('/admin/charters/create', [
        'as' => 'charters.create', 'uses' => 'ChartersController@create'
    ]);

    Route::get('/admin/charters/location/create', [
        'as' => 'charters.location.create', 'uses' => 'ChartersController@createCategory'
    ]);

    Route::get('/admin/charters/location', [
        'as' => 'charters.location', 'uses' => 'ChartersController@indexCategory'
    ]);

    Route::post('/admin/charters/store', [
        'as' => 'charters.store', 'uses' => 'ChartersController@store'
    ]);

    Route::post('/admin/charters/location/store', [
        'as' => 'charters.location.store', 'uses' => 'ChartersController@storeCategory'
    ]);

    Route::resource('charters.location.store', 'ChartersController@storeCategory');

    Route::get('/admin/charters/edit/{id}', array('as' => 'charters.edit', 'uses' => 'ChartersController@edit'));

    Route::post('/admin/charters/update/{id}', [
        'as' => 'charters.update', 'uses' => 'ChartersController@update'
    ]);

    Route::resource('/admin/charters/delete','ChartersController@destroy');

    Route::get('/admin/api/charters', array('as'=>'api.charters', 'uses'=>'ChartersController@getDatatable'));

    Route::get('/admin/api/charters/location', array('as'=>'api.charters.location', 'uses'=>'ChartersController@getDatatableCategory'));

// Destination

    Route::get('/admin/destination', [
        'as' => 'destination', 'uses' => 'DestinationController@index'
    ]);

    Route::get('/admin/destination/create', [
        'as' => 'destination.create', 'uses' => 'DestinationController@create'
    ]);

    Route::post('/admin/destination/store', [
        'as' => 'destination.store', 'uses' => 'DestinationController@store'
    ]);

    Route::get('/admin/destination/edit/{id}', array('as' => 'destination.edit', 'uses' => 'DestinationController@edit'));

    Route::post('/admin/destination/update/{id}', [
        'as' => 'destination.update', 'uses' => 'DestinationController@update'
    ]);

    Route::resource('/admin/destination/delete','DestinationController@destroy');

    Route::get('/admin/api/destination', array('as'=>'api.destination', 'uses'=>'DestinationController@getDatatable'));


    // Testimonial

    Route::get('/admin/testimonial', [
        'as' => 'testimonial', 'uses' => 'TestimonialController@index'
    ]);

    Route::get('/admin/testimonial/create', [
        'as' => 'testimonial.create', 'uses' => 'TestimonialController@create'
    ]);

    Route::post('/admin/testimonial/store', [
        'as' => 'testimonial.store', 'uses' => 'TestimonialController@store'
    ]);

    Route::get('/admin/testimonial/edit/{id}', array('as' => 'testimonial.edit', 'uses' => 'TestimonialController@edit'));

    Route::post('/admin/testimonial/update/{id}', [
        'as' => 'testimonial.update', 'uses' => 'TestimonialController@update'
    ]);

    Route::resource('/admin/testimonial/delete','TestimonialController@destroy');

    Route::get('/admin/api/testimonial', array('as'=>'api.testimonial', 'uses'=>'TestimonialController@getDatatable'));

    // Users

    Route::get('/admin/users/create', [
        'as' => 'users.create', 'uses' => 'UsersController@create'
    ]);

    Route::get('/admin/users', [
        'as' => 'users', 'uses' => 'UsersController@index'
    ]);


    Route::post('/admin/users/store', [
        'as' => 'users.store', 'uses' => 'UsersController@store'
    ]);

    Route::get('/admin/users/edit/{id}', array('as' => 'users.edit', 'uses' => 'UsersController@edit'));

    Route::post('/admin/users/update/{id}', [
        'as' => 'users.update', 'uses' => 'UsersController@update'
    ]);

    Route::resource('/admin/users/delete','UsersController@destroy');

    Route::get('/admin/api/users', array('as'=>'api.users', 'uses'=>'UsersController@getDatatable'));

    // Settings
    Route::get('/admin/settings', [
        'as' => 'settings', 'uses' => 'SettingsController@index'
    ]);

      Route::post('/admin/settings/update', [
        'as' => 'settings.update', 'uses' => 'SettingsController@update'
    ]);

      Route::post('/admin/settings/update', [
        'as' => 'settings.site', 'uses' => 'SettingsController@updatesite'
    ]);

// AUTH ROUTES
Route::controllers
([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

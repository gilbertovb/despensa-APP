<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/register/verify/{confirmationCode}', [
    'as' => 'confirmation_path',
    'uses' => 'VerifyController@confirm'
]);*/

Route::get('/register/verify/{confirmatioCode}','VerifyController@confirm');
// Migration
//Route::get('/migration/install/{id}','VerifyController@migration_install');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/oquee', function(){
        return view('oquee');
    });

//    Route::get('/home', 'HomeController@index');
    // Profile
    Route::get('/profile', 'ProfileController@index');
    Route::post('/profile', 'ProfileController@update');
    // Products
    Route::get('/products', 'ProductController@index');
    Route::get('/products/create', 'ProductController@create');
    Route::post('/products/create', 'ProductController@store');
    Route::get('/products/{id}/edit', 'ProductController@edit');
    Route::post('/products/{id}/save', 'ProductController@update');
    Route::get('/products/{id}', 'ProductController@show');
    Route::get('/products/{id}/delete', 'ProductController@delete');
    // Units
    Route::get('/units', 'UnitController@index');
    Route::get('/units/create', 'UnitController@create');
    Route::post('/units/create', 'UnitController@store');
    Route::get('/units/{id}/edit', 'UnitController@edit');
    Route::post('/units/{id}/save', 'UnitController@update');
    Route::get('/units/{id}', 'UnitController@show');
    Route::get('/units/{id}/delete', 'UnitController@delete');
    //Stock
    Route::get('/stock', 'StockController@index');
    Route::get('/stock/create', 'StockController@create');
    Route::post('/stock/create', 'StockController@store');
    Route::get('/stock/{id}/edit', 'StockController@edit');
    Route::post('/stock/{id}/save', 'StockController@update');
    Route::get('/stock/{id}', 'StockController@show');
    Route::get('/stock/{id}/delete', 'StockController@delete');
    //Buy
    Route::get('/buy','BuyController@index');
    Route::get('/buy/{id}/edit','BuyController@edit');
    Route::post('/buy/{id}/save','BuyController@update');
    // Consume
    Route::get('/consume','ConsumeController@index');
    Route::get('/consume/{id}/edit','ConsumeController@edit');
    Route::post('/consume/{id}/save','ConsumeController@update');
        
});

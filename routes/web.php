<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function () {
    return "ini halaman about";
});

Route::get('contact', function () {
    return "ini halaman contact";
});

Route::get('shippers', 'ShipperController@index');

Route::post('shippers', 'ShipperController@store');

Route::get('shippers/add','ShipperController@create');

Route::get('shippers/{id}','ShipperController@show');

Route::put('shippers/{id}','ShipperController@update');

Route::delete('shippers/{id}/delete','ShipperController@delete');

Route::get('shippers/{id}/edit','ShipperController@edit');

Route::resource('product','ProductController');



Auth::routes();

Route::get('/home', 'HomeController@index');

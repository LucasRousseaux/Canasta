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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


Route::get('/stores','StoresController@list');  // Browse Stores List View
Route::get('/products','ProductsController@list');  // Browse Products List View
Route::get('/cart','CartController@list');  // Browse Cart Products List View
Route::get('/search','SearchController@list');  // Search Products List View
Route::get('/products','ProductsController@view');  // Search Products List View

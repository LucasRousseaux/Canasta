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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/stores','StoreController@list');  // Browse Stores List View
Route::get('/products','ProductController@list');  // Browse Products List View
Route::get('/selections','SelectionController@list');  // Browse Selected Products List View
Route::get('/address','AddressController@options');  // Browse Address Options List View
Route::get('/delivery','DeliveryController@options');  // Browse Delivery Options List View
Route::get('/payment','PaymentController@options');  // Browse Payment Options List View
Route::get('/confirmation','ConfirmationController@action');  // Confirmation View
Route::get('/searchall','SearchAllController@listlits');  // Search All List View
Route::get('/searchstore','SearchStoreController@view');  // Search Store List View

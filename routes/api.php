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



Route::post('login', 'WebServiceController@userLogin');
Route::post('registration', 'WebServiceController@registration');
Route::post('listCelebrity', 'WebServiceController@listCelebrity');
Route::post('DetailsCelebrity', 'WebServiceController@DetailsCelebrity');
Route::post('getBooking', 'WebServiceController@getBooking');
Route::post('customerlogin', 'WebServiceController@customerlogin');
Route::post('verifyotp', 'WebServiceController@verifyotp');
Route::post('resendotp', 'WebServiceController@resendotp');
Route::post('shoeBooking', 'WebServiceController@shoeBooking');

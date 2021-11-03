
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

/*Route::get('/', function () {
    return view('welcome');

});*/
/*for update*/

Auth::routes();

Route::get('/','PublicController@getHome');
Route::get('/contact','PublicController@contact');
Route::get('/gallery','PublicController@gallery');
Route::get('logout', 'Auth\LoginController@logout');



Route::get('changepassword', 'PublicController@getPassword');
Route::post('changepassword', 'PublicController@postchangePassword');
Route::post('signup', 'PublicController@signup');
Route::post('sendOtp', 'PublicController@sendOtp');
Route::post('login', 'PublicController@login');


Route::get('/login', function () {
    return view('auth.login');
});


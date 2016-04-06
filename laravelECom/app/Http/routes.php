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

Route::get('/', 'HomeController@index');

Route::auth();

Route::get('/home', 'HomeController@index');

// Api
Route::group(array('prefix' => 'api'),function(){
	Route::resource('categories','categoryApiController',[
		'only'=>['index']]);
	Route::resource('products','productApiController',[
		'only'=>['index']]);
});

// Admin
Route::group(array('prefix' => 'admin'),function(){
	Route::get('/','adminLoginController@index');
	Route::post('/login','adminLoginController@login');
	Route::post('/logout','adminLoginController@logout');
});
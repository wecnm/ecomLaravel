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

Route::get('/product/{id}','HomeController@product');

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
	Route::get('/logout','adminLoginController@logout');
	Route::get('/main','adminProductListController@main');
	Route::get('/new','adminProductListController@newProduct');

	Route::post('/main','adminProductListController@edit');
	Route::post('/new','adminProductListController@create');
	Route::post('/update','adminProductListController@update');
});

Route::group(array('prefix'=>'cart'),function(){
	Route::get('/','cartController@index');
	Route::post('/','cartController@create');
	Route::post('checkout','cartController@posthandler');
	Route::get('checkout',function(){
		return view('checkout');
	});
});
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
Route::group([
	'middleware' => ['api', 'cors'],
], function ($router) {
	// Category
	Route::get('category', 'CategoryController@index');
	Route::get('category/edit/{id}', 'CategoryController@edit');
	Route::post('category', 'CategoryController@store');
	Route::post('category/{id}', 'CategoryController@update');
	Route::get('category/{id}', 'CategoryController@destroy');
	// News
	Route::get('news', 'NewsController@index');
	Route::get('news/edit/{id}', 'NewsController@edit');
	Route::post('news', 'NewsController@store');
	Route::post('news/{id}', 'NewsController@update');
	Route::get('news/{id}', 'NewsController@destroy');
		
});
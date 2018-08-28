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

Route::group(['prefix'=>'admin','middleware'=>['auth','admin']], function(){

	Route::get('/',function(){
		return view('admin.index');
	})->name('admin.inicio');

	Route::resource('business','BusinessController');
	Route::get('business/{id}/destroy',[
		'uses'=>'BusinessController@destroy',
		'as'=>'business.destroy'
	]);

	Route::resource('users','UsersController');
	Route::get('users/{id}/destroy',[
		'uses'=>'UsersController@destroy',
		'as'=>'users.destroy'
	]);

	Route::resource('courts','CourtsController');
	Route::get('court/{id}/destroy',[
		'uses'=>'CourtsController@destroy',
		'as'=>'court.destroy'
	]);

	Route::resource('turns','TurnsController');
	Route::get('turn/{id}/destroy',[
		'uses'=>'TurnsController@destroy',
		'as'=>'turn.destroy'
	]);


});



Route::get('/', 'HomeController@index');

Auth::routes();
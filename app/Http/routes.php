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

Route::get('/', function () {
    return view('welcome');
});



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

Route::group(['middleware' => ['web']], function () {
    Route::get('form','Student@getForm');
	Route::post('insert','Student@store');
	Route::get('show','Student@show');
	Route::get('delete/{id}','Student@delete');
	Route::get('editform/{id}','Student@getEditForm');
	Route::post('update/{id}','Student@update');

	// Route Gambar
	Route::get('image/form','Gambar@getForm');	
	Route::post('image/insert','Gambar@store');
});

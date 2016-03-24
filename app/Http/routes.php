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
	Route::get('delete/{username}','Student@delete');
	Route::get('editform/{username}','Student@getEditForm');
	Route::post('update/{id}','Student@update');

	Route::get('coba','Openfire@coba');
	route::get('layout','Gambar@layout');
	route::get('layout2','Gambar@layout2');

	// Route Gambar
	Route::get('image/form','Gambar@getForm');	
	Route::post('image/insert','Gambar@store');
	Route::get('image','Gambar@showimg');
	Route::get('image/{id}','Gambar@tampil');
});

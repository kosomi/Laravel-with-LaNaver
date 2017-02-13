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

Auth::routes(); 

Route::get('/',   						'ArticlesController@index');

Route::get('about',  					'ArticlesController@about'); 
Route::get('contact',  					'ArticlesController@contact');
 
Route::post('article', 		 			'ArticlesController@store'); 

Route::get('app',   					'ArticlesController@app');
Route::get('create',  					'ArticlesController@create');
Route::get('edit/{id}',   				'ArticlesController@edit');
Route::patch('edit/{id}', 				'ArticlesController@update'); 

Route::get('home', 						'ArticlesController@index'); 
Route::get('show/{id}',  				'ArticlesController@show');
Route::get('delete/{id}',  				'ArticlesController@destroy');

 
Route::post('comments/{id}', 			'CommentsController@store');  
Route::post('replies/{id}', 			'ReplyController@store'); 


Route::get('stores',  					'StoresController@index');
Route::get('store/{id}',  				'StoresController@show');

Route::get('stores/add',  				'StoresController@create');
Route::post('stores/add', 		 		'StoresController@store'); 
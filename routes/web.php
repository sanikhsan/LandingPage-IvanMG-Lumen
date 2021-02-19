<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

//Landing Page
Route::get('/', ['as'=>'landing', 'uses'=>'LandingController@index']);
// Route::get('/article', ['as'=>'article', 'uses'=>'LandingController@article']);
Route::get('/about', ['as'=>'landabout', 'uses'=>'LandingController@about']);
Route::get('/service-ipal', ['as'=>'service-ipal', 'uses'=>'LandingController@serviceipal']);
Route::get('/service-interior', ['as'=>'service-interior', 'uses'=>'LandingController@serviceinterior']);
Route::get('/contact', ['as'=>'landcontact', 'uses'=>'LandingController@contact']);



// Error Code
Route::get('/403', ['as'=>'403', 'uses'=>'Controller@E403'] );
Route::get('/404', ['as'=>'404', 'uses'=>'Controller@E404'] );
Route::get('/500', ['as'=>'500', 'uses'=>'Controller@E500'] );
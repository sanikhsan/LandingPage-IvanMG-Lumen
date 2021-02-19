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

/* Route AUTH */
Route::post('/admin/login', 'AuthController@auth');
Route::get('/admin', ['as'=>'auth', 'uses'=>'AuthController@adminLogin']);
Route::get('/admin/logout', 'AuthController@adminLogout');

/* Route Dashboard*/
Route::get('/admin/home', ['as'=>'home', 'uses'=>'AdminController@home']);
Route::post('admin/home/update', 'AdminController@update');

/* Route Sites Page*/
Route::get('/admin/sites', ['as'=>'sites', 'uses'=>'SitesController@sites']);
Route::post('/admin/sites/update', ['as'=>'sitesupdate', 'uses'=>'SitesController@update']);

/* Route SEO Page*/
Route::get('/admin/seo', ['as'=>'seo', 'uses'=>'SeoController@seo']);
Route::post('/admin/seo/update', ['as'=>'seoupdate', 'uses'=>'SeoController@update']);

/* Route Content Page*/
Route::get('/admin/artikel-ipal', ['as'=>'art-ipal', 'uses'=>'ArtikelController@ipal']);
Route::get('/admin/artikel-interior', ['as'=>'art-interior', 'uses'=>'ArtikelController@interior']);

/* Route Galeri Interior Page*/
Route::get('/admin/interior', ['as'=>'interior', 'uses'=>'InteriorController@index']);
Route::post('/admin/interior/upload', 'InteriorController@upload');
Route::get('/admin/interior/hapus/{id}', 'InteriorController@hapus');

/* Route Galeri IPAL Page*/
Route::get('/admin/ipal', ['as'=>'ipal', 'uses'=>'IpalController@index']);
Route::post('/admin/ipal/upload', 'IpalController@upload');
Route::get('/admin/ipal/hapus/{id}', 'IpalController@hapus');

/* Route Gambar Besar (Carousel)*/
Route::get('/admin/carousel', ['as'=>'carousel', 'uses'=>'CarouselController@index']);
Route::post('/admin/carousel/upload', 'CarouselController@upload');
Route::get('/admin/carousel/hapus/{id}', 'CarouselController@hapus');
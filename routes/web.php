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



Route::get('/','NewspaperWelcome@index');

Route::get('/jatio','Front_end\CategoryController@jatio')->name('/jatio');
Route::get('/antarjatik','Front_end\CategoryController@antarjatik')->name('/antarjatik');
Route::get('/chadpur','Front_end\CategoryController@chadpur')->name('/chadpur');
Route::get('/khela','Front_end\CategoryController@khela')->name('/khela');
Route::get('/rajniti','Front_end\CategoryController@rajniti')->name('/rajniti');
Route::get('/binodon','Front_end\CategoryController@binodon')->name('/binodon');
Route::get('/islam','Front_end\CategoryController@islam')->name('/islam');
Route::get('/interview','Front_end\CategoryController@interview')->name('/interview');
Route::get('/crime','Front_end\CategoryController@crime')->name('/crime');
Route::get('/motamot','Front_end\CategoryController@motamot')->name('/motamot');
Route::get('/helth','Front_end\CategoryController@helth')->name('/helth');


Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('/dashboard');
Route::get('/addCategory','Dashboard\DashboardController@addCategory')->middleware('auth');
Route::resource('/store','Dashboard\DashboardController');
Route::resource('/post','Dashboard\PostController');
Route::get('/post','Dashboard\DashboardController@post')->middleware('auth');

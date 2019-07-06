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
Route::get('/', 'highscoresController@index')->name('home');
Route::post('/highscores', 'highscoresController@store')->name('storeDataPoint');
Route::get('/highscores', 'highscoresController@show')->name('showDataPoint');
Route::resource('/highscores', 'highscoresController');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

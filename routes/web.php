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

Route::get('/', 'GridController@index');
Route::get('/create/{sequence}', 'GridController@create');
Route::post('/grid', 'GridController@store');
Route::get('/edit/{grid}', 'GridController@edit');
Route::put('/grid/{grid}', 'GridController@update');

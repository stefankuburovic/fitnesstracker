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

Route::get('/trainer/{id}', 'ClientController@index');
Route::get('/client/create', 'ClientController@create');
Route::post('/client/create', 'ClientController@store');

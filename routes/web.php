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

Route::get('/','TasksController@index')->name('home');
Route::get('/show/{task}','TasksController@show');
Route::post('/update','TasksController@updateItem');
Route::post('/show/{task}','TasksController@storeItem');
Route::get('/register','AuthController@register');
Route::post('/register','AuthController@store');
Route::get('/login','AuthController@login');
Route::post('/login','AuthController@connect');
Route::get('/logout','AuthController@destroy');
Route::get('/createTask','TasksController@createTask');
Route::post('/createTask','TasksController@storeTask');






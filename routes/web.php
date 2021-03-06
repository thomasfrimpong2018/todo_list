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

Route::get('/','HomeController@index');
 
Route::post('/','HomeController@postIndex');

Route::get('/new','HomeController@createTask');

Route::post('/newtask','HomeController@saveTask');

Route::delete('/delete/{item}','HomeController@deleteTask');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

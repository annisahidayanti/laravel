<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
Route::get('/','LaravelController@index');
Route::get('/task/{id}/edit','LaravelController@edit');
Route::post('/task','LaravelController@add');
Route::post('/task/{id}','LaravelController@update');
Route::post('/task/{id}','LaravelController@del');


*/

route::get('/laravel','ControllerRestApi@index' );
Route::get('/laravel/{id}','ControllerRestApi@show');
Route::post('/laravel/store','ControllerRestApi@store');
Route::post('/Laravel/update/{id}','ControllerRestApi@update');
Route::post('/Laravel/delete/{id}','ControllerRestApi@destroy');

Route::get('/', "LaravelController@index")->name("index");
Route::post('/task', "LaravelController@add")->name("add");
Route::get('/task/{id}/edit', "LaravelController@edit")->name("edit");
Route::POST('/task/{id}/edit', "LaravelController@update")->name("update");
Route::POST('/task/{id}', "LaravelController@del")->name("del");
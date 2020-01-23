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

Route::get('/', function () {
    return view('welcome');
});

Route::get('insert1','StudentController@insert1');
Route::get('insert2','StudentController@insert2');
Route::get('insert3','StudentController@insert3');
Route::get('read','StudentController@read');
Route::get('update','StudentController@update');
Route::get('del','StudentController@del');
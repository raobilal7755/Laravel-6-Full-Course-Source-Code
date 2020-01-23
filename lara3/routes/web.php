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

Route::get('condition','ConditionController@index');


Route::get('main','MasterController@main');
Route::get('slider','MasterController@slider');
Route::get('gallery','MasterController@gallery');
Route::get('portfolio','MasterController@portfolio');
Route::get('home','MasterController@home');

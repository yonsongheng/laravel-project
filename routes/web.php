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
Route::get('/test/{name?}',function($name="guest "){
    return 'welcome '.$name;
});

Route::get('/about','aboutController@index');
Route::get('/student','studentController@index');
Route::post  ('/result','studentController@result');
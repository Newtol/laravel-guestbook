<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();
Route::get('msg/index','MsgsController@index');
Route::get('home/title', 'MsgsController@add');
Route::post('home','MsgsController@addPost');
Route::get('msg/del/{id}','MsgsController@del')->where('id','\d+');
Route::match(['get','post'],'msg/edit/{id}','MsgsController@edit')->where('id','\d+');

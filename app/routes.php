<?php

/*
|--------------------------------------------------------------------------
| Main Routes
|--------------------------------------------------------------------------
*/

Route::get('/', 'HomeController@getHome');

Route::get('user/add','UserController@getAddUser');
Route::post('user/add','UserController@postAddUser');

Route::get('user/login','UserController@getLogin');
Route::post('user/login','UserController@postLogin');

Route::get('user/logout','UserController@getLogout');

Route::get('user/dashboard','UserController@getDashboard');
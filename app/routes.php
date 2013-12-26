<?php

/*
|--------------------------------------------------------------------------
| Main Routes
|--------------------------------------------------------------------------
*/

Route::get('/', 'HomeController@getHome');

Route::get('user/add','UserController@getAddUser');
Route::post('user/add','UserController@postAddUser');
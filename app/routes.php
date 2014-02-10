<?php

/*
|--------------------------------------------------------------------------
| Main Routes
|--------------------------------------------------------------------------
*/

// Home Route, base directory
Route::get('/', array('as' => 'home','uses' => 'HomeController@getHome'));

// To display the add user page, and to submit form
Route::get('user/add',array('as' => 'register','uses' => 'UserController@getAddUser'));
Route::post('user/add','UserController@postAddUser');

// To display the login page, and to submit form
Route::get('user/login',array('as' => 'admin_login','uses' => 'UserController@getLogin'));
Route::post('user/login','UserController@postLogin');

// To logout
Route::get('admin/logout',array('as' => 'admin_logout','uses' => 'UserController@getLogout'));

// Display add property page, and submit form


// Search
Route::get('search','SearchController@getSearch');


/* ----------------------------- 
   Dashboard
   ----------------------------- 

 **************** General ****************/
// Display User Dashboard
Route::get('admin/dashboard', array('as' => 'admin_dashboard', 'uses' => 'UserController@getDashboard'));

// Display User Settings
Route::get('admin/settings', array('as' => 'admin_settings', 'before' => 'auth', function()
	{ return View::make('admin/settings'); } ));

// Display User Messages
Route::get('admin/messages', array('as' => 'admin_messages', 'before' => 'auth', function()
	{ return View::make('admin/messages'); } ));

// Display User Statistics
Route::get('admin/statistics', array('as' => 'admin_statistics', 'before' => 'auth', function()
	{ return View::make('admin/statistics'); } ));

/**
 * **************** Property Management *****************
 */
// Display User Properties
Route::get('admin/properties', array('before' => 'auth','as' => 'admin_properties', 'uses' => 'PropertyController@listProperties'));

// Display the "Add Property" page
Route::get('admin/addProperty', array('as' => 'admin_addProperty','before' => 'auth',function()
	{ return View::make('admin/property/add'); } ));

// Process "Add Property" form
Route::post('admin/addProperty',array('before' => 'auth', 'as' => 'admin_postAddProperty', 'uses' => 'PropertyController@postAddProperty'));

// Display "Edit Property" page
Route::get('admin/property/edit/{id}', array('as' => 'admin_editProperty','before' => 'auth',function($id)
	{ 
		$user = Sentry::getUser();
		$property = Property::find($id);
		return View::make('admin/property/edit')->with('property',$property); } ));

// Process "Edit Property" form
Route::post('property/edit/{id}', array('as' => 'admin_postEditProperty', 'uses' => 'PropertyController@postEditProperty','before' => 'auth'));

Route::get('a',function()
{
	echo App::environment();
});
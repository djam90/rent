<?php

// Bindings
App::bind('App\Property\PropertyRepositoryInterface', 'App\Property\PropertyRepository');
App::bind('App\Property\PropertyServiceInterface', 'App\Property\PropertyService');

// Home Route, base directory
Route::get('/', array('as' => 'home','uses' => 'HomeController@getHome'));

/*
|--------------------------------------------------------------------------
| Auth
|--------------------------------------------------------------------------
*/
Route::get('user/add',array('as' => 'register','uses' => 'UserController@getAddUser'));
Route::post('user/add','UserController@postAddUser');
Route::get('user/login',array('as' => 'admin_login','uses' => 'UserController@getLogin'));
Route::post('user/login','UserController@postLogin');
Route::get('admin/logout',array('as' => 'admin_logout','uses' => 'UserController@getLogout'));

/*
|--------------------------------------------------------------------------
| Search
|--------------------------------------------------------------------------
*/

// Search
Route::get('search','SearchController@getSearch');

//////////////////////////////////////////////////////////////////
// 				            ADMIN PANEL   			  		 	//
//////////////////////////////////////////////////////////////////
/*
|--------------------------------------------------------------------------
| Dashboard
|--------------------------------------------------------------------------
*/


Route::group(array('before' => 'auth'), function()
{
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
});


		
/*
|--------------------------------------------------------------------------
| Property Management
|--------------------------------------------------------------------------
*/

Route::group(array('before' => 'auth'),function()
{
    // Display User Properties
    Route::get('admin/properties', array('as' => 'admin_properties', 'uses' => 'PropertyController@listProperties'));

    // Add Property
    Route::get('admin/addProperty', array('as' => 'admin_addProperty', 'uses' => 'PropertyController@getAddProperty'));
    Route::post('admin/addProperty',array('as' => 'admin_postAddProperty', 'uses' => 'PropertyController@postAddProperty'));

    //Edit Property
    Route::get('admin/property/edit/{id}',array('as'=>'admin_editProperty','uses'=>'PropertyController@getEditProperty'));
    Route::post('property/edit/{id}',array('as' =>'admin_postEditProperty','uses'=>'PropertyController@postEditProperty'));
}); // End Route Group

Route::resource('property', 'PropertyController',array('before' => 'auth'));


/*
	Ajax Routes
 */
Route::any('upload/image', 'AjaxController@upload_image');
Route::post('deleteImage', 'AjaxController@remove_image');
Route::post('admin/editImage',array('as' => 'update_image_title', 'uses' => 'AjaxController@update_image_title'));

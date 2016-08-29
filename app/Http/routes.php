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
Route::auth();

Route::get('/', 'HomeController@index');

Route::group(['middleware' => 'auth'], function() {

	// All friends
	Route::get('/all/friends', [
		'as'	=> 	'all.friends',
		'uses'	=> 	'HomeController@allFriends'
	]);

	// Friend Profile
	Route::get('/friend/{id}', [
		'as'	=> 	'single.friend',
		'uses'	=> 	'HomeController@singleFriends'
	]);

	// Add Contact
	Route::get('/add/contact-information', [
		'as'	=> 	'add.contact.info',
		'uses'	=> 	'ContactInfoController@getAdd'
	]);

	Route::post('/add/contact-information', [
		'as'	=> 	'post.add.contact.info',
		'uses'	=> 	'ContactInfoController@postAdd'
	]);


	// Edit Contact
	Route::get('/edit/contact-information', [
		'as'	=> 	'edit.contact.info',
		'uses'	=> 	'ContactInfoController@getEdit'
	]);

	Route::post('/edit/contact-information/{id}', [
		'as'	=> 	'post.edit.contact.info',
		'uses'	=> 	'ContactInfoController@postEdit'
	]);


	Route::get('/profile/settings', [
		'as'	=> 'profile.settings',
		'uses'	=> 'SettingsController@settings',
	]);

	Route::post('/profile/settings', [
		'as'	=> 'post.profile.settings',
		'uses'	=> 'SettingsController@saveSettings',
	]);

});

// Route::get('/create-role-user', 'HomeController@createRoleUser');

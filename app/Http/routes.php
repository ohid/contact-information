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

Route::get('/', function () {
    return view('home');
});


Route::get('/s', function() {
    $adminRole = App\Models\Role::where('name', 'admin')->first();

	$user = App\Models\User::where('id' , 1)->first();
	$user->attachRole($adminRole);
});
Route::get('/create-role-user', 'HomeController@createRoleUser');

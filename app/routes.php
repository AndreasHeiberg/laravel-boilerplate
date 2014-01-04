<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::group(['prefix' => 'api'], function()
{
	Route::resource('users', 'Controllers\Api\UsersController');
});

Route::group(['prefix' => 'admin', 'before' => 'auth|auth.admin'], function()
{
		Route::post('users/{id}/deactivate', ['as' => 'admin.users.deactivate', 'uses' => 'Controllers\Admin\UsersController@deactivate']);
		Route::post('users/{id}/activate', ['as' => 'admin.users.activate', 'uses' => 'Controllers\Admin\UsersController@activate']);
	Route::resource('users', 'Controllers\Admin\UsersController');

	Route::controller('/', 'Controllers\Admin\AdminController', [
		'getIndex' => 'admin',
		'getStats' => 'admin.stats',
	]);
});

Route::group(['prefix' => 'dashboard', 'before' => 'auth'], function()
{
	Route::controller('/', 'Controllers\Dashboard\DashboardController', [
		'getIndex' => 'dashboard',
	]);
});

Route::resource('users', 'Controllers\UsersController');

Route::controller('/', 'Controllers\AuthController', [
	'getLogin' => 'login',
	'getLogout' => 'logout',
	'getRegister' => 'register',
	'getVerifyEmail' => 'verify-email',
	'getForgotPassword' => 'forgot-password',
	'getResetPassword' => 'reset-password',
]);

Route::controller('/', 'Controllers\HomeController', [
	'getIndex' => 'home',
	'getOverview' => 'home.overview',
	'getGettingStarted' => 'home.getting-started',
	'getPricing' => 'home.pricing',
	'getAbout' => 'home.about',
	'getHelp' => 'home.help',
]);
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

Route::group(['prefix' => 'dashboard', 'before' => 'auth'], function()
{
	Route::get('/', ['as' => 'dashboard', 'uses' => 'DashboardController@getIndex']);
});

Route::resource('users', 'UsersController');

Route::controller('/', 'AuthController', [
	'getLogin' => 'login',
	'getLogout' => 'logout',
	'getRegister' => 'register',
	'getVerifyEmail' => 'verify-email',
	'getForgotPassword' => 'forgot-password',
	'getResetPassword' => 'reset-password',
]);

Route::controller('/', 'HomeController', [
	'getIndex' => 'home',
	'getOverview' => 'home.overview',
	'getGettingStarted' => 'home.getting-started',
	'getPricing' => 'home.pricing',
	'getAbout' => 'home.about',
	'getHelp' => 'home.help',
]);
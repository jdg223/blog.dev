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

Route::get('/','HomeController@showWelcome');

Route::get('sayhello/{name}','HomeController@sayHello');

Route::get('resume','HomeController@showResume');

Route::get('portfolio','HomeController@showPortfolio');

Route::get('rolldice/{dice}','HomeController@rollDice');

Route::resource('posts', 'PostsController');

Route::get('login','HomeController@showLogin');

Route::post('login','HomeController@checkLogin');

Route::get('logout','HomeController@logout');

Route::get('orm-test',function()
{
	$search = 'qui';

	try {
		$post = Post::where('title','like','%'. $search . '%')->orWhere('body','like','%'. $search . '%')->get();
		dd($post);
	} catch (Exception $e) {
		return $e->getMessage();
	}
});
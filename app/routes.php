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

Route::get('/','HomeController@showPortfolio');

Route::get('sayhello/{name}','HomeController@sayHello');

Route::get('resume','HomeController@showResume');

Route::get('rolldice/{dice}','HomeController@rollDice');

Route::resource('posts', 'PostsController');

Route::get('login','HomeController@showLogin');

Route::post('login','HomeController@checkLogin');

Route::get('logout','HomeController@logout');

Route::get('whackamole','HomeController@showMole');

Route::get('SimpleSimon','HomeController@showSimon');

Route::get('ajaxWeather','HomeController@ajaxWeather');

Route::get('getListed','HomeController@getListed');

Route::post('sendMail','HomeController@sendMail');

// Route::get('logout','HomeController@logout');

// Route::get('orm-test',function()
// {
	
// 	$query->Post::with('user');
// 	$search = 'jdg223';

// 	$query->where('title','like','%'. $search . '%');
// 	$query->orWhere('body','like','%'. $search . '%');

// 	$query->orWhereHas('user',function ($q)
// 	{
// 		$q->where('username','like','%jdg223%');
// 	});

// 	$query->orWhereHas('user',function ($q)
// 	{
// 		$q->where('email','like','%jdg223%');
// 	});

// 	$post = $query->orderBy('created_at','DESC')->paginate(10);

// }

// });
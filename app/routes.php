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

Route::get('orm-test',function()
{
	$post = new Post();
	$post->title = 'New blog';
	$post->body = 'Lorem Ipsum Dolor';
	$post->save();

	$post2 = new Post();
	$post2->title = 'New Entry';
	$post2->body = 'Lorem Ipsum Dolor';
	$post2->save();

	$post3 = new Post();
	$post3->title = 'New Entry 3';
	$post3->body = 'Lorem Ipsum Dolor';
	$post3->save();
});
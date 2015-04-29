<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function showPortfolio()
	{
		return View::make('portfolio');
	}

	public function showResume()
	{
		return View::make('resume');
	}

	public function sayHello($name)
	{
		if ($name == "Chris")
		{
			return Redirect::to('/');
		} 
		else{
			$data = array(
				'name' =>  $name,
				'another' => 'some variable stuff here'
			);
			return View::make('my-first-view')->with($data);
		}
	}

	public function rollDice($guess)
	{
		$data = array(
			'guess' => $guess,
			'diceNumber' => rand(1,6)
		);
		return View::make('roll-dice')->with($data);
	}
}

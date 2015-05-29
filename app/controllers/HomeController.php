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

	public function showLogin()
	{
		return View::make('login');
	}

	public function checkLogin()
	{


		$validator = Validator::make(Input::all(),User::$rules);

		if ($validator->fails())
	    {
			 return Redirect::back()->withInput()->withErrors($validator);
		} else {
			$email = Input::get('email');
			$password = Input::get('password');

		if (Auth::attempt(array('email' => $email,'password' => $password )))
		{
			return Redirect::intended('/');

		} else {
			Session::flash('errorMessage','Incorrect email or password');
			return Redirect::back();
		}
			
		}
	}

	public function logout()
	{
		Auth::logout();
		Redirect::to('portfolio');
	}

	public function showMole()
	{
		return View::make('whackamole');
	}

	public function showSimon()
	{
		return View::make('SimpleSimon');
	}
	public function ajaxWeather()
	{
		return View::make('ajax_weather');
	}

	public function getListed()
	{
		return View::make('get-listed/public/index.php');
	}

	public function sendMail()
	{
        $data = Input::all();
        
        $rules = array (
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        );

        
        $validator  = Validator::make($data, $rules);

        
        if ($validator -> passes()){

            
            Mail::send('email', $data, function($message) use ($data)
            {
			
             $message->from($data['email'] , $data['name']);
			                   
			$message->to('jdgarza22@yahoo.com', 'jd garza')->cc('jdgarza22@yahoo.com')->subject('request or project idea');
            });
				
            return Redirect::back();  
        }else{
	
            return Redirect::back()->withErrors($validator);
        }
    }

}



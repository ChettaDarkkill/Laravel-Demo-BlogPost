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

    public function showRegister()
    {
    	return View::make('Register/register');
    }
	public function showWelcome()
	{   
		$results = Article::all();
		return View::make('home')->with('results',$results);
	}
    public function showSecret()
    {   
         $results = Article::all();
      //   return View::make('secret')->with('results', $results);
         return View::make('secret')->with('results', $results);
    }
}
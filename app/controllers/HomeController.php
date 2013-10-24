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
	public function delArticle()
	{   
        $delarticle = Input::get('delarticle');
        $delText = DB::table('article')->where('title','=',$delarticle)->delete();
		return View::make('showComplete');
	}
    public function showArticle()
    {    
    	 $title = Input::get('lbl');
         $results = DB::table('article')->where('title',$title)->get();
         return View::make('showarticle')->with('results',$results);
    } 
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
          $results = DB::table('article')->get();
          return View::make('secret')->with('results', $results);
    }
}
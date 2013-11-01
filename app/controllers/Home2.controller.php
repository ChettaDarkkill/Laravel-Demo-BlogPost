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
	
	public function showComment()
	{
		     /*  $comments = Article::find(1)->comment;
 
                foreach($comments as $comment){
                        print_r($comment->detail_comment."</br>");
                }
                */
        return View::make('showComment');
	}
	public function showUser()
	{
		return View::make('ShowUser/showuser');
	}
	public function showError()
	{
 	  return View::make('showError');
	}
	public function delArticle()
	{   
        $delarticle = Input::get('delarticle');
        $delText = DB::table('article')->where('title','=',$delarticle)->delete();
		return View::make('showComplete');
	}
    public function showArticle()
    {    
    	 $title = Input::get('lbl');
    	 $id = (int)Input::get('ids');
         $results = DB::table('article')->where('title',$title)->get();
         $results2 = Article::find($id)->comment;
         return View::make('showarticle')->with('results',$results)
         								 ->with('results2',$results2);
    }  
    public function showRegister()
    {
    	return View::make('Register/register');
    }
	public function showWelcome()
	{   
		$results = Article::orderBy('article_id', 'DESC')->take(5)->get();
		$results2 = Comment::all();
		return View::make('home')->with('results',$results)
		 						 ->with('results2',$results2);
	}
    public function showSecret()
    {      
          
    	  $results = Article::orderBy('article_id', 'desc')->take(10)->get();
          return View::make('secret')->with('results', $results); 
    	  //var_dump($results);
          //$results = DB::table('article')->get();       
    }
    public function addComment()
	{   
		$id = Input::get('cmdarticle');
		//$post = Input::get('post');
		$arid = (int)$id;
		//$id = '1';
 		//$arid = (int)$id;
		$id = DB::table('comment')->insertGetId(
			  	array('comment_article_id' => $arid,'detail_comment' => 'hello')
		);
 	    return View::make('showError');
	}
}
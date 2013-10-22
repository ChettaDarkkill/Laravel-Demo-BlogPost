<?php

class UserArticleController extends BaseController {

	public function addArticle()
	{  
	 $title = Input::get('title');
	 $about = Input::get('about');
	 $detail = Input::get('detail');

	  if($title == "" || $about =="" || $detail =="")
	  	{    
		    return View::make('showError');
	    }
	   else
	   {
		    $id = DB::table('article')->insertGetId(
			  	array('title' => $title,'about' => $about , 'details'=>$detail)
			);
			return View::make('showComplete');
	   }
	} 
	public function showProfile()
	{
		    return View::make('Register/register');
	} 
}
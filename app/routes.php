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

Route::post('register','AuthController@AddUser');
Route::post('postcomment','HomeController@addComment');
Route::get('/','HomeController@showWelcome');
Route::get('login', 'AuthController@showLogin');
Route::post('login', 'AuthController@postLogin');
Route::get('logout', 'AuthController@getLogout');
Route::get('register','HomeController@showRegister');
Route::post('article','UserArticleController@addArticle');
Route::get('register','UserArticleController@showProfile');
Route::post('showarticle','HomeController@showArticle');
Route::post('delarticle' , 'HomeController@delArticle');
Route::get('editprofile','HomeController@test');
//Route::get('test2','HomeController@test');
Route::get('test3','HomeController@showError');
Route::get('test4','HomeController@showError');
Route::get('profile','HomeController@showUser');
Route::get('seecomment','HomeController@showError');
Route::get('comment','HomeController@showComment');
Route::group(array('before' => 'auth'), function()
{   
    Route::get('secret', 'HomeController@showSecret');
});

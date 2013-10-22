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
Route::get('login', 'AuthController@showLogin');
Route::post('login', 'AuthController@postLogin');
Route::get('logout', 'AuthController@getLogout');
Route::get('register','HomeController@showRegister');
Route::post('article','UserArticleController@addArticle');
Route::get('register','UserArticleController@showProfile');

Route::group(array('before' => 'auth'), function()
{
    Route::get('secret', 'HomeController@showSecret');
});
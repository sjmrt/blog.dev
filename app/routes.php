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

Route::get('/', 'HomeController@showHome');

Route::get('/resume', 'HomeController@showResume');

Route::get('/portfolio2', 'HomeController@showPortfolio');

Route::get('/sayhello/{name?}', 'HomeController@showSayHello');

Route::get('/rolldice/{guess?}', 'HomeController@showRollDice');

Route::get('/home', 'HomeController@showHome');

Route::get('login', 'HomeController@getLogin');

Route::post('login', 'HomeController@postLogin');

Route::get('logout', 'HomeController@getLogout');

Route::resource('/blog', 'PostsController'); 

Route::post('upload', 'PostsController@upload');




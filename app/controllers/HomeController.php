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

	public function getLogin()
	{
		if(Auth::check()) {
			Session::flash('errorMessage', 'You are already logged in!');
			return Redirect::action('PostsController@showIndex');
		}
		return View::make('login');
	}


	public function postLogin()
	{
		$email = Input::get('email');
		$password = Input::get('password');

		if (Auth::attempt(array('email' => $email, 'password' => $password))) {
			Session::flash('successMessage', 'Login successful!');
			return Redirect::intended('/blog');
		} else {
			Session::flash('errorMessage', 'Your email and/or password were incorrect.');
			Log::warning('User ' . $email . ' failed to log in.');
			return Redirect::action('HomeController@getLogin');
		}
	}

	public function getLogout()
	{
		Auth::logout();
		Session::flash('successMessage', 'You have successfully logged out.');
		return Redirect::action('HomeController@getLogin');
	}

	public function showWelcome()
	{
		return View::make('hello');
	}

	// public function showBlog()
	// {
	// 	$posts = Post::paginate(4);

	// 	return View::make('blog')->with('posts', $posts);
	// }

	public function showResume()
	{
		return View::make('resume');
	}

	public function showPortfolio()
	{
		return View::make('portfolio2');
	}

	public function showSayHello($name = null)
	{
    	if ($name == null) return 'Hello!';
    	return View::make('my-first-view');	
    }

	public function showRollDice($guess = null)
	{
		$roll = mt_rand(1, 6);
		$data = array(
		'guess' => $guess, 
		'roll' => $roll
		);

    	return View::make('roll-dice')->with($data);
	}

	public function showHome()
	{
		return View::make('home');
	}
}

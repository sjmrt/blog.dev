<?php

class PostsController extends \BaseController {

	// public function __construct()
	// {
	// 	parent::construct();

	// 	$this->beforeFilter('auth', array('except' => array('index', 'show')));
	// }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$query = Post::with('user');

		$search = Input::get('search');

		if($search) {
			$query->where('title', 'like', "%$search%");
			$query->orWhere('subtitle', 'like', "%$search%");
			$query->orWhere('body', 'like', "%$search%");
			$query->orWhereHas('user', function($q) use ($search) {
				$q->where('email', 'like', "%$search%");
			});
		}
		$posts = $query->orderBy('updated_at','desc')->paginate(4);

		return View::make('blog')->with('posts', $posts);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('posts.create');	
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{	
	    $post = new Post();
		Log::info('Post: ' . $post->title . ' with id: ' . $post->id . ' created.', array('newPost' => Input::all()));
    	return $this->validateAndSave($post);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($idOrTitle)
	{
		if(is_numeric($idOrTitle)){
			$post = Post::find($idOrTitle);
				if(!$post){
					App::abort(404);
					return Redirect::action('PostsController@index');
				}
		} else {
			$post = Post::where('slug_title', '=', $idOrTitle)->first();
			if(!$post){
				return Redirect::action('PostsController@index');
			}
		}
		return View::make('posts.show')->with('post', $post);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = Post::find($id);

		return View::make('posts.edit')->with('post', $post);	
	
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$post = Post::find($id);
		$post->title = Input::get('title');
		$post->body = Input::get('body');
		$post->subtitle = Input::get('subtitle');
		$post->save();
		return Redirect::action('PostsController@index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$post = Post::find($id);
		$images = $post->images;
		foreach($images as $image){
			$image->delete();
		}
		$post->delete();

		return Redirect::action('PostsController@index');

	}

	// 	/**
	//  * Remove the specified resource from storage.
	//  *
	//  * @param  int  $id
	//  * @return Response
	//  */
	// public function destroyImage($id)
	// {
	// 	$post = Post::find($id);

	// 	$images = $post->images;

	// 	return View::make('posts.show')->with('post', $post);
	// }
	
	public function view(Post $post)
	{
    // $post is an instance of Post that is returned from the Route::bind() method.
    return View::make('posts.view', ['post' => $post]);

	}

	public function upload()
	{
		$post_id = Input::get('post_id');
		$image = new Image;
		$image->post_id = $post_id;
		$image->img_path = Input::get('img_path');
		$image->save();
	}


	protected function validateAndSave($post)
	{
		$validator = Validator::make(Input::all(), Post::$rules);

    	if ($validator->fails()) {
			return Redirect::back()->withInput()->withErrors($validator);   	 	
		} else {
	        $post->user_id = Auth::id();
			$post->title = Input::get('title');
			$post->body = Input::get('body');
			$post->subtitle = Input::get('subtitle');
			$post->image = Input::get('image');

			$userEmail = 
			$result = $post->save();

			if($result) {
				return Redirect::action('PostsController@index');
			} else {
				return Redirect::back()->withInput();
			}
		}
	}
}

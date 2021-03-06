<?php

class PostsController extends \BaseController {

public function __construct()
{
	// $this->beforeFilter('auth', array('only' => array('index','create')));
}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function index()
	{
		$query = Post::with('user')->paginate(4);

		if (Input::get('search')) {
			$query = Post::with('user');
			$search = Input::get('search');

			$query->where('title','like','%'.$search.'%');
			$query->orWhere('body','like','%'.$search.'%');

			// $query->orWhereHas('user',function ($q) use ($search) {
			// 	$q->where('username','like',$search);
			// });

			// $query->orWhereHas('user',function ($q) use ($search) 
			// {
			// 	$q->where('email','like',$search);
			// });

			$post = $query->orderBy('created_at','DESC')->paginate(10);
			return View::make('posts.index.{search}')->withInput()->with('posts',$post);	

		}
			return View::make('posts.index')->with('posts',$query);		

		

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
		// create the validator
	    $validator = Validator::make(Input::all(), Post::$rules);

	    // attempt validation
	    if ($validator->fails()) {
	        	return Redirect::back()->withInput()->withErrors($validator);
	        	Session::flash('errorMessage', 'Message Was Not Saved!');
	    } else {
			$post = new Post();
			$post->title = Input::get('title');
			$post->slug = Input::get('title');
			$post->body = Input::get('body');
			$post->user_id = 1;
			$post->save();
			Session::flash('successMessage', 'Message Was Successfully Saved!');
			return Redirect::to('posts');
	    }


	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = null;

		// is $id is numeric, $post is equal to $id
		if (is_numeric($id)) {
			$post = Post::findOrFail($id);
		}else{

		// $slug is a non-Numeric string
			$slug = $id;
			$post = Post::where('slug','=',$slug)->firstOrFail();

		}
		// if post is not found log error a redirect to 404 
		if(!$post) {

			Log::error('model not found');
			App::abort(404);
		}

			$data = array(
			'post' => $post
			);

		return View::make('posts.show')->with($data);

	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{	$data = array(
			'post' => Post::findorFail($id) 
		);
			return View::make("posts.edit")->with($data);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		// create the validator
	    $validator = Validator::make(Input::all(), Post::$rules);

	    // attempt validation
	    if ($validator->fails()) {
	        return Redirect::back()->withInput()->withErrors($validator);
	        Session::flash('errorMessage', 'Message Was Not Updated!');
	    } else {
			$post = Post::find($id);
			$post->title = Input::get('title');
			$post->slug = Input::get('title');
			$post->body = Input::get('body');
			$post->save();
			Session::flash('successMessage', 'Message Was Successfully Updated!');
			return Redirect::back();
	    }
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$post = Post::findorFail($id);
		$post->delete();

		Session::flash('successMessage','Post Was Successfully Deleted.');

		return Redirect::action('PostsController@index');
	}


}

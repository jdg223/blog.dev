<?php

class PostsController extends \BaseController {


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts = Post::paginate(2);
		return View::make('posts.index')->with('posts',$posts);	
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
			$post->body = Input::get('body');
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
		$data = array(
			'post' => Post::findorFail($id)
			);
		return View::make("posts.show")->with($data);
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

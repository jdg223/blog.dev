@extends('layouts.master')

@section('head')
	<link href='http://fonts.googleapis.com/css?family=Fredericka+the+Great|Cabin+Sketch' rel='stylesheet' type='text/css'>
	<title>All Ad's</title>
		<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

		<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
@stop

@section('content')


	
	<h1>{{ $post->title }}</h1>
		<br>
	<p>{{ $post->body }}</p>
		<br>
	<h3>Created</h3>
    	<span>{{ $post->created_at->setTimezone('America/Chicago')->diffForHumans() }}</span>
    	<br>
    <h3>Last Updated</h3>
    	<span>{{ $post->updated_at->setTimezone('America/Chicago')->diffForHumans() }}</span>
	    <br>
	<h3>User</h3>
    	<span>{{ $post->user->username}}</span>
	    <br>
	<a href="{{{action('PostsController@edit',$post->id) }}}" class="btn btn-primary" >Edit Post</a>
	{{Form::open(array('method' => 'delete', 'action' => ['PostsController@destroy',$post->id]))}}
		{{Form::button('Delete Post', array('class' => 'btn btn-primary', 'type' => "submit")) }}
	{{Form::close()}}

@stop

@section('footer')
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
@stop
@extends('layouts.master')

@section('head')
	<link href='http://fonts.googleapis.com/css?family=Fredericka+the+Great|Cabin+Sketch' rel='stylesheet' type='text/css'>
	<title>Create</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
@stop

@section('content')
	{{ Form::open(array('action' => 'PostsController@store')) }}
		<br>
		{{ Form::label('title', 'Title') }}
		{{ Form::text('title',Input::old('title'), array('class' => 'form-control', 'id' =>"name", 'name' => "title", 'placeholder' => "title")) }}
		{{ $errors->first('title', '<span class="help-block">:message</span>') }}
		<br>
		{{ Form::label('body', 'Body') }}
		{{ Form::textarea('body',Input::old('body'), array('class' => 'form-control', 'id' =>"body", 'name' => "body", 'placeholder' => "Body", 'rows' => "3")) }}
		{{ $errors->first('body', '<span class="help-block">:message</span>') }}
		<br>
		{{Form::button('Submit', array('class' => 'btn btn-primary', 'type' => "submit")) }}
		{{ Form::close() }}

	@if (Session::has('successMessage'))
	    <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
	@endif
	
	@if (Session::has('errorMessage'))
	    <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
	@endif
@stop

@section('footer')
    	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
@stop
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
<table class="table table-striped">
	<tr>
		<th>title</th>
		<th>Body</th>
		<th>Created</th>
		<th>Last Updated</th>
	</tr>

	@foreach ($posts as $post)
		<tr>
	    	<td> <a href="{{{action('PostsController@show',$post->slug) }}}">{{ $post->title }}</a></td>
	    	<td>{{ $post->body }}</td>
	    	<td>{{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A')}}</td>
	    	<td>{{ $post->updated_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A')}}</td>
	    </tr>
	@endforeach
</table>

		{{$posts->links()}}
		
		@if (Session::has('successMessage'))
		    <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
		@endif
@stop

@section('footer')
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
@stop
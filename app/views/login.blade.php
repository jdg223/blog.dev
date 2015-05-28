@extends('layouts.master')

@section('head')
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
@stop

@section('content')

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Login</h4>
      </div>
      <div class="modal-body">
    	{{ Form::open(array('action' => 'HomeController@checkLogin')) }}
			   <br>
  			{{ Form::label('email', 'Email') }}
  			{{ Form::email('email',Input::old('email'), array('class' => 'form-control', 'id' =>"email", 'name' => "email", 'placeholder' => "email")) }}
			   <br>
  			{{ Form::label('password', 'Password') }}
  			{{ Form::password('password', array('class' => 'form-control', 'id' =>"password", 'name' => "password", 'placeholder' => "password")) }}			
      </div>
      <div class="modal-footer">
        	{{Form::button('Submit', array('class' => 'btn btn-primary', 'type' => "submit")) }}
		{{ Form::close() }}
      </div>
    </div>
  </div>
</div>
@stop

@section('footer')
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
@stop
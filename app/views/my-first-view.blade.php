@extends('layouts.master')

@section('content')
	<h1>Hello, {{ $name }}!</h1>
	<p>{{ $another }}</p>
@stop

@section('scripts')
	<script type="text/javascript">
		console.log('message');
	</script>
@stop


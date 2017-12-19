@extends('layout.master')

@section('content')
	@foreach ($users as $user)
		<h3>
			<a href="user/{{$user->id}}">{{$user->name}}</a>
		</h3>
	@endforeach
@endsection

@section('sidebar') 
	@parent
	<p>This is append div!</p>

@endsection
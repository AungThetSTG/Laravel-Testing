@extends('layout.master')

@section('content')
    @foreach($posts as $index => $post)
        <h3>
            {{++$index}}. {{$post->title}}
        </h3>
        
        <p>
            {{$post->body}}
        </p>
    @endforeach
@endsection
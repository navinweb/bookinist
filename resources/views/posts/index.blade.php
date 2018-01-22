@extends('layouts.app')

@section('content')
    <h2>All Posts</h2>
    <hr>

    @foreach ($posts as $post)
        <li><a href="/posts/{{$post->id}}">{{ $post->title }}</a></li>
    @endforeach

@endsection

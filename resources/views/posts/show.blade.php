@extends('layouts.app')

@section('content')
    <h1>{{ $post->title }}</h1>
    @if(count($post->tags))
        <ul>
            @foreach($post->tags as $tag)
                <li>
                    <a href="/posts/tag/{{ $tag->name }}">{{ $tag->name }}</a>
                </li>
            @endforeach
        </ul>
    @endif
    <p>{{ $post->body }}</p>

    @include('layouts.errors')

@endsection

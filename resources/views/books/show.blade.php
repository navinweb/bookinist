@extends('layouts.app')

@section('content')
    <h1>{{ $book->title }}</h1>
    <p>{{ $book->body }}</p>

    @if(isset($book->comments) && !$book->comments->isEmpty())
        <hr>
        <div class="comments">
            <h2>Comments</h2>
            <ul>
                @foreach($book->comments as $comment)
                    <li>
                        <strong>{{ $comment->created_at->diffForHumans() }}: </strong>
                        {{ $comment->body }}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (Auth::check())
        <hr>
        <div class="card">
            <h3>Write a Comment!</h3>
            <form action="/comments/{{ $book->id }}" method="post">
                {{ csrf_field() }}
                <p><textarea name="body" id="" cols="30" rows="10" placeholder="Write a comment"></textarea></p>
                <p>
                    <button>Send</button>
                </p>
            </form>
        </div>
    @else
        <hr>
        <p><a href="{{ route('login') }}">Login</a>/<a href="{{ route('register') }}">Register</a> to leave a comment!</p>
    @endif

    @include('layouts.errors')

    <hr>

    <h2>Related Books</h2>
    <ul>
        @foreach ($books as $book_related)
            <li><a href="/books/{{$book_related->id}}">{{ $book_related->title }}</a></li>
        @endforeach
    </ul>
@endsection

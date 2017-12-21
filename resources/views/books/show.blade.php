@extends('layout')

@section('content')
    <h1>{{ $book->title }}</h1>
    <p>{{ $book->text }}</p>

    <hr>
    <h2>Related Books</h2>
    <ul>
        @foreach ($books as $book)
            <li><a href="/books/{{$book->id}}">{{ $book->title }}</a></li>
        @endforeach
    </ul>
@endsection

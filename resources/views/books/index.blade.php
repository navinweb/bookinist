@extends('layout')

@section('content')
    <h2>All Books</h2>
    <hr>
    <ul class="books-list">
        @foreach ($books as $book)
            <li><a href="/books/{{$book->id}}">{{ $book->title }}</a></li>
        @endforeach
    </ul>
@endsection

@extends('layouts.app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">Dashboard</div>

        <div class="panel-body">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            @if($flash = session('message'))
                <div class="alert alert-success" role="alert">
                    {{ $flash }}
                </div>
            @endif

                @if(isset($books) && !$books->isEmpty())
                    <h2>All Books</h2>
                    <hr>
                    <ul class="books-list">
                        @foreach ($books as $book)
                            <li><a href="/books/{{$book->id}}">{{ $book->title }}</a></li>
                        @endforeach
                    </ul>
                @endif

        </div>
    </div>

@endsection

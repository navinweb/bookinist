@extends('layouts.app')

@section('content')
    <h1>Add Book</h1>

    <form action="/books" method="post">
        {{ csrf_field() }}
        <p><input type="text" name="title" placeholder="title"></p>
        <p><textarea name="body" id="body" cols="30" rows="10" placeholder="Text"></textarea></p>
        <p>
            <button type="submit">Add Book</button>
        </p>
    </form>

    @include('layouts.errors')
@endsection

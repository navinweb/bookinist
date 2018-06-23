@extends('layouts.app')

@section('content')
    <h1>Add User</h1>

    <form action="/users" method="post">
        {{ csrf_field() }}
        <p><input type="text" name="name" placeholder="name"></p>
        <p><input type="email" name="email" placeholder="email"></p>
        <p><input type="password" name="password" placeholder="password"></p>
        <p>
            <button type="submit">Add User</button>
        </p>
    </form>

    @include('layouts.errors')
@endsection

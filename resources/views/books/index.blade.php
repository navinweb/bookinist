@extends('layout')

@section('content')
    <h1>All Users</h1>

    @foreach ($users as $user)
        <li>{{ $user->name }}</li>
    @endforeach

@endsection

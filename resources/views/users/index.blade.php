@extends('layouts.app')

@section('content')
    <h2>All Users</h2>
    <hr>

    @foreach ($users as $user)
        <li>{{ $user->name }}</li>
    @endforeach

@endsection

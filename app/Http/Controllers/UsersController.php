<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;

class UsersController extends Controller
{

    public function index()
    {
        $users = User::all();

        return view('users/index', [
            'users'    => $users,
        ]);
    }


    public function create()
    {
        return view('users/create');
    }


    public function store()
    {
        $this->validate(request(), [
            'name'     => 'required|min:2',
            'email'    => 'required|email',
            'password' => 'required|min:6'
        ]);

        User::create(request([
            'name',
            'email',
            'password'
        ]));

        return back();
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Books;

class PagesController extends Controller
{

    function about() {
        return view('pages/about');
    }

    function home() {
        $books = Books::latest()->get();
        return view('home', [
            'books'	=> $books
        ]);
    }

}

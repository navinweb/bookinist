<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class PagesController extends Controller
{

    public function __construct()
    {
//        $this->middleware('auth');
    }

    function about() {
        return view('pages/about');
    }

    function home() {
        $books = Book::latest()->get();
        return view('home', [
            'books'	=> $books
        ]);
    }

}

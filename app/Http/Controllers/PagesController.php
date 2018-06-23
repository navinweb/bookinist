<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Book;

class PagesController extends Controller
{

    function about() {
        return view('pages/about');
    }

    function home() {
        $books = Book::latest()->get();

        return view('home', [
            'books'	=> $books,
        ]);
    }

}

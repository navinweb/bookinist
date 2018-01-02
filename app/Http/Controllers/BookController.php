<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::latest()->get();
        return view('books/index', [
            'books'	=> $books
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('books/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'title' =>  'required|min:2',
            'body' => 'required',
        ]);

        Book::create([
            'title' => request('title'),
            'body' => request('body'),
            'user_id' => auth()->id()
        ]);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Book  $books
     * @return \Illuminate\Http\Response
     */
    public function show($book_id)
    {
        $book = Book::find($book_id);
        $books = Book::all();

        return view('books/show', [
            'books'	=> $books,
            'book'	=> $book
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Book  $books
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $books)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Book  $books
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $books)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Book  $books
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $books)
    {
        //
    }
}

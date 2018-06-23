<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Book extends Model
{

    protected $fillable = [
        'body',
        'user_id',
        'title'
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function addComment($book_id)
    {
        Comment::create([
            'body' => request('body'),
            'book_id' => $book_id,
            'user_id' => auth()->id()
        ]);
    }

}

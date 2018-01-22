<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use View;

class BaseController extends Controller
{

    public function __construct()
    {
        $archives = Post::selectRaw('year(created_at) as year, 
                                    monthname(created_at) as month, 
                                    count(*) published')
            ->groupBy('year', 'month')
            ->orderByRaw('min(created_at) desc')
            ->get();

        View::share('archives', $archives);
    }
}


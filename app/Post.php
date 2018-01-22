<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Post extends Model
{

    public function scopeFilter($query, $filters)
    {

        if (isset($filters['month'])) {
            $month = $filters['month'];
            $query->whereMonth('created_at', Carbon::parse($month)->month);
        }

        if (isset($filters['year'])) {
            $year = $filters['year'];
            $query->whereYear('created_at', $year);
        }
    }
}

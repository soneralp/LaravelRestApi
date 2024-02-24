<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    public function scopeFindByCategory($query, $category)
    {
        return $query->whereRaw("FIND_IN_SET($category, categoryIds)")->get();
    }
}

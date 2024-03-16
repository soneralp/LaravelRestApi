<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Controllers\BaseController;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends BaseController
{
    public function index() {
        $movies = Movie::all();

        return $this->success('Movies listed', $movies);
    }

    public function detail($movieId) {
        if(Movie::where('id', $movieId)->count() == 0) {
            return $this->error('Movie not found');
        }

        $movie = Movie::where('id', $movieId)
        ->with('images')
        ->with('casts')
        ->with('casts.cast')
        ->get();

        return $this->success('Movie listed', [
            'movie' => $movie,
        ]);
    }
}

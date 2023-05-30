<?php

namespace App\Http\Repository;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieRepository
{
    public function getLatestMovies()
    {
        return Movie::select('*')->where('type', 'movie')->orderby('released', 'desc')->limit(8)->get();
    }

    public function getLatestSeries()
    {
        return Movie::select('*')->where('type', 'series')->orderby('released', 'desc')->limit(8)->get();
    }

    public function getTopRatedAllVideos()
    {
        return Movie::select('*')->orderby('imdb_rating', 'desc')->limit(8)->get();
    }

    public function getTopSeries()
    {
        return Movie::select('*')->where('type', 'series')->orderby('imdb_rating', 'desc')->limit(4)->get();
    }

    public function getTopMovies()
    {
        return Movie::select('*')->where('type', 'movie')->orderby('imdb_rating', 'desc')->limit(4)->get();
    }

    public function getMovie(Movie $movie): Movie
    {
        return $movie->load(['genres', 'countries', 'people', 'ratings']);
    }

    public function getSearchedMovie(Request $request)
    {
        $query = $request['name'];
        return Movie::where('title', 'LIKE', "%$query%")
                        ->paginate(8);
    }

    public function getAllMovies()
    {
        return Movie::where('type', 'movie')->paginate(8);
    }

    public function getAllSeries()
    {
        return Movie::where('type', 'series')->paginate(8);
    }

}

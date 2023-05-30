<?php

namespace App\Http\Controllers;

use App\Http\Repository\MovieRepository;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TemplateController extends Controller
{
    public function index(): View
    {
        $latestMovies = resolve(MovieRepository::class)->getLatestMovies();
        $latestSeries = resolve(MovieRepository::class)->getLatestSeries();
        $topRatedAllVideos = resolve(MovieRepository::class)->getTopRatedAllVideos();
        $topSeries = resolve(MovieRepository::class)->getTopSeries();

        return view('index', [
            'latestMovies' => $latestMovies,
            'latestSeries' => $latestSeries,
            'topRatedAllVideos' => $topRatedAllVideos,
            'topSeries' => $topSeries,
        ]);
    }

    public function show(Movie $movie): View
    {
        $movie = resolve(MovieRepository::class)->getMovie($movie);
        $topSeries = resolve(MovieRepository::class)->getTopSeries();
        $topMovies = resolve(MovieRepository::class)->getTopMovies();

        return view('movie-details', [
            'movie' => $movie,
            'topSeries' => $topSeries,
            'topMovies' => $topMovies
        ]);
    }

    public function search(Request $request): View
    {
        $response = resolve(MovieRepository::class)->getSearchedMovie($request);

        return view('search', ['movies' => $response]);
    }

    public function movies(): View
    {
        $movies = resolve(MovieRepository::class)->getAllMovies();

        return view('movies', ['movies' => $movies]);
    }

    public function series(): View
    {
        $series = resolve(MovieRepository::class)->getAllSeries();

        return view('series', ['series' => $series]);
    }

    public function faq(): View
    {
        return view('faq');
    }

    public function help(): View
    {
        return view('help');
    }

    public function terms(): View
    {
        return view('terms');
    }

    public function email(Request $request)
    {
        $email = $request->get('email');
        return redirect(route('index'));
    }

}

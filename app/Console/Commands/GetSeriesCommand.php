<?php

namespace App\Console\Commands;

use App\Models\Country;
use App\Models\Genre;
use App\Models\Movie;
use App\Models\Person;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class GetSeriesCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'get:series';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'get all series details';

    private mixed $apiKey;

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(): int
    {
        $this->apiKey = config('api.movies_api_key');
        $this->alert('start scraping.');

        $file = file_get_contents(storage_path('data series.json'), 'data.json');
        $data = json_decode($file);

        foreach ($data as $id){
            if (!Movie::where('imdb_id', $id)->first()){
                if ($movie = $this->getMovie($id))
                    $this->saveMovie($movie);
            }
        }

        $this->alert('completed saving articles in database.');

        return Command::SUCCESS;
    }

    public function getMovie($id) : array | bool
    {
        try {
            $this->info('take content from api.');

            $url = "https://www.omdbapi.com/?apikey={$this->apiKey}&i={$id}";
            $response = Http::withHeaders([
                'User-Agent' => "Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/109.0"
            ])->get($url);

            $this->info('taking data from api is completed.');

            $content = $response->json();

            if ($content)
                return $content;

            $this->alert('content is empty.');
            return false;

        }catch (\Exception $exception){
            $this->error('taking data is not complete.' . $exception->getMessage());
            return false;
        }
    }

    public function downloadPoster(string $poster): string | bool
    {
        try {
            $filePath = 'public/' . now()->format('Y-m-d') . '/';
            if(!Storage::exists('public/' . $filePath))
                Storage::createDirectory($filePath);
            $fileName = Str::random() .'0.jpg';
            $contents = Http::get($poster)->body();
            Storage::put($filePath. $fileName, $contents);
            $img = Image::make(storage_path('app/' . $filePath. $fileName));
            $img->resize(700, 350, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->save(storage_path('app/' . $filePath . 'medium_') . $fileName, 70);
            return Str::replace('public/', 'storage/', $filePath) . $fileName;
        }catch (\Exception $exception){
            return false;
        }
    }

    public function saveMovie($movie): bool
    {
        $this->info("start saving movies in database.");

        $this->info("saving movie `{$movie['Title']}`");

        $poster = $this->downloadPoster($movie['Poster']);
        if($poster === false){
            $this->error("movie `{$movie['Title']}` does not have downloaded file.");
            return false;
        }

        $slug = Str::slug($movie['Title']);
        if (Movie::where('slug', $slug)->first()) {
            $this->error("movie `{$movie['Title']}` was repeated.");
            return false;
        }

        $newMovie = Movie::create([
            'title' => $movie['Title'],
            'slug' => $slug,
            'year' => $movie['Year'],
            'rated' => $movie['Rated'],
            'released' => $movie['Released'] == "N/A" ? null : Carbon::parse($movie['Released'])->format('Y-m-d'),
            'runtime' => $movie['Runtime'],
            'plot' => $movie['Plot'],
            'language' => $movie['Language'],
            'awards' => $movie['Awards'],
            'poster' => $poster,
            'meta_score' => $movie['Metascore'],
            'imdb_rating' => $movie['imdbRating'],
            'imdb_votes' => $movie['imdbVotes'],
            'imdb_id' => $movie['imdbID'],
            'type' => $movie['Type'],
            'total_seasons' => $movie['totalSeasons'],
        ]);

        $genres = explode(',', $movie['Genre']);
        if (count($genres)) {
            $genreIds = [];
            foreach ($genres as $genre) {
                $genreIds[] = Genre::firstOrCreate(['name' => $genre])->id;
            }
            $newMovie->genres()->sync($genreIds);
        }

        $countries = explode(',', $movie['Country']);
        if (count($countries)) {
            $countryIds = [];
            foreach ($countries as $country) {
                $countryIds[] = Country::firstOrCreate(['name' => $country])->id;
            }
            $newMovie->countries()->sync($countryIds);
        }

        $writers = explode(',', $movie['Writer']);
        if (count($writers)) {
            $writerIds = [];
            foreach ($writers as $writer) {
                $writerIds[] = Person::firstOrCreate(['name' => $writer])->id;
            }
            $newMovie->people()->attach($writerIds, ['type' => 'writer']);
        }

        $directors = explode(',', $movie['Director']);
        if (count($directors)) {
            $directorIds = [];
            foreach ($directors as $director) {
                $directorIds[] = Person::firstOrCreate(['name' => $director])->id;
            }
            $newMovie->people()->attach($directorIds, ['type' => 'director']);
        }

        $actors = explode(',', $movie['Actors']);
        if (count($actors)) {
            $actorIds = [];
            foreach ($actors as $actor) {
                $actorIds[] = Person::firstOrCreate(['name' => $actor])->id;
            }
            $newMovie->people()->attach($actorIds, ['type' => 'actor']);
        }

        $ratings = $movie['Ratings'];
        if (count($ratings)){
            foreach ($ratings as $rating) {
                $newMovie->Ratings()->create([
                    'name' => $rating['Source'],
                    'value' => $rating['Value']
                ]);
            }
        }
        return true;
    }
}

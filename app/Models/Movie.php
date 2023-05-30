<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Movie extends Model
{
    use HasFactory;

    public function getRouteKeyName()
    {
        return 'slug';
    }

    protected $fillable = [
        'title',
        'slug',
        'year',
        'rated',
        'released',
        'runtime',
        'plot',
        'language',
        'awards',
        'poster',
        'meta_score',
        'imdb_rating',
        'imdb_votes',
        'imdb_id',
        'type',
        'dvd',
        'box_office',
        'production',
        'website',
        'trailer_embed',
        'video_embed',
        'total_seasons'
    ];

    public function genres(): BelongsToMany
    {
        return $this->belongsToMany(Genre::class);
    }

    public function countries(): BelongsToMany
    {
        return $this->belongsToMany(Country::class);
    }

    public function people(): BelongsToMany
    {
        return $this->belongsToMany(Person::class)->withPivot('type');
    }

    public function ratings(): HasMany
    {
        return $this->hasMany(Rating::class);
    }

}

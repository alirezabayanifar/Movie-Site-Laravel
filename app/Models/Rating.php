<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Rating extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'value'
    ];

    public $timestamps = false;

    public function movie(): BelongsTo
    {
        return $this->belongsTo(Movie::class);
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    use HasFactory;

    // Campos que se pueden asignar masivamente
    protected $fillable = [
        'title',
        'artist',
        'state',
        'release_year',
        'price',
        'cover_image',
    ];

    // Relación muchos a muchos con Genre
    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'genre_record', 'record_id', 'genre_id')
            ->select('genres.id as genre_id', 'genres.name'); // Califica las columnas
    }
}

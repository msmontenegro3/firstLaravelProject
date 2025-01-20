<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    // Campos que se pueden asignar masivamente
    protected $fillable = [
        'name',
    ];

    // Relación muchos a muchos con Record
    public function records()
    {
        return $this->belongsToMany(Record::class, 'genre_record', 'genre_id', 'record_id')
            ->select('records.id as record_id', 'records.title', 'records.release_year');
    }
}

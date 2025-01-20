<?php

namespace Database\Seeders;

use App\Models\Record;
use App\Models\Genre;
use Illuminate\Database\Seeder;


class RecordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Genera 100 discos ficticios y les asigna géneros aleatorios
        Record::factory(100)->create()->each(function ($record) {
            $genres = Genre::inRandomOrder()->take(2)->pluck('id');
            $record->genres()->attach($genres);
        });
    }
}

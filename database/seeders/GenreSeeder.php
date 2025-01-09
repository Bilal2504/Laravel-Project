<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    public function run()
    {
        $genres = [
            ['name' => 'Action'],
            ['name' => 'Adventure'],
            ['name' => 'RPG'],
            ['name' => 'Shooter'],
            ['name' => 'Puzzle'],
            ['name' => 'Platform'],
            ['name' => 'Sports'],
            ['name' => 'Racing'],
        ];

        foreach ($genres as $genre) {
            Genre::create($genre);
        }
    }
}
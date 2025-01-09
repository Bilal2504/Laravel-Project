<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Game;
use App\Models\Genre;
use Faker\Factory as Faker;

class GameSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        $genres = Genre::all();

        // Jeux prédéfinis
        $games = [
            [
                'title' => 'The Legend of Zelda: Breath of the Wild',
                'description' => 'An action-adventure game developed and published by Nintendo.',
                'price' => 59.99,
                'genre_id' => $genres->random()->id,
            ],
            [
                'title' => 'Super Mario Odyssey',
                'description' => 'A platform game developed and published by Nintendo.',
                'price' => 49.99,
                'genre_id' => $genres->random()->id,
            ],
        ];

        // Ajouter les jeux prédéfinis
        foreach ($games as $game) {
            Game::create($game);
        }

        // Générer 100 jeux aléatoires
        for ($i = 1; $i <= 100; $i++) {
            Game::create([
                'title' => "Game Title $i",
                'description' => "This is the description for Game Title $i.",
                'price' => $faker->randomFloat(2, 10, 100),
                'genre_id' => $genres->random()->id,
            ]);
        }
    }
}
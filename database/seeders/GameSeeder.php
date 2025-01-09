<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Game;
use App\Models\Genre;

class GameSeeder extends Seeder
{
    public function run()
    {
        // Récupérer tous les genres
        $genres = Genre::all();

        // Vous pouvez ajouter des jeux manuellement ici si nécessaire
        // Exemple :
        // Game::create([
        //     'title' => 'Example Game',
        //     'description' => 'This is an example game description.',
        //     'price' => 29.99,
        //     'genre_id' => $genres->random()->id,
        // ]);
    }
}
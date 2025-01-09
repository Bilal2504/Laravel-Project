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

        $games = [
            [
                'title' => 'Minecraft',
                'description' => 'Jeu de type bac à sable en monde ouvert où les joueurs peuvent construire, explorer et survivre dans un univers fait de blocs. Le jeu offre une liberté créative totale avec différents modes de jeu (Survie, Créatif, Aventure) et un système de craft élaboré.',
                'price' => 29.99,
                'genre_id' => $genres->random()->id,
            ],
            [
                'title' => 'Grand Theft Auto V',
                'description' => 'Action-aventure en monde ouvert se déroulant à Los Santos. Le jeu suit trois criminels différents dans leurs aventures à travers la ville. Propose un mode histoire riche et un mode online constamment mis à jour depuis 2013.',
                'price' => 59.99,
                'genre_id' => $genres->random()->id,
            ],
            [
                'title' => 'Tetris',
                'description' => 'Version mobile du célèbre jeu de puzzle où le joueur doit empiler des blocs géométriques pour compléter des lignes. Cette version de 2006 a révolutionné le jeu mobile avec plus de 100 millions de téléchargements.',
                'price' => 0.99,
                'genre_id' => $genres->random()->id,
            ],
            [
                'title' => 'Wii Sports',
                'description' => 'Collection de jeux de sports utilisant les contrôles par mouvement de la Wii. Inclut le tennis, le bowling, le golf, la boxe et le baseball. Un titre qui a démocratisé le jeu vidéo auprès d\'un public plus large.',
                'price' => 19.99,
                'genre_id' => $genres->random()->id,
            ],
            [
                'title' => 'PUBG: Battlegrounds',
                'description' => 'Battle royale où 100 joueurs s\'affrontent jusqu\'au dernier survivant. Les joueurs doivent chercher des armes et des équipements tout en évitant une zone mortelle qui rétrécit progressivement.',
                'price' => 29.99,
                'genre_id' => $genres->random()->id,
            ],
            [
                'title' => 'Mario Kart 8 Deluxe',
                'description' => 'Jeu de course arcade mettant en scène les personnages de l\'univers Mario. Propose 48 circuits, un mode multijoueur local et en ligne, et des batailles de ballons.',
                'price' => 59.99,
                'genre_id' => $genres->random()->id,
            ],
            [
                'title' => 'Red Dead Redemption 2',
                'description' => 'Western épique se déroulant en 1899. Suit l\'histoire d\'Arthur Morgan et du gang Van der Linde dans l\'Ouest américain. Offre un monde ouvert immersif avec une histoire profonde.',
                'price' => 59.99,
                'genre_id' => $genres->random()->id,
            ],
            [
                'title' => 'Super Mario Bros',
                'description' => 'Jeu de plateforme iconique où Mario doit sauver la princesse Peach du maléfique Bowser. Le joueur traverse 8 mondes remplis d\'ennemis et de power-ups.',
                'price' => 59.99,
                'genre_id' => $genres->random()->id,
            ],
            [
                'title' => 'The Witcher 3: Wild Hunt',
                'description' => 'RPG en monde ouvert suivant Geralt de Riv dans sa quête pour retrouver Ciri. Propose un monde médiéval-fantastique immense, des quêtes complexes avec des choix moraux.',
                'price' => 39.99,
                'genre_id' => $genres->random()->id,
            ],
            [
                'title' => 'Human Fall Flat',
                'description' => 'Jeu de puzzle-plateforme physique où les joueurs contrôlent des personnages maladroits dans des niveaux surréalistes. Le jeu propose un mode solo et multijoueur.',
                'price' => 19.99,
                'genre_id' => $genres->random()->id,
            ],
            [
                'title' => 'Wii Fit',
                'description' => 'Jeu de fitness utilisant la Wii Balance Board. Propose des exercices de yoga, musculation, aérobic et jeux d\'équilibre.',
                'price' => 29.99,
                'genre_id' => $genres->random()->id,
            ],
            [
                'title' => 'Diablo III',
                'description' => 'Action-RPG hack\'n\'slash où les joueurs combattent les forces démoniaques. Propose 5 classes de personnages, un système de butin addictif.',
                'price' => 39.99,
                'genre_id' => $genres->random()->id,
            ],
            [
                'title' => 'The Elder Scrolls V: Skyrim',
                'description' => 'RPG en monde ouvert se déroulant dans la province de Bordeciel. Le joueur incarne l\'Enfant de Dragon dans une quête épique.',
                'price' => 39.99,
                'genre_id' => $genres->random()->id,
            ],
            [
                'title' => 'Terraria',
                'description' => 'Jeu d\'aventure-sandbox en 2D mélangeant exploration, combat et construction. Les joueurs peuvent creuser, construire et combattre dans un monde généré aléatoirement.',
                'price' => 9.99,
                'genre_id' => $genres->random()->id,
            ],
            [
                'title' => 'The Last of Us',
                'description' => 'Aventure post-apocalyptique suivant Joel et Ellie dans un monde ravagé par une infection fongique. Mélange survie, action et narration émotionnelle.',
                'price' => 39.99,
                'genre_id' => $genres->random()->id,
            ],
            [
                'title' => 'Red Dead Redemption',
                'description' => 'Western en monde ouvert suivant John Marston, ancien hors-la-loi forcé de traquer ses anciens compagnons.',
                'price' => 29.99,
                'genre_id' => $genres->random()->id,
            ],
            [
                'title' => 'The Legend of Zelda: Breath of the Wild',
                'description' => 'Aventure en monde ouvert révolutionnaire où Link doit sauver Hyrule. Offre une liberté d\'exploration sans précédent.',
                'price' => 59.99,
                'genre_id' => $genres->random()->id,
            ],
            [
                'title' => 'Cyberpunk 2077',
                'description' => 'RPG futuriste en monde ouvert se déroulant à Night City. Le joueur incarne V, un mercenaire cherchant l\'immortalité.',
                'price' => 59.99,
                'genre_id' => $genres->random()->id,
            ],
            [
                'title' => 'God of War',
                'description' => 'Action-aventure suivant Kratos et son fils Atreus dans les royaumes nordiques. Mélange combat intense et narration émotionnelle.',
                'price' => 49.99,
                'genre_id' => $genres->random()->id,
            ],
            [
                'title' => 'The Witcher 2: Assassins of Kings',
                'description' => 'RPG d\'action mature suivant Geralt de Riv dans une intrigue politique complexe. Propose des choix importants affectant l\'histoire.',
                'price' => 19.99,
                'genre_id' => $genres->random()->id,
            ],
        ];

        foreach ($games as $game) {
            Game::create($game);
        }
    }
}

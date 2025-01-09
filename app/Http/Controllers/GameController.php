<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Genre;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index(Request $request)
    {
        $query = Game::query();
        $genres = Genre::all();
        
        if ($request->has('genres')) {
            $query->whereIn('genre_id', $request->genres);
        }

        $games = $query->paginate(12);
        
        return view('games.index', compact('games', 'genres'));
    }

    public function create()
    {
        $genres = Genre::all();
        return view('games.create', compact('genres'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'genre_id' => 'required|exists:genres,id',
            'price' => 'required|numeric|min:0',
        ]);

        Game::create($request->all());

        return redirect()->route('games.index')
            ->with('success', 'Jeu créé avec succès.');
    }

    public function show(Game $game)
    {
        return view('games.show', compact('game'));
    }

    public function edit(Game $game)
    {
        $genres = Genre::all();
        return view('games.edit', compact('game', 'genres'));
    }

    public function update(Request $request, Game $game)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'genre_id' => 'required|exists:genres,id',
            'price' => 'required|numeric|min:0',
        ]);

        $game->update($request->all());

        return redirect()->route('games.index')
            ->with('success', 'Jeu mis à jour avec succès.');
    }

    public function destroy(Game $game)
    {
        $game->delete();

        return redirect()->route('games.index')
            ->with('success', 'Jeu supprimé avec succès.');
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\Game\CreateGameRequest;
use App\Http\Requests\Game\UpdateGameRequest;
use App\Models\Game;
use App\Models\Genre;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $games = Game::query()->paginate(10);
        return view('game.index', compact('games'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genres = Genre::query()->get();
        return view('game.create', compact('genres'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateGameRequest $request)
    {
        $body = $request->all();

        $game = Game::create([
            'name' => $body['name'],
            'summary' => $body['summary'],
            'release_date' => $body['release_date'],
            'developer' => $body['developer'],
            'score' => $body['score'],
            'cover' => $request->hasFile('cover') ? $request->file('cover')->store('covers', 'public') : null,
            'genre_id' => $body['genre_id'],
        ]);

        return redirect()->route('game.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $game = Game::query()->findOrFail($id);
        $genres = Genre::query()->get();
        return view('game.show', compact('game', 'genres'));
    }

    public function detail(string $id)
    {
        $game = Game::query()->findOrFail($id);
        return view('game.detail', compact('game'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $game = Game::query()->findOrFail($id);
        $genres = Genre::query()->get();
        return view('game.edit', compact('game', 'genres'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGameRequest $request, string $id)
    {
        $body = $request->all();
        $game = Game::query()->findOrFail($id);

        $game->update([
            'name' => $body['name'],
            'summary' => $body['summary'],
            'release_date' => $body['release_date'],
            'developer' => $body['developer'],
            'score' => $body['score'],
            'cover' => $request->hasFile('cover') ? $request->file('cover')->store('covers', 'public') : null,
            'genre_id' => $body['genre_id'],
        ]);

        return redirect()->route('game.index', $game);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $game = Game::query()->findOrFail($id);
        $game->delete();

        return redirect()->route('game.index');
    }
}

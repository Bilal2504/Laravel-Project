<?php 

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class GameController extends Controller
{
    use AuthorizesRequests;

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
        $this->authorize('create games');

        $genres = Genre::all();
        return view('games.create', compact('genres'));
    }

    public function store(Request $request)
    {
        $this->authorize('create games');

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'genre_id' => 'required|exists:genres,id',
            'price' => 'required|numeric|min:0',
            'image' => 'nullable|image',
        ]);

        $game = new Game($request->all());

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
            $game->image = $path;
        }

        $game->save();

        return redirect()->route('games.index')
            ->with('success', 'Jeu créé avec succès.');
    }

    public function show(Game $game)
    {
        return view('games.show', compact('game'));
    }

    public function edit(Game $game)
    {
        $this->authorize('edit games');

        $genres = Genre::all();
        return view('games.edit', compact('game', 'genres'));
    }

    public function update(Request $request, Game $game)
    {
        $this->authorize('edit games');

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'genre_id' => 'required|exists:genres,id',
            'price' => 'required|numeric|min:0',
            'image' => 'nullable|image',
        ]);

        $game->fill($request->all());

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
            $game->image = $path;
        }

        $game->save();

        return redirect()->route('games.index')
            ->with('success', 'Jeu mis à jour avec succès.');
    }

    public function destroy(Game $game)
    {
        $this->authorize('delete games');

        $game->delete();

        return redirect()->route('games.index')
            ->with('success', 'Jeu supprimé avec succès.');
    }

    public function delete(Game $game)
    {
        return view('games.delete', compact('game'));
    }
}
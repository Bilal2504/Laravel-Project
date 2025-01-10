<?php

namespace App\Http\Controllers;

use App\Http\Requests\Type\CreateTypeRequest;
use App\Http\Requests\Type\UpdateTypeRequest;
use App\Models\Genre;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $genres = Genre::query()->paginate(10);

        return view('genre.index', compact('genres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('genre.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateTypeRequest $request)
    {
        $body = $request->all();

        $genre = Genre::create([
            'name' => $body['name'],
        ]);

        return redirect()->route('genre.show', $genre);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $genre = Genre::query()->findOrFail($id);

        return view('genre.show', compact('genre'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $genre = Genre::query()->findOrFail($id);

        return view('genre.edit', compact('genre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTypeRequest $request, string $id)
    {
        $body = $request->all();

        $genre = Genre::query()->findOrFail($id);
        $genre->update([
            'name' => $body['name'],
        ]);

        return redirect()->route('genre.index', $genre);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $genre = Genre::query()->findOrFail($id);
        $genre->delete();

        return redirect()->route('genre.index');
    }
}

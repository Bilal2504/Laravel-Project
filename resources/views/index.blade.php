<!DOCTYPE html>
<html>
<head>
    <title>Jeux Vidéo</title>
</head>
<body>
    <h1>Liste des Jeux Vidéo</h1>
    <a href="{{ route('games.create') }}">Ajouter un nouveau jeu</a>
    <ul>
        @foreach($games as $game)
            <li>
                <h2>{{ $game->title }}</h2>
                <p>{{ $game->description }}</p>
                <p>Genre: {{ $game->genre }}</p>
                <p>Prix: ${{ $game->price }}</p>
                <a href="{{ route('games.show', $game->id) }}">Voir</a>
                <a href="{{ route('games.edit', $game->id) }}">Modifier</a>
                <form action="{{ route('games.destroy', $game->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Supprimer</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
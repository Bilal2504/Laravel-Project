<!DOCTYPE html>
<html>
<head>
    <title>{{ $game->title }}</title>
</head>
<body>
    <h1>{{ $game->title }}</h1>
    <p>{{ $game->description }}</p>
    <p>Genre: {{ $game->genre }}</p>
    <p>Prix: ${{ $game->price }}</p>
    <a href="{{ route('games.index') }}">Retour à la liste</a>
</body>
</html>
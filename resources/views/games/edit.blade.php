<!DOCTYPE html>
<html>
<head>
    <title>Modifier un Jeu Vidéo</title>
</head>
<body>
    <h1>Modifier un Jeu Vidéo</h1>
    <form action="{{ route('games.update', $game->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Titre:</label>
        <input type="text" id="title" name="title" value="{{ $game->title }}" required>
        <label for="description">Description:</label>
        <textarea id="description" name="description" required>{{ $game->description }}</textarea>
        <label for="genre">Genre:</label>
        <input type="text" id="genre" name="genre" value="{{ $game->genre }}" required>
        <label for="price">Prix:</label>
        <input type="number" id="price" name="price" value="{{ $game->price }}" step="0.01" required>
        <button type="submit">Modifier</button>
    </form>
</body>
</html>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Modifier un Jeu Vidéo') }}
        </h2>
    </x-slot>

    <div class="container mx-auto py-8">
        <div class="max-w-2xl mx-auto bg-white p-8 rounded-xl shadow-md">
            <h1 class="text-2xl font-bold mb-6">Modifier un Jeu Vidéo</h1>
            @if ($errors->any())
                <div class="mb-4">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="text-red-500">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('games.update', $game->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label for="title" class="block text-sm font-medium text-gray-700">Titre:</label>
                    <input type="text" id="title" name="title" value="{{ $game->title }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                </div>
                <div class="mb-4">
                    <label for="description" class="block text-sm font-medium text-gray-700">Description:</label>
                    <textarea id="description" name="description" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>{{ $game->description }}</textarea>
                </div>
                <div class="mb-4">
                    <label for="genre_id" class="block text-sm font-medium text-gray-700">Genre:</label>
                    <select id="genre_id" name="genre_id" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                        @foreach ($genres as $genre)
                            <option value="{{ $genre->id }}" @if($game->genre_id == $genre->id) selected @endif>{{ $genre->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-4">
                    <label for="price" class="block text-sm font-medium text-gray-700">Prix:</label>
                    <input type="number" id="price" name="price" value="{{ $game->price }}" step="0.01" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                </div>
                <div class="mb-4">
                    <label for="image" class="block text-sm font-medium text-gray-700">Image:</label>
                    <input type="file" id="image" name="image" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    @if ($game->image)
                        <img src="{{ asset('storage/' . $game->image) }}" alt="{{ $game->title }}" class="mt-2 w-32 h-32 object-cover">
                    @endif
                </div>
                <div class="flex items-center justify-end">
                    <x-primary-button type="submit">Modifier</x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
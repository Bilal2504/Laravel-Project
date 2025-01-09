<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $game->title }}
        </h2>
    </x-slot>

    <div class="container mx-auto py-8">
        <div class="max-w-2xl mx-auto bg-white p-8 rounded-xl shadow-md">
            <h1 class="text-2xl font-bold mb-6">{{ $game->title }}</h1>
            @if ($game->image)
                <div class="mb-4">
                    <img src="{{ asset('storage/' . $game->image) }}" alt="{{ $game->title }}" class="w-full h-auto object-cover rounded-md">
                </div>
            @endif
            <div class="mb-4">
                <p class="text-gray-700">{{ $game->description }}</p>
            </div>
            <div class="mb-4">
                <p class="text-gray-700"><strong>Genre:</strong> {{ $game->genre->name }}</p>
            </div>
            <div class="mb-4">
                <p class="text-gray-700"><strong>Prix:</strong> {{ $game->price }}€</p>
            </div>
            <div class="flex items-center justify-between">
                <a href="{{ route('games.index') }}" class="px-4 py-2 bg-indigo-500 text-white rounded-md hover:bg-indigo-700">Retour à la liste</a>
                <div class="flex items-center space-x-4">
                    <a href="{{ route('games.edit', $game->id) }}" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-700">Modifier</a>
                    <form action="{{ route('games.destroy', $game->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-700">Supprimer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
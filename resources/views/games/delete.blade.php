<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Supprimer un Jeu Vidéo') }}
        </h2>
    </x-slot>

    <div class="container mx-auto py-8">
        <div class="max-w-2xl mx-auto bg-white p-8 rounded-xl shadow-md">
            <h1 class="text-2xl font-bold mb-6">Supprimer un Jeu Vidéo</h1>
            <p class="mb-4">Êtes-vous sûr de vouloir supprimer le jeu <strong>{{ $game->title }}</strong> ? Cette action est irréversible.</p>
            <div class="flex items-center justify-between">
                <a href="{{ route('games.index') }}" class="text-indigo-600 hover:text-indigo-900">Annuler</a>
                <form action="{{ route('games.destroy', $game->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <x-primary-button type="submit">Supprimer</x-primary-button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
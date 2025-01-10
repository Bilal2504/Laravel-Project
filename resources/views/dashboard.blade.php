<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="container max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
            <h1 class="text-2xl font-bold mb-4">Featured Games</h1>
            <div class="space-y-6">
                @foreach ($games as $game)
                <div class="bg-white p-4 rounded-lg shadow-sm flex items-start">
                    <img src="{{ $game->cover ? str_starts_with($game->cover, 'http') ? $game->cover : asset('/storage\/'.$game->cover) : 'https://via.placeholder.com/150' }}" alt="{{ $game->name }}"
                        class="w-24 h-24 rounded-lg mr-4">
                    <div>
                        <h2 class="text-xl font-semibold">
                            <a href="{{ route('game.detail', $game) }}">{{ $game->name }}</a>
                        </h2>
                        <p class="text-sm text-gray-600">Score: {{ $game->score ? $game->score : 0 }}</p>
                        <p class="text-sm text-gray-600">{{ $game->summary }}</p>
                        <p class="text-sm text-gray-400">Developer: {{ $game->developer }}</p>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="my-4">
                {{ $games->links() }}
            </div>
        </div>
    </div>
</x-app-layout>

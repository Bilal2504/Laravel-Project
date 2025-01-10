<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <a href="{{ route('dashboard') }}"
                class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150">
                ← Retour
            </a>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ $game->name }}
            </h2>

        </div>

    </x-slot>

    <div class="container max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
        <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
            <h1 class="text-2xl font-bold mb-4">{{ $game->name }}</h1>
            <div class="flex flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-6">
                <!-- Thumbnail Section -->
                <div class="flex-shrink-0">
                    <img src="{{ $game->cover ? str_starts_with($game->cover, 'http') ? $game->cover : asset('/storage\/'.$game->cover) : 'https://via.placeholder.com/300' }}" alt="{{ $game->name }}" class="w-64 h-64 rounded-lg">
                </div>

                <!-- Game Details Section -->
                <div class="flex-grow">
                    <p class="text-sm text-gray-800 mb-4">
                        {{ $game->summary}}
                    </p>

                    <div class="bg-white p-4 rounded-lg shadow-sm">
                        <h2 class="text-lg font-semibold mb-2">Game Details</h2>
                        <div class="space-y-2 text-sm text-gray-700">
                            <p><span class="font-medium">Platform:</span> TBD</p>
                            <p><span class="font-medium">Developer(s):</span> {{ $game->developer }}</p>
                            <p><span class="font-medium">Genre(s):</span> {{ $game->genre->name }}</p>
                            <p><span class="font-medium">NA Release Date:</span> {{ $game->release_date }}</p>
                            <p><span class="font-medium">MVGL User Score:</span> {{ $game->score }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>

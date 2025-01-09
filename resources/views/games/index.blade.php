<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Jeux Vidéo') }}
        </h2>
    </x-slot>

    <div class="container mx-auto py-8">
        <div class="grid grid-cols-[1fr,minmax(20rem,max-content)] gap-8 items-start">
            <div class="grid grid-cols-3 gap-6">
                @foreach ($games as $game)
                    <article class="group relative rounded-2xl overflow-hidden">
                        <div class="size-full bg-gray-300 flex items-center justify-center p-6 filter group-hover:brightness-50 transition-all duration-200">
                            @if ($game->image)
                                <img src="{{ asset('storage/' . $game->image) }}" alt="{{ $game->title }}" class="w-full h-full object-cover">
                            @else
                                <p class="text-2xl font-bold text-center">{{ $game->title }}</p>
                            @endif
                        </div>
                        <div class="absolute rounded-2xl w-full h-2/3 -bottom-2/3 bg-white/80 backdrop-blur-md group-hover:bottom-0 transition-all duration-200 px-5 py-4 shadow-xl space-y-4">
                            <h1 class="text-2xl font-bold leading-none">{{ $game->title }}</h1>
                            <p>{{ $game->description }}</p>
                            <p>Genre: {{ $game->genre->name }}</p>
                            <p>Prix: ${{ $game->price }}</p>
                        </div>
                        <a href="{{ route('games.show', ['game' => $game]) }}" class="absolute inset-0"></a>
                    </article>
                @endforeach

                <div class="col-span-full">
                    {{ $games->onEachSide(0)->links() }}
                </div>
            </div>

            <aside class="bg-white shadow-lg rounded-2xl p-6 sticky top-8">
                <div class="mb-4">
                    <a href="{{ route('games.create') }}" class="px-4 py-2 bg-green-500 text-white rounded-md hover:bg-green-700">Créer un nouveau projet</a>
                </div>
                <form class="space-y-4" method="GET" action="{{ route('games.index') }}">
                    <div class="flex flex-col">
                        <div class="flex items-center gap-2 mb-2">
                            <h2 class="text-lg font-semibold">Genre</h2>
                            <a href="{{ route('games.index', ['genres' => $genres->pluck('id')->toArray()]) }}" class="text-sm">Tout sélectionner</a>
                        </div>
                        @foreach ($genres as $genre)
                            <x-input-label>
                                <input type="checkbox" name="genres[]" value="{{ $genre->id }}" @checked(in_array($genre->id, request()->query('genres', [])))>
                                <span class="ml-1">{{ $genre->name }}</span>
                            </x-input-label>
                        @endforeach
                    </div>
                    <div class="flex items-center gap-4">
                        <x-secondary-button type="submit">Filtrer</x-secondary-button>
                        @if (request()->has('genres'))
                            <a href="{{ route('games.index') }}">Réinitialiser</a>
                        @endif
                    </div>
                </form>
            </aside>
        </div>
    </div>
</x-app-layout>
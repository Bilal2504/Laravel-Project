<x-app-layout>
    <x-slot name="header">
        <a href="{{ url()->previous() }}"
            class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150">
            ← Retour
        </a>
    </x-slot>

    <div class="container max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
        <section class="grid items-start gap-8">
            <form class="w-full mx-auto" method="POST" action="{{ route('game.update', $game) }}">
                @method('PUT')
                @csrf
                <div class="mb-4">
                    <label for="name" class="block mb-2 font-medium text-gray-900 dark:text-white">
                        {{ __("Name") }}</label>
                    <input type="text" id="name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        name="name"
                        value="{{ $game->name }}"
                        required />
                </div>

                <div class="mb-4">
                    <label for="genre_id" class="block mb-2 font-medium text-gray-900 dark:text-white">
                        {{ __("Genre") }}</label>
                    <select id="genre_id"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        name="genre_id"
                    >
                        <option selected disabled>Choose a genre</option>
                        @foreach ($genres as $genre)
                        <option value="{{ $genre->id }}" selected="{{ $game->genre_id == $genre->id ? 'selected' : '' }}">{{ ucfirst($genre->name) }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-4">
                    <label for="cover" class="block mb-2 font-medium text-gray-900 dark:text-white">
                        {{ __("Cover") }}</label>
                    <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50"
                        id="cover"
                        name="cover"
                        type="file"
                        aria-describedby="cover_help"
                    />
                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="cover_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
                </div>

                <div class="mb-4">
                    <label for="summary" class="block mb-2 font-medium text-gray-900 dark:text-white">
                        {{ __("Summary") }}</label>
                    <textarea id="summary" rows="4"
                        name="summary"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    >{{ $game->summary }}</textarea>
                </div>

                <div class="mb-4">
                    <label for="release_date" class="block mb-2 font-medium text-gray-900 dark:text-white">
                        {{ __("Release date") }}</label>
                    <input type="date" id="release_date"
                        class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        name="release_date"
                        value="{{ $game->release_date }}"
                        required />
                </div>

                <div class="mb-4">
                    <label for="developer" class="block mb-2 font-medium text-gray-900 dark:text-white">
                        {{ __("Developer") }}</label>
                    <input type="string" id="developer"
                        class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        name="developer"
                        value="{{ $game->developer }}"
                    />
                </div>

                <div class="mb-4">
                    <label for="score" class="block mb-2 font-medium text-gray-900 dark:text-white">
                        {{ __("Score") }}</label>
                    <input type="number" id="score"
                        class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        name="score"
                        value="{{ $game->score }}"
                    />
                </div>

                <div class="mb-5 text-center">
                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Update
                    </button>
                </div>
            </form>
        </section>
    </div>
</x-app-layout>

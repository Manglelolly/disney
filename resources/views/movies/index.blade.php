<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disney Movies</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-indigo-950 text-white font-sans">
    <div class="container mx-auto p-5">
        <!-- Header -->
        <header class="flex justify-between items-center border-b border-gray-800 pb-5 mb-5">
            <h1 class="text-4xl font-bold text-orange-300">Disney Films</h1>
            <a href="{{ route('movies.create') }}" class="text-orange-100 bg-orange-300 px-4 py-2 rounded-full hover:bg-orange-400 transition duration-200">
                Nieuwe Film Toevoegen
            </a>
        </header>

        <!-- Movie List -->
        <div class="grid grid-cols-6 gap-1 bg-indigo-900 p-8 rounded-lg shadow-lg">
            <!-- Table Headers -->
            <div class="font-bold text-orange-300">Titel</div>
            <div class="font-bold text-orange-300">Hoofdpersonen</div>
            <div class="font-bold text-orange-300">Release Datum</div>
            <div class="font-bold text-orange-300">Omzet ($)</div>
            <div class="font-bold text-orange-300">Start Budget ($)</div>
            <div class="font-bold text-orange-300">Acties</div>

            @foreach($movies as $movie)
                <div class="border-b border-indigo-950 text-orange-200 py-2">{{ $movie->titel }}</div>
                <div class="border-b border-indigo-950 text-orange-200 py-2">{{ $movie->hoofdpersonen }}</div>
                <div class="border-b border-indigo-950 text-orange-200 py-2">{{ $movie->release_datum }}</div>
                <div class="border-b border-indigo-950 text-orange-200 py-2">{{ $movie->omzet }}</div>
                <div class="border-b border-indigo-950 text-orange-200 py-2">{{ $movie->bedrag }}</div>
                <div class="border-b border-indigo-950 text-orange-200 py-2 flex space-x-2">
                    <a href="{{ route('movies.show', $movie->id) }}" class="bg-sky-900 hover:bg-sky-950 text-sky-600 px-4 py-2 rounded-full transition duration-200">Bekijken</a>
                    <a href="{{ route('movies.edit', $movie->id) }}" class="bg-yellow-800 hover:bg-yellow-900 text-yellow-600 px-4 py-2 rounded-full transition duration-200">Edit</a>
                    <form action="{{ route('movies.destroy', $movie->id) }}" method="POST" onsubmit="return confirm('Weet je zeker dat je dit wilt verwijderen?');" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-pink-900 hover:bg-pink-950 text-pink-500 px-4 py-2 rounded-full transition duration-200">Verwijder</button>
                    </form>
                </div>
            @endforeach
        </div>
    </div>
</body>

</html>

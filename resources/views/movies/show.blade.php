<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $movie->titel }}</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-indigo-950 text-white font-sans">
    <div class="container mx-auto p-5">
        <!-- Header -->
        <header class="flex justify-between items-center border-b border-gray-800 pb-5 mb-5">
            <h1 class="text-4xl font-bold text-orange-300">{{ $movie->titel }}</h1>
            <a href="{{ route('movies.index') }}" class="text-orange-100 bg-orange-300 px-4 py-2 rounded-full hover:bg-orange-400 transition duration-200">
                Terug naar Overzicht
            </a>
        </header>

        <!-- Movie Details -->
        <div class="bg-indigo-900 text-orange-300 p-8 rounded-lg shadow-lg">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                <div>
                    <p><strong>Hoofdpersonen:</strong></p>
                    <p>{{ $movie->hoofdpersonen }}</p>
                </div>
                <div>
                    <p><strong>Release Datum:</strong></p>
                    <p>{{ $movie->release_datum }}</p>
                </div>
                <div>
                    <p><strong>Omzet ($):</strong></p>
                    <p>{{ $movie->omzet }}</p>
                </div>
                <div>
                    <p><strong>Start Budget ($):</strong></p>
                    <p>{{ $movie->bedrag }}</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

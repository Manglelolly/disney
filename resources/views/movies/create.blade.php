<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Disney Movie</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-indigo-950 text-white font-sans">
    <div class="container mx-auto p-5">
        <!-- Header -->
        <header class="flex justify-between items-center border-b border-gray-800 pb-5 mb-5">
            <h1 class="text-4xl font-bold text-orange-300">Voeg Film Toe</h1>
            <a href="{{ route('movies.index') }}" class="text-orange-100 bg-orange-300 px-4 py-2 rounded-full hover:bg-orange-400 transition duration-200">
                Terug naar Overzicht
            </a>
        </header>

        <!-- Create Movie Form -->
        <div class="bg-indigo-900 p-8 rounded-lg shadow-lg">
            <form action="{{ route('movies.store') }}" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-5">
                @csrf
                
                <div>
                    <label for="titel" class="block text-lg font-semibold mb-2 text-orange-300">Titel:</label>
                    <input type="text" id="titel" name="titel" class="w-full px-4 py-2 bg-indigo-950 text-orange-200 rounded-lg" required>
                </div>

                <div>
                    <label for="hoofdpersonen" class="block text-lg font-semibold mb-2 text-orange-300">Hoofdpersonen:</label>
                    <input type="text" id="hoofdpersonen" name="hoofdpersonen" class="w-full px-4 py-2 bg-indigo-950 text-orange-200 rounded-lg" required>
                </div>

                <div>
                    <label for="release_datum" class="block text-lg font-semibold mb-2 text-orange-300">Release Datum:</label>
                    <input type="date" id="release_datum" name="release_datum" class="w-full px-4 py-2 bg-indigo-950 text-orange-200 rounded-lg" required>
                </div>

                <div>
                    <label for="omzet" class="block text-lg font-semibold mb-2 text-orange-300">Omzet ($):</label>
                    <input type="number" id="omzet" name="omzet" class="w-full px-4 py-2 bg-indigo-950 text-orange-200 rounded-lg" required>
                </div>

                <div>
                    <label for="bedrag" class="block text-lg font-semibold mb-2 text-orange-300">Start Budget ($):</label>
                    <input type="number" id="bedrag" name="bedrag" class="w-full px-4 py-2 bg-indigo-950 text-orange-200 rounded-lg" required>
                </div>

                <div class="md:col-span-2">
                    <button type="submit" class="bg-orange-300 px-6 py-2 rounded-full text-white hover:bg-orange-400 transition duration-200 w-full">
                        Add Movie
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>

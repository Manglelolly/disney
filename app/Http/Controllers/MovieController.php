<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the movies.
     */
    public function index()
    {
        $movies = Movie::all();
        return view('movies.index', ['movies' => $movies]);
    }

    /**
     * Show the form for creating a new movie.
     */
    public function create()
    {
        return view('movies.create');
    }

    /**
     * Store a newly created movie in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'titel' => 'required|string|max:255',
        'hoofdpersonen' => 'required|string|max:255',
        'release_datum' => 'required|date',
        'omzet' => 'required|numeric',
        'bedrag' => 'required|numeric',
    ]);

    Movie::create([
        'titel' => $request->titel,
        'hoofdpersonen' => $request->hoofdpersonen,
        'release_datum' => $request->release_datum,
        'omzet' => $request->omzet,
        'bedrag' => $request->bedrag,
    ]);

    return redirect()->route('movies.index')->with('success', 'Movie successfully added!');
}


    /**
     * Display the specified movie.
     */
    public function show(Movie $movie)
    {
        return view('movies.show', ['movie' => $movie]);
    }

    /**
     * Show the form for editing the specified movie.
     */
    public function edit($id)
    {
        $movie = Movie::find($id);
    
        if ($movie) {
            return view('movies.edit', ['movie' => $movie]);
        } else {
            abort(404, "Movie not found");
        }
    }
    
    /**
     * Update the specified movie in storage.
     */
    public function update(Request $request, $id)
{
    $movie = Movie::find($id);

    $request->validate([
        'titel' => 'required|string|max:255',
        'hoofdpersonen' => 'required|string|max:255',
        'release_datum' => 'required|date',
        'omzet' => 'required|numeric',
        'bedrag' => 'required|numeric',
    ]);

    if ($movie) {
        $movie->titel = $request->input('titel');
        $movie->hoofdpersonen = $request->input('hoofdpersonen');
        $movie->release_datum = $request->input('release_datum');
        $movie->omzet = $request->input('omzet');
        $movie->bedrag = $request->input('bedrag');
        $movie->save();

        return redirect()->route('movies.index')->with('success', 'Movie successfully updated!');
    } else {
        abort(404, "Movie not found");
    }
}


    /**
     * Remove the specified movie from storage.
     */
    public function destroy($id)
    {
        $movie = Movie::find($id);

        if ($movie) {
            $movie->delete();
            return redirect()->route('movies.index')->with('success', 'Movie successfully deleted!');
        } else {
            abort(404, "Movie not found");
        }
    }
}

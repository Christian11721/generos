<?php

namespace App\Http\Controllers;

use App\Http\Requests\Genre\StoreRequest;
use App\Http\Requests\Genre\UpdateRequest;
use Illuminate\Http\Request;
use App\Models\Genre;

class GenreController extends Controller
{
    public function index()
    {
        $genres = Genre::all();
        return view('genre.index', compact('genres'));
    }
    public function create()
    {
        return view("genre.create");
    }
    public function store(StoreRequest $request)
    {
        Genre::create($request->validated());
        return redirect()->route('genres.index');
    }
    public function show(Genre $genre)
    {
        return view("genre.show", compact("genre"));
    }
    public function edit(Genre $genre)
    {
        return view("genre.edit", compact("genre"));
    }
    public function update(UpdateRequest $request, Genre $genre)
    {
        $genre->update($request->validated());
        return redirect()->route('genres.index');
    }
    public function destroy(Genre $genre)
    {
        $genre->delete();
        return redirect()->route('genres.index');
    }
}

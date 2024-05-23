<?php

namespace App\Http\Controllers;

use App\Http\Requests\Genre\{
    StoreRequest,
    UpdateRequest,
};
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
        return view('genre.create');
    }

    public function store(StoreRequest $request)
    {
        try {
            Genre::create($request->validated());
        } catch (\Exception $e) {
            \Log::error('Error al crear el género del libro: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Error al crear el género del libro.');
        }
        return redirect()->route('genres.index');
    }

    public function show(Genre $genre)
    {
        return view('genre.show', compact('genre'));
    }

    public function edit(Genre $genre)
    {
        return view('genre.edit', compact('genre'));
    }

    public function update(UpdateRequest $request, Genre $genre)
    {
        try {
            $genre->update($request->validated());
        } catch (\Exception $e) {
            \Log::error('Error al actualizar el género del libro: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Error al actualizar el género del libro.');
        }
        return redirect()->route('genres.index');
    }

    public function destroy(Genre $genre)
    {
        try {
            $genre->delete();
        } catch (\Exception $e) {
            \Log::error('Error al eliminar el género del libro: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Error al eliminar el género del libro.');
        }
        return redirect()->route('genres.index');
    }
}

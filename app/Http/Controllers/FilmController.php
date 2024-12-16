<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Film;
use Illuminate\View\View;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $films = Film::withTrashed()->oldest('title')->paginate(5);
        return view('index', compact('films'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $films = Film::paginate(5);
        return view('create', compact('films'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $films = Film::paginate(5);
        return view('show', compact('films'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Film $film): View
    {
        // $films = Film::paginate(5);
        return view('edit', compact('film'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FilmRequest $filmRequest, Film $film): RedirectResponse
    {
        $film->update($filmRequest->all());

        return redirect()->route('films.index')->with('info', 'Le film a bien été modifié');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
        $film->delete();

        return back()->with('info', 'Le film a bien été mis dans la corbeille.');

    }

    public function forceDestroy($id): RedirectResponse
     {
         Film::withTrashed()->whereId($id)->firstOrFail()->forceDelete();

         return back()->with('info', 'Le film a bien été supprimé définitivement dans la base de données.');
      }

    public function restore($id): RedirectResponse
       {
             Film::withTrashed()->whereId($id)->firstOrFail()->restore();

             return back()->with('info', 'Le film a bien été restauré.');
        }
}

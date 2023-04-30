<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\http\Request;

class FilmController extends Controller
{
    public function index()
    {
        $films = Film::select('*')->get();
        return view('publisher/all-movies', [
            "title" => "Film Settings",
            "films" => $films
        ]);
    }

    public function create()
    {
        return view('publisher/movies/add-movies', [
            "title" => "Add Movies"
        ]);
    }
    
    public function store(Request $request)
    {
        @dd($request->input('title'));
    }                                   

    public function show()
    {
        //
    }

    public function edit(Film $film)
    {
        //
    }

    public function update(Request $request, Film $film)
    {
        return view('/publisher/movies/update-movies', [
            "title" => "Update Movies"
        ]);
    }

    public function destroy(Film $film)
    {
        //
    }
}

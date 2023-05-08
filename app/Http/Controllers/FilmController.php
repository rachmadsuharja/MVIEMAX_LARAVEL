<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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
        $rlsDt = date('d-m-Y', strtotime($request->input('release_date')));
        $genres = implode(', ', $request->genre);
        $cover = $request->img_cover;
        $coverName = time() . "." . $cover->getClientOriginalExtension();
        $upMovie = $request->validate([
            'title' => 'required',
            'release_date' => 'required',
            'genre' => 'required',
            'film_desc' => 'required'
        ], [
            'title' => 'Judul tidak boleh kosong',
            'release_date' => 'Isi tanggal terlebih dahulu',
            'genre' => 'Pilih genre minimal 1',
            'film_desc' => 'Deskripsi tidak boleh kosong'
        ]);
        $upMovie = new Film();
        $upMovie->title = $request->title;
        $upMovie->release_date = $rlsDt;
        $upMovie->genre = $genres;
        $upMovie->img_cover = $coverName;
        $upMovie->film_desc = $request->film_desc;
        $cover->move(public_path().'/img/temp', $coverName);
        $upMovie->save();

        return redirect('/publisher/film-settings');
    }

    public function show()
    {
        //
    }

    public function edit($id)
    {
        $film = Film::find($id);
        return view('/publisher/movies/update-movies', [
            "title" => "Update Movies",
            "film" => $film
        ]);
    }

    public function update(Request $request, $id){
    $upMovie = [];
    if ($request->has('img_cover')) {
        $upMovie = $request->validate([
            'title' => 'required|max:255',
            'release_date' => 'required|max:255',
            'genre' => 'required|max:255',
            'img_cover' => 'required|mimes:jpg,jpeg,png',
            'film_desc' => 'required|max:255'
        ]);
        $movie = Film::findOrFail($id);
        if (File::exists(public_path('/img/temp/' . $movie->img_cover))) {
            unlink(public_path('/img/temp/' . $movie->img_cover));
        }
        $file = $request->file('img_cover');
        $newCover = $file->hashName();
        $file->move(public_path('img/temp/'), $newCover);
        $upMovie['title'] = $request->title;
        $upMovie['release_date'] = date('d-M-Y', strtotime($request->input('release_date')));
        $upMovie['genre'] = implode(', ', $request->genre);
        $upMovie['img_cover'] = $newCover;
        $upMovie['film_desc'] = $request->film_desc;
        $movie->update($upMovie);
    } else {
        $movie = Film::findOrFail($id);
        $upMovie = $request->validate([
            'title' => 'required|max:50',
            'release_date' => 'required',
            'genre' => 'required',
            'film_desc' => 'required'
        ]);
        $upMovie['release_date'] = date('d-m-Y', strtotime($request->input('release_date')));
        $upMovie['genre'] = implode(', ', $request->genre);
        // dd($upMovie);
        $movie->update($upMovie);
    }
    
    return redirect('publisher/film-settings')->with('success', 'Movie updated successfully.');
}


    // $this->validate($request ,[
    //     'title' => 'required',
    //     'release_date' => 'required',
    //     'genre' => 'required',
    //     'img_cover' => 'required',
    //     'film_desc' => 'required'
    // ]);
    public function destroy($id)
    {
        $delMovie = Film::findOrFail($id);
        $file = public_path('img/temp/' . $delMovie->img_cover);
        if (File::exists($file)) {
            unlink($file);
        }
        $delMovie->delete();
        return redirect('/publisher/film-settings');
    }
}





































        //$movie = Film::findOrFail($id);
        // if (File::exists(public_path('img/temp/' . $movie->img_cover))) {
        //     File::delete(public_path('img/temp/' . $movie->img_cover));
        // }
        // $fileExtension = $request->file('img_cover')->getClientOriginalExtension();
        // $fileName = uniqid() . '.' . $fileExtension;
        // $request->file('img_cover')->move(public_path('img/temp/'), $fileName);

    //     $awal = $ubah->img_cover;
    // if ($request->hasFile('img_cover')) {
    //     if (File::exists(public_path().'/img/temp/'.$awal)) {
    //         File::delete(public_path().'/img/temp/'.$awal);
    //         $awal = $request->img_cover->hashName();
    //         $request->img_cover->move(public_path().'/img/temp/', $awal);
    //     }
    // }
    // $request['genre'] = implode(', ', $request->genre);
    // $edit = [
    //     'title' => $request['title'],
    //     'release_date' => $request['release_date'],
    //     'genre' => $request['genre'],
    //     'img_cover' => $request['img_cover'],
    //     'film_desc' => $request['film_desc']
    // ];
    // dd($edit);
    // $ubah->update($edit);
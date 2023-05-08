@extends('layouts.main')

@section('embed')
    <link rel="stylesheet" href="/css/checkbox-grid.css">
@endsection

@section('container')
<div class="container bg-transparent w-100 h-100 p-3 d-flex justify-content-center align-items-center">
    <div class="container-fluid w-50 px-5 py-3 rounded" style="background-color: crimson;">
        <div class="mb-3 d-flex justify-content-center">
            <h3 style="color: #dfdfdf;">Update Film</h3>
        </div>
            <form action="{{route('update-movie', $film->id)}}" method="POST" enctype="multipart/form-data">
                @method('put')
                @csrf
                {{-- @dd(date('Y-M-d', strtotime($film->release_date))) --}}
                <div class="mb-3 d-flex justify-content-between">
                    <div class="title-input w-50">
                        <label for="judul" class="form-label">Judul</label>
                        <input class="form-control" type="text" name="title" value="{{$film->title}}" id="title" placeholder="Judul..." aria-label="default input example" required>
                    </div>
                    <div class="date-input w-45">
                        <label for="tanggal" class="form-label">Tanggal Rilis</label>
                        <input class="form-control" type="date" name="release_date" value="{{date('Y-m-d', strtotime($film->release_date))}}" id="release_date" aria-label="default input example" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="genre" class="form-label">Genre</label>
                    <div class="checkbox-container">
                            <div class="checkbox-grid">
                                <input type="checkbox" name="genre[]" value="Action" {{ str_contains($film->genre, 'Action') ? 'checked' : '' }} id="action"> 
                                <label for="action">Action</label>
                            </div>
                            <div class="checkbox-grid">
                                <input type="checkbox" name="genre[]" value="Adventure" {{ str_contains($film->genre, 'Adventure') ? 'checked' : '' }} id="adventure">
                                <label for="adventure">Adventure</label>
                            </div>
                            <div class="checkbox-grid">
                                <input type="checkbox" name="genre[]" value="Fantasy" {{ str_contains($film->genre, 'Fantasy') ? 'checked' : '' }} id="fantasy">
                                <label for="fantasy">Fantasy</label>
                            </div>
                            <div class="checkbox-grid">
                                <input type="checkbox" name="genre[]" value="Sci-Fi" {{ str_contains($film->genre, 'Sci-Fi') ? 'checked' : '' }} id="scifi">
                                <label for="scifi">Sci-Fi</label>
                            </div>
                            <div class="checkbox-grid">
                                <input type="checkbox" name="genre[]" value="Comedy" {{ str_contains($film->genre, 'Comedy') ? 'checked' : '' }} id="comedy">
                                <label for="comedy">Comedy</label>
                            </div>
                            <div class="checkbox-grid">
                                <input type="checkbox" name="genre[]" value="Romance" {{ str_contains($film->genre, 'Romance') ? 'checked' : '' }} id="romance">
                                <label for="romance">Romance</label>
                            </div>
                            <div class="checkbox-grid">
                                <input type="checkbox" name="genre[]" value="Shounen" {{ str_contains($film->genre, 'Shounen') ? 'checked' : '' }} id="shounen">
                                <label for="shounen">Shounen</label>
                            </div>
                            <div class="checkbox-grid">
                                <input type="checkbox" name="genre[]" value="Shoujo" {{ str_contains($film->genre, 'Shoujo') ? 'checked' : '' }} id="shoujo">
                                <label for="shoujo">Shoujo</label>
                            </div>
                            <div class="checkbox-grid">
                                <input type="checkbox" name="genre[]" value="Drama" {{ str_contains($film->genre, 'Drama') ? 'checked' : '' }} id="drama">
                                <label for="drama">Drama</label>
                            </div>
                            <div class="checkbox-grid">
                                <input type="checkbox" name="genre[]" value="Mystery" {{ str_contains($film->genre, 'Mystery') ? 'checked' : '' }} id="mystery">
                                <label for="mystery">Mystery</label>
                            </div>
                            <div class="checkbox-grid">
                                <input type="checkbox" name="genre[]" value="Thriller" {{ str_contains($film->genre, 'Thriller') ? 'checked' : '' }} id="thriller">
                                <label for="thriller">Thriller</label>
                            </div>
                            <div class="checkbox-grid">
                                <input type="checkbox" name="genre[]" value="Horror" {{ str_contains($film->genre, 'Horror') ? 'checked' : '' }} id="horror">
                                <label for="horror">Horror</label>
                            </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="imgCover" class="form-label">Cover</label>
                    <input class="form-control" name="img_cover" type="file" id="imgCover">
                </div>
                <div class="mb-3">
                    <label for="prevImg" class="form-label">Cover Sebelumnya :</label>
                    <img class="form-control p-1" src="{{asset('img/temp/' . $film->img_cover)}}" alt="No Pict" style="width:7em; height:10em" id="prevImg">
                </div>
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Deskripsi..." id="film_desc" name="film_desc" style="height: 100px; resize:none;">{{$film->film_desc}}</textarea>
                    <label for="film_desc">Deskripsi</label>
                </div>
                <div class="mb-3 d-flex justify-content-between">
                    <a href="/publisher/film-settings" class="btn btn-secondary mt-3">Kembali</a>
                    <button class="btn btn-success mt-3" type="submit" name="submit">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
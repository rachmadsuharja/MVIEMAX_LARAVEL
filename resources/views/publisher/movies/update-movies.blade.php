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
            <form action="" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="">
                <div class="mb-3 d-flex justify-content-between">
                    <div class="title-input w-50">
                        <label for="judul" class="form-label">Judul</label>
                        <input class="form-control" type="text" name="judul" value="" id="judul" placeholder="Judul..." aria-label="default input example" required>
                    </div>
                    <div class="date-input w-45">
                        <label for="tanggal" class="form-label">Tanggal Rilis</label>
                        <input class="form-control" type="date" name="tanggal" id="tanggal" aria-label="default input example" required value="">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="genre" class="form-label">Genre</label>
                    <div class="checkbox-container">
                            <div class="checkbox-grid">
                                <input type="checkbox" name="genre[0]" value="Action" id="action">
                                <label for="action">Action</label>
                            </div>
                            <div class="checkbox-grid">
                                <input type="checkbox" name="genre[1]" value="Adventure" id="adventure">
                                <label for="adventure">Adventure</label>
                            </div>
                            <div class="checkbox-grid">
                                <input type="checkbox" name="genre[2]" value="Fantasy" id="fantasy">
                                <label for="fantasy">Fantasy</label>
                            </div>
                            <div class="checkbox-grid">
                                <input type="checkbox" name="genre[3]" value="Sci-Fi" id="scifi">
                                <label for="scifi">Sci-Fi</label>
                            </div>
                            <div class="checkbox-grid">
                                <input type="checkbox" name="genre[4]" value="Comedy" id="comedy">
                                <label for="comedy">Comedy</label>
                            </div>
                            <div class="checkbox-grid">
                                <input type="checkbox" name="genre[5]" value="Romance" id="romance">
                                <label for="romance">Romance</label>
                            </div>
                            <div class="checkbox-grid">
                                <input type="checkbox" name="genre[6]" value="Drama" id="drama">
                                <label for="drama">Drama</label>
                            </div>
                            <div class="checkbox-grid">
                                <input type="checkbox" name="genre[7]" value="Horror" id="horror">
                                <label for="horror">Horror</label>
                            </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="imgCover" class="form-label">Cover</label>
                    <input class="form-control" name="imgCover" type="file" id="imgCover">
                </div>
                <div class="mb-3">
                    <label for="prevImg" class="form-label">Cover Sebelumnya :</label>
                    <img class="form-control p-1" src="../../assets/img/film_cover/" alt="No Pict" style="width:7em; height:10em" id="prevImg">
                </div>
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Deskripsi..." id="filmDesc" name="deskripsi" style="height: 100px; resize:none;"></textarea>
                    <label for="filmDesc">Deskripsi</label>
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
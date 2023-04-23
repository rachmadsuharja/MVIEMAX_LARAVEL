@extends('layouts.main')

@section('container')
    <div class="main mb-5 p-5 w-100 d-flex justify-content-start">
        <div class="mainpage-container d-grid">
            <div class="title-container">
                <h1 data-aos="zoom-in" data-aos-duration="2000">MVIEMAX</h1>
                <p id="subtitle"></p>
            </div>
            <a href="#popularMovie"><i class="fa-solid fa-list"></i> List Film</a>
        </div>
    </div>
    <div id="popularMovie" class="popularMovie d-grid mt-5">
        <h2 class="text-white mt-5 d-flex justify-content-center">Film Terpopuler</h2>
        <div id="all-list">
                <div class="card-box">
                    <img class="coverImg" src="" width="500">
                    <h1>Judul</h1>
                </div>
        </div>
    </div>
    <div class="footer mt-5 p-1 bg-danger">
        <footer class="text-white bg-danger p-1">
            <div class="bg-dark p-1 d-flex justify-content-center">
                <p>© 2023 Copyright - HARJA</p>
            </div>
        </footer>
    </div>
@endsection
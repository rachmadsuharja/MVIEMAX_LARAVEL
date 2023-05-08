@extends('layouts.main')

@section('navbar')
    @include('partials.navbar')
@endsection

@section('container')
    <div class="main m-0 p-0 mb-5 w-100 d-flex justify-content-start">
        <div class="dark-main d-flex align-items-center m-0 p-0">
            <div class="mainpage-container d-grid">
                <div class="title-container mx-3">
                    <h1 data-aos="zoom-in" data-aos-duration="2000">MVIEMAX</h1>
                    <p id="subtitle" class="mx-1"></p>
                </div>
                <a class="mx-3" href="#popularMovie"><i class="fa-solid fa-list"></i> List Film</a>
            </div>
        </div>
    </div>
    <div id="popularMovie" class="popularMovie d-grid mt-5">
        <h2 class="text-white mt-5 d-flex justify-content-center">Film Terpopuler</h2>
        <div id="all-list">
            @foreach ($films as $film)
                <div class="card-box">
                    <img class="coverImg" src="{{asset('img/temp/' . $film->img_cover)}}" width="500">
                    <h1>{{$film->title}}</h1>
                </div>
            @endforeach
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
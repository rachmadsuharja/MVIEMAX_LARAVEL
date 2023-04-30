@extends('layouts.main')

@section('embed')
    
@endsection

@section('navbar')
    @include('partials.member-navbar')
@endsection

@section('container')
<div class="main-page mt-5 w-100 h-100 p-3">
    <div class="main-content">
        <h2 class="d-flex justify-content-center text-white">Film Terpopuler</h2>
    </div>
    <hr style="border: 1.5px solid #555555">
    <div class="m-5 p-1">
    <div id="all-list">
            <div class="card-box">
                <img class="coverImg" src="../../assets/img/film_cover/">
                <h1>Judul</h1>
            </div>
    </div>
    </div>
@endsection
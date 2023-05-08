@extends('layouts.main')
@extends('partials.member-navbar')

@section('embed')
    
@endsection

@section('navbar')
    @section('logout')
        <a href="/membership-logout" class="btn btn-outline-dark">LOGOUT</a>
    @endsection
@endsection

@section('container')
<div class="main-page mt-5 w-100 h-100 p-3">
    {{-- <div class="m-3">
        <h3 class="text-white">Welcome, {{Auth::user()->name}}</h3>
    </div> --}}
    <div class="main-content">
        <h2 class="d-flex justify-content-center text-white">Film Terpopuler</h2>
    </div>
    <hr style="border: 1.5px solid #555555">
    <div class="m-5 p-1">
    <div id="all-list">
            <div class="card-box">
                
                <h1>Judul</h1>
            </div>
    </div>
    </div>
@endsection
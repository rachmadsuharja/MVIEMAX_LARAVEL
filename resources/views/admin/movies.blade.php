@extends('layouts.main')

@section('embed')
    <link rel="stylesheet" href="/css/.css">
@endsection

@section('navbar')
    @include('partials.admin-navbar')
@endsection

@section('container')
<div class="m-0 p-5">
    <div class="tbHead w-100 d-flex justify-content-around align-items-center">
        <div class="input-group mb-3 mt-3 w-25">
            <div class="input-group-prepend">
                <span class="input-group-text bg-secondary text-white" id="inputGroup-sizing-default">Cari</span>
            </div>
            <input type="text" id="searchInput" onkeyup="searchFilm()" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
        </div>
    </div>
    <table id="filmList" class="table table-dark mt-3" style="color: #dddd;">
        <thead>
            <th class="bg-secondary text-white" scope="col">Film Settings</th>
            <th class="bg-secondary text-white" scope="col">Judul</th>
            <th class="bg-secondary text-white" scope="col">Tanggal Rilis</th>
            <th class="bg-secondary text-white" scope="col">Genre</th>
            <th class="bg-secondary text-white" scope="col">Cover</th>
            <th class="bg-secondary text-white" scope="col">Deskripsi</th>
        </thead>
        @foreach ($films as $film)
            <tr>
                <th>
                    <a class="btn btn-outline-danger" href="/admin/all-movies/delete-movie/{{$film->id}}" onclick="return confirm('Anda yakin?')"><i class="fa-solid fa-trash"></i> Hapus</a>
                </th>
                <td>{{$film->title}}</td>
                <td>{{$film->release_date}}</td>
                <td>{{$film->genre}}</td>
                <td><img src="{{asset('img/temp/' . $film->img_cover)}}" width="100"></td>
                <td style="width:20em">{{$film->film_desc}}</td>
            </tr>
        @endforeach
    </table>
</div>
@endsection
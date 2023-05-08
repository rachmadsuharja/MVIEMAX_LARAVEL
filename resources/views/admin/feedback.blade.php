@extends('layouts.main')

@section('embed')
    <link rel="stylesheet" href="/css/.css">
@endsection

@section('navbar')
    @include('partials.admin-navbar')
@endsection

@section('container')
    <div class="container bg-transparent mt-5">
        <div class="tbHead w-100 d-flex justify-content-around align-items-center">
            <div class="input-group mb-3 mt-3 w-25">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-secondary text-white" id="inputGroup-sizing-default">Cari</span>
                </div>
                <input type="text" id="searchInput" onkeyup="searchFeedback()" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>
            <p class="fw-bold text-white bg-primary p-1 mt-2 rounded">Jumlah : {{$feedAmount}}</p>
        </div>
        <table id="feedbackList" class="table table-dark" style="color: #dddd;">
            <thead>
                <th class="bg-secondary text-white" width="190" scope="col">Feedback Settings</th>
                <th class="bg-secondary text-white" scope="col">Nama</th>
                <th class="bg-secondary text-white" scope="col">Email</th>
                <th class="bg-secondary text-white w-50" scope="col">Feedback</th>
            </thead>
            @foreach ($feedback as $feed)
                <tr>
                    <th>
                        <a class="btn btn-outline-primary p-1" href="/admin/feedback/edit-feedback/{{$feed->id}}"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                        <a class="btn btn-outline-danger p-1" href="/admin/feedback/delete-feedback/{{$feed->id}}" onclick="return confirm('Anda yakin?')"><i class="fa-solid fa-trash"></i> Hapus</a>
                    </th>
                    <td>{{$feed->name}}</td>
                    <td>{{$feed->email}}</td>
                    <td>{{$feed->feedback}}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
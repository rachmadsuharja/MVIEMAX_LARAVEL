@extends('layouts.main')

@section('embed')
    <link rel="stylesheet" href="/css/checkbox-grid.css">
@endsection

@section('container')
    <div class="container bg-transparent w-100 h-100 p-3 d-flex justify-content-center align-items-center">
        <div class="container-fluid w-50 px-5 py-3 rounded" style="background-color: crimson;">
            <div class="mb-3 d-flex justify-content-center">
                <h3 style="color: #dfdfdf;">Update Feedback</h3>
            </div>
            <form action="{{route('update-feedback', ['id' => $feed->id])}}" method="POST">
                @method('put')
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input class="form-control" type="text" name="name" value="{{$feed->name}}" id="nama" placeholder="Nama..." aria-label="default input example" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" value="{{$feed->email}}" id="email" placeholder="name@name.com">
                </div>
                <div class="mb-3">
                    <div class="form-floating mt-4">
                        <textarea class="form-control" placeholder="Feedback" id="feedback" name="feedback" style="height: 100px" required>{{$feed->feedback}}</textarea>
                        <label for="feedback" class="text-dark">Feedback</label>
                    </div>
                </div>
                <div class="mb-3 d-flex justify-content-between">
                    <a href="/admin/feedback" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="form-button btn btn-success" name="submit">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
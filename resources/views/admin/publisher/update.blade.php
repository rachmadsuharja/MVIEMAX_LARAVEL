@extends('layouts.main')

@section('embed')
    <link rel="stylesheet" href="/css/checkbox-grid.css">
@endsection

@section('container')
    <div class="container bg-transparent mt-5">
        <div class="container bg-transparent w-100 h-100 p-3 d-flex justify-content-center align-items-center">
            <div class="container-fluid w-50 px-5 py-3 bg-danger rounded">
                <div class="mb-3 d-flex justify-content-center">
                    <h3 style="color:#dfdfdf">Edit Publisher</h3>
                </div>
                    <form action="{{route('update-publisher', ['id' => $pub->id])}}" method="POST">
                        @method('put')
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Username</label>
                            <input class="form-control" type="text" name="username" value="{{$pub->username}}" id="username" placeholder="Username..." aria-label="default input example">
                        </div>
                        <div class="mb-4">
                            <label for="telp" class="form-label">No. Telpon</label>
                            <input class="form-control" type="number" name="no_telp" value="{{$pub->no_telp}}" id="telp" placeholder="Telpon..." aria-label="default input example">
                        </div>
                        <div class="mb-3">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Alamat..." id="address" name="address" style="height: 100px; resize:none;">{{$pub->address}}</textarea>
                                <label for="address" class="text-dark">Alamat</label>
                            </div>
                        </div>
                        <div class="mb-3 d-flex justify-content-between">
                            <a href="/admin/publishers" class="btn btn-secondary">Kembali</a>
                            <button type="submit" name="submit" id="submit" class="btn btn-success">Update</button>
                        </div>
                    </form>
            </div>
        </div>
    </div>
@endsection
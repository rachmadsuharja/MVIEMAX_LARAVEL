@extends('layouts.main')

@section('embed')
    <link rel="stylesheet" href="/css/checkbox-grid.css">
@endsection

@section('container')
<div class="container bg-transparent w-100 h-100 p-3 d-flex justify-content-center align-items-center">
    <div class="container-fluid w-50 px-5 py-3 bg-danger rounded">
        <div class="mb-3 d-flex justify-content-center">
            <h3 style="color: #dfdfdf;">Tambah Membership</h3>
        </div>
        @if(Session::has('success'))
        {{dd('aaaS')}}
        @endif
            <form action="{{route('store-member')}}" method="POST">
                @csrf
                @if(Session::has('error'))
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <div class="alert alert-transparent p-0 text-white-50 mt-1"><i class="fa-solid fa-circle-exclamation"></i> {{ $error }}</div>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input class="form-control" type="text" name="name" id="name" placeholder="Nama..." aria-label="default input example">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
                </div>
                <div class="pass-container d-flex justify-content-between">
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input class="form-control" type="password" name="password" id="password" placeholder="Password..." aria-label="default input example">
                    </div>
                    <div class="mb-3">
                        <label for="password2" class="form-label">Konfirmasi Password</label>
                        <input class="form-control" type="password" name="password2" id="password2" placeholder="Konfirmasi password..." aria-label="default input example">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="gender" class="form-label">Gender</label>
                    <div class="form-control">
                        <input type="radio" name="gender" value="Laki-laki" id="laki-laki">
                        <label for="laki-laki">Laki-laki</label>
                        <input type="radio" name="gender" value="Perempuan" id="perempuan">
                        <label for="perempuan">Perempuan</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="role" class="form-label">Role</label>
                    <select class="form-select" name="role_id" id="role_id" aria-label="Default select example">
                        <option disabled value>Pilih Role</option>
                        @foreach ($roles as $role)
                            <option value="{{$role->id}}">{{$role->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3 d-flex justify-content-between">
                    <a href="/admin/memberships" class="btn btn-secondary">Kembali</a>
                    <button type="submit" name="submit" id="submit" class="btn btn-success">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
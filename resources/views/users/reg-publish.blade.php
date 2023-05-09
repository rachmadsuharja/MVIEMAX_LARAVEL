@extends('layouts.main')

@section('navbar')
    @include('partials.navbar')
@endsection

@section('container')
<div id="publisher" class="publisher mt-5">
    <div class="container bg-danger text-white p-3">
        <div class="container bg-dark w-100 h-100 p-3 d-flex justify-content-center align-items-center">
            <div class="container-fluid w-50 p-3">
                <div class="mb-3 d-flex justify-content-center align-items-center">
                    <h3>Gabung Bersama Kami</h3>
                </div>
                <form action="{{route('store-reg-publisher')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input class="form-control" type="text" name="username" id="username" placeholder="Username..." aria-label="default input example">
                    </div>
                    @error('username')
                    <div class="alert alert-transparent p-0 text-white-50 mt-1"><i class="fa-solid fa-circle-exclamation"></i> {{$message}}</div>
                    @enderror
                    <div class="mb-3 d-flex justify-content-between">
                        <div>
                            <label for="password" class="form-label">Password</label>
                            <input class="form-control" type="password" name="password" id="password" placeholder="Password..." aria-label="default input example">
                        </div>
                        <div>
                            <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                            <input class="form-control" type="password" name="password_confirmation" id="password_confirmation" placeholder="Konfirmasi Password..." aria-label="default input example">
                        </div>
                    </div>
                    @error('password')
                    <div class="alert alert-transparent p-0 text-white-50 mt-1"><i class="fa-solid fa-circle-exclamation"></i> {{$message}}</div>
                    @enderror
                    <div class="mb-3">
                        <label for="no_telp" class="form-label">No. Telpon</label>
                        <input class="form-control" type="number" name="no_telp" id="no_telp" placeholder="Telpon..." aria-label="default input example">
                    </div>
                    @error('no_telp')
                    <div class="alert alert-transparent p-0 text-white-50 mt-1"><i class="fa-solid fa-circle-exclamation"></i> {{$message}}</div>
                    @enderror
                    <div class="mb-3">
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Alamat..." id="address" name="address" style="height: 100px; resize:none;"></textarea>
                            <label for="address" class="text-dark">Alamat</label>
                        </div>
                    </div>
                    @error('address')
                    <div class="alert alert-transparent p-0 text-white-50 mt-1"><i class="fa-solid fa-circle-exclamation"></i> {{$message}}</div>
                    @enderror
                    <div class="mb-3 d-flex justify-content-between">
                        <p>Sudah punya akun? <a class="btn btn-primary px-1 py-0" href="/publisher-login">Login</a></p>
                        <button type="submit" name="register" id="register" class="btn btn-danger mt-2 p-1">Buat Akun</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
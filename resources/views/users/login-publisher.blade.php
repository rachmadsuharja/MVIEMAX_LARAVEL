@extends('layouts.login')

@section('user-login-title')
    <h1 class="h3 mb-3 text-white">Login Publisher</h1>
@endsection

@section('form-footer')
    <a class="d-flex justify-content-center mb-3 p-1 w-25 btn btn-dark" href="/">Lupa Password?</a>
    <div class="create-container mt-3 mb-5 p-0">
        <p class="text-white">Belum punya akun? <a class="mt-2 mb-2 p-1 btn btn-dark" href="/publisher-register">buat akun</a></p>
    </div>
@endsection
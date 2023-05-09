@extends('layouts.main')
@section('embed')
    <link rel="stylesheet" href="/css/login-admin.css">
@endsection
@section('container')
    <main class="form-signin w-100 m-auto">
        <form action="{{route('store-login-admin')}}" method="POST">
            @csrf
            <div class="form-head d-flex flex-column align-items-center justify-content-center">
                <img class="mb-3 w-25" src="/img/logo.png" data-aos="zoom-in" data-aos-duration="1000">
                <h1 class="h3 mb-3 text-white">Login Admin</h1>
            </div>
            <div class="form-floating mb-2">
                <input type="text" class="form-control" style="background-color: #FFFDD0; color:#291F1E" name="username" id="username" placeholder="username" autofocus required>
                <label for="username">Username</label>
            </div>
            @error('username')
                
            @enderror
            <div class="form-floating mb-2">
                <input type="password" class="form-control" style="background-color: #FFFDD0; color:#291F1E" name="password" id="password" placeholder="Password" required>
                <label for="password">Password</label>
            </div>
            <button class="w-100 mb-3 btn btn-lg btn-danger text-dark" name="loginAdmin" id="submit" type="submit" style="background-color:#FFAC42">Login</button>
        </form>
    </main>
@endsection
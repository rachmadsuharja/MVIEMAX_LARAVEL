@extends('layouts.main')

@section('embed')
    <link rel="stylesheet" href="/css/forgot-password.css">
@endsection

@section('container')
    <div class="container">
        <form action="" method="post">
        <img class="w-25 h-25 mb-3" src="/img/logo.png" data-aos="zoom-in" data-aos-duration="1000">
            <h1 class="h3 mb-3" style="color:#dfdfdf;">Ganti Password</h1>
            <div class="form-floating mb-2">
                <input type="text" class="form-control" style="background-color: #FFFDD0; color:#291F1E" name="username" id="userName" placeholder="Username" autofocus required>
                <label for="userName">Username</label>
            </div>
            <div class="form-floating mb-2">
                <input type="password" class="form-control" style="background-color: #FFFDD0; color:#291F1E" name="password" id="password" placeholder="Password" required>
                <label for="password">Password Baru</label>
            </div>
            <div class="form-floating mb-2">
                <input type="password" class="form-control" style="background-color: #FFFDD0; color:#291F1E" name="password2" id="password" placeholder="Password" required>
                <label for="password">Konfirmasi Password Baru</label>
            </div>
        </form>
    </div>
@endsection
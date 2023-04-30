@extends('layouts.main')

@section('embed')
    <link rel="stylesheet" href="/css/login.css">
@endsection

@section('container')
<div class="container mt-5 d-flex justify-content-center align-items-center" style="background-color: crimson; border-radius:1em; box-shadow: 0px 4px 10px black">
    <div class="container-fluid mt-5 d-flex justify-content-evenly">
        <main class="form-signin w-50">
            <form action="" method="POST">
                @yield('user-login-title')
                    {{-- <div class="alert alert-danger" role="alert">
                        username/password salah!
                    </div> --}}
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" style="background-color: #FFFDD0; color:#291F1E" name="email" id="email" placeholder="Email" autofocus required>
                    <label for="email">Email</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" style="background-color: #FFFDD0; color:#291F1E" name="password" id="password" placeholder="Password" required>
                    <label for="password">Password</label>
                </div>
                <button class="w-100 mb-3 btn btn-lg text-dark" name="loginMember" id="submit" type="submit" style="background-color:#FFAC42">Login</button>
                @yield('form-footer')
            </form>
        </main>
        <div class="img">
            <img class="mb-4" src="/img/logo.png" data-aos="zoom-in" data-aos-duration="1000" width="300" height="300">
        </div>
    </div>
</div>
@endsection
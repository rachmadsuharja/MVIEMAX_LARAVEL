@extends('layouts.main')

@section('embed')
    <link rel="stylesheet" href="/css/login.css">
@endsection

@section('container')
<div class="container mt-5 d-flex justify-content-center align-items-center" style="background-color: crimson; border-radius:1em; box-shadow: 0px 4px 10px black">
    <div class="container-fluid mt-5 d-flex justify-content-evenly">
        <main class="form-signin w-50">
            @yield('form-head')
                @yield('user-login-title')
                @yield('input-user')
            @yield('form-footer')
            </form>
        </main>
        <div class="img">
            <img class="mb-4" src="/img/logo.png" data-aos="zoom-in" data-aos-duration="1000" width="300" height="300">
        </div>
    </div>
</div>
@endsection
@extends('layouts.main')

@section('container')
    <div class="container w-100 d-flex align-items-center justify-content-center" style="height:100vh">
        @error('email')
            <div class="alert alert-transparent font-weight-bolder text-white mt-1" style="font-size:2em"><i class="fa-solid fa-circle-exclamation"></i> {{$message}}</div>
        @enderror
    </div>
@endsection
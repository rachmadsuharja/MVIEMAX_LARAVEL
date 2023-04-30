@extends('layouts.main')

@section('embed')
    <link rel="stylesheet" href="/css/card.css">
@endsection

@section('navbar')
    @include('partials.publisher-navbar')
@endsection

@section('container')
<div class="main-content">
    <div class="m-0 p-5">
        <div class="row mt-5">
            <div class="col-md-4 col-xl-3">
                <div class="card bg-c-green order-card">
                    <div class="card-block">
                        <h6 class="m-b-20">Publisher</h6>
                        <hr>
                        <div class="d-flex justify-content-between align-items-center">
                            <h1>0</h1>
                            <i class="fa-solid fa-user-group"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-xl-3">
                <div class="card bg-c-yellow order-card">
                    <div class="card-block">
                        <h6 class="m-b-20">Film</h6>
                        <hr>
                        <div class="d-flex justify-content-between align-items-center">
                            <h1>0</h1>
                            <i class="fa-solid fa-film"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
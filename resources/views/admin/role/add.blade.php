@extends('layouts.main')

@section('embed')
    <link rel="stylesheet" href="/css/checkbox-features.css">
@endsection

@section('container')
    <div class="container bg-transparent w-100 h-100 p-3 d-flex justify-content-center align-items-center">
        <div class="container-fluid w-50 px-5 py-3 rounded" style="background-color: crimson;">
            <div class="mb-3 d-flex justify-content-center">
                <h3 style="color: #dfdfdf;">Tambah Role</h3>
            </div>
            <form action="{{route('store-role')}}" method="POST">
                @csrf
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <div class="alert alert-transparent p-0 text-white-50 mt-1"><i class="fa-solid fa-circle-exclamation"></i> {{ $error }}</div>
                            @endforeach
                        </ul>
                    </div>
                @endif
                    <div class="mb-3">
                        <label for="name" class="form-label text-white">Nama Role</label>
                        <input class="form-control" type="text" name="name" id="name" placeholder="nama role..." aria-label="default input example">
                    </div>
                    <div class="mb-3">
                        <label for="features" class="form-label text-white">Fitur</label>
                        <div class="form-control">
                            <div class="checkbox-container">
                                <div class="checkbox-grid">
                                    <input type="checkbox" name="features[]" value="Badge" id="badge">
                                    <label for="badge">Badge Khusus</label>
                                </div>
                                <div class="checkbox-grid">
                                    <input type="checkbox" name="features[]" value="Free Ads" id="freeAds">
                                    <label for="freeAds">Free Ads</label>
                                </div>
                                <div class="checkbox-grid">
                                    <input type="checkbox" name="features[]" value="720p Quality" id="720p">
                                    <label for="720p">720p Quality</label>
                                </div>
                                <div class="checkbox-grid">
                                    <input type="checkbox" name="features[]" value="1080p Quality" id="1080p">
                                    <label for="1080p">1080p Quality</label>
                                </div>
                                <div class="checkbox-grid">
                                    <input type="checkbox" name="features[]" value="4K+HDR Quality" id="4k">
                                    <label for="4k">4K+HDR Quality</label>
                                </div>
                                <div class="checkbox-grid">
                                    <input type="checkbox" name="features[]" value="Download Standar Resolution" id="download">
                                    <label for="download">Download Standar Resolution</label>
                                </div>
                                <div class="checkbox-grid">
                                    <input type="checkbox" name="features[]" value="Download High Resolution" id="highDownload">
                                    <label for="highDownload">Download High Resolution</label>
                                </div>
                            </div>
                        </div>
                        {{-- @error('features')
                            <div class="alert alert-transparent p-0 text-white-50 mt-1"><i class="fa-solid fa-circle-exclamation"></i> {{$message}} </div>
                        @enderror --}}
                    </div>
                    <div class="role-container d-flex justify-content-between">
                        <div class="mb-3">
                            <label for="price" class="form-label text-white">Harga</label>
                            <input type="number" name="price" class="form-control" value="" placeholder="harga role...">
                            {{-- @error('price')
                                <div class="alert alert-transparent p-0 text-white-50 mt-1"><i class="fa-solid fa-circle-exclamation"></i> {{$message}} </div>
                            @enderror --}}
                        </div>
                        <div class="mb-3">
                            <label for="role_limit" class="form-label text-white">Limit</label>
                            <div class="form-control">
                                <input type="range" name="role_limit" class="form-range" id="role_limit" value="" min="1" max="12" oninput="this.nextElementSibling.value = this.value + ' Bulan'">
                                <output for="role_limit" style="width: 4em; color:#555555"> Bulan</output>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 d-flex justify-content-between">
                        <a href="/admin/roles" class="btn btn-secondary">Kembali</a>
                        <button type="submit" class="form-button btn btn-success" name="submit">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

{{-- REQUIRE SCRIPT --}}
@include('sweetalert::alert')
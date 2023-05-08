@extends('layouts.main')

@section('embed')
    <link rel="stylesheet" href="/css/checkbox-features.css">
@endsection

@section('container')
    <div class="container bg-transparent w-100 h-100 p-3 d-flex justify-content-center align-items-center">
        <div class="container-fluid w-50 px-5 py-3 rounded" style="background-color: crimson;">
            <div class="mb-3 d-flex justify-content-center">
                <h3 style="color: #dfdfdf;">Update Role</h3>
            </div>
            <form action="{{route('update-role', ['id' => $role->id])}}" method="POST">
                @method('put')
                @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label text-white">Nama Role</label>
                        <input class="form-control" type="text" name="name" value="{{$role->name}}" id="nama" value="" placeholder="nama role..." aria-label="default input example" required>
                    </div>
                    <div class="mb-3">
                        <label for="features" class="form-label text-white">Fitur</label>
                        <div class="form-control">
                            <div class="checkbox-container">
                                <div class="checkbox-grid">
                                    <input type="checkbox" name="features[]" value="Badge" {{ str_contains($role->features, 'Badge') ? 'checked' : '' }} id="badge">
                                    <label for="badge">Badge Khusus</label>
                                </div>
                                <div class="checkbox-grid">
                                    <input type="checkbox" name="features[]" value="Free Ads" {{ str_contains($role->features, 'Free Ads') ? 'checked' : '' }} id="freeAds">
                                    <label for="freeAds">Free Ads</label>
                                </div>
                                <div class="checkbox-grid">
                                    <input type="checkbox" name="features[]" value="720p Quality" {{ str_contains($role->features, '720p Quality') ? 'checked' : '' }} id="720p">
                                    <label for="720p">720p Quality</label>
                                </div>
                                <div class="checkbox-grid">
                                    <input type="checkbox" name="features[]" value="1080p Quality" {{ str_contains($role->features, '1080p Quality') ? 'checked' : '' }} id="1080p">
                                    <label for="1080p">1080p Quality</label>
                                </div>
                                <div class="checkbox-grid">
                                    <input type="checkbox" name="features[]" value="4K+HDR Quality" {{ str_contains($role->features, '4K+HDR Quality') ? 'checked' : '' }} id="4k">
                                    <label for="4k">4K+HDR Quality</label>
                                </div>
                                <div class="checkbox-grid">
                                    <input type="checkbox" name="features[]" value="Download Standar Resolution" {{ str_contains($role->features, 'Download Standar Resolution') ? 'checked' : '' }} id="download">
                                    <label for="download">Download Standar Resolution</label>
                                </div>
                                <div class="checkbox-grid">
                                    <input type="checkbox" name="features[]" value="Download High Resolution" {{ str_contains($role->features, 'Download High Resolution') ? 'checked' : '' }} id="highDownload">
                                    <label for="highDownload">Download High Resolution</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="role-container d-flex justify-content-between">
                        <div class="mb-3">
                            <label for="price" class="form-label text-white">Harga</label>
                            <input type="number" name="price" class="form-control" value="{{$role->price}}" placeholder="harga role..." required>
                        </div>
                        <div class="mb-3">
                            <label for="role_limit" class="form-label text-white">Limit</label>
                            <div class="form-control">
                                <input type="range" name="role_limit" class="form-range" id="role_limit" value="{{$role->role_limit}}" min="1" max="12" oninput="this.nextElementSibling.value = this.value + ' Bulan'">
                                <output for="role_limit" style="width: 4em; color:#555555"> Bulan</output>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 d-flex justify-content-between">
                        <a href="/admin/roles" class="btn btn-secondary">Kembali</a>
                        <button type="submit" class="form-button btn btn-success" name="submit">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
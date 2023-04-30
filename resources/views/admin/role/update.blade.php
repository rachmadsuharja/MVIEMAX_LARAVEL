@extends('layouts.main')

@section('embed')
    <link rel="stylesheet" href="/css/checkbox-grid.css">
@endsection

@section('container')
    <div class="container bg-transparent w-100 h-100 p-3 d-flex justify-content-center align-items-center">
        <div class="container-fluid w-50 px-5 py-3 rounded" style="background-color: crimson;">
            <div class="mb-3 d-flex justify-content-center">
                <h3 style="color: #dfdfdf;">Update Role</h3>
            </div>
            <form action="" method="POST">
                <input type="hidden" name="id" value="">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Role</label>
                        <input class="form-control" type="text" name="nama" id="nama" value="" placeholder="nama role..." aria-label="default input example" required>
                    </div>
                    <div class="mb-3">
                        <label for="fitur" class="form-label">Fitur</label>
                        <div class="form-control">
                                <li>
                                    <input type="checkbox" name="fitur[0]" value="4K Quality" id="hdquality">
                                    <label for="hdquality">4K Quality</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="fitur[1]" value="Download" id="downloadfitur">
                                    <label for="downloadfitur">Download Film</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="fitur[2]" value="Badge" id="badge">
                                    <label for="badge">Badge Khusus</label>
                                </li>
                        </div>
                    </div>
                    <div class="role-container d-flex justify-content-between">
                        <div class="mb-3">
                            <label for="harga" class="form-label">Harga</label>
                            <input type="number" name="harga" class="form-control" value="" placeholder="harga role..." required>
                        </div>
                        <div class="mb-3">
                            <label for="role_limit" class="form-label">Limit</label>
                            <div class="form-control">
                                <input type="range" name="role_limit" class="form-range" id="role_limit" value="" min="1" max="12" oninput="this.nextElementSibling.value = this.value + ' Bulan'">
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
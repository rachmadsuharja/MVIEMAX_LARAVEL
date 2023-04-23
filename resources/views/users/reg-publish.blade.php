@extends('layouts.main')

@section('container')
<div id="publisher" class="publisher mt-5">
    <div class="container bg-danger text-white p-3">
        <div class="container bg-dark w-100 h-100 p-3 d-flex justify-content-center align-items-center">
            <div class="container-fluid w-50 p-3">
                <div class="mb-3 d-flex justify-content-center align-items-center">
                    <h3>Gabung Bersama Kami</h3>
                </div>
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input class="form-control" type="text" name="username" id="username" placeholder="Username..." aria-label="default input example" required>
                    </div>
                    <div class="mb-3 d-flex justify-content-between">
                        <div>
                            <label for="password" class="form-label">Password</label>
                            <input class="form-control" type="password" name="password" id="password" placeholder="Password..." aria-label="default input example" required>
                        </div>
                        <div>
                            <label for="password2" class="form-label">Konfirmasi Password</label>
                            <input class="form-control" type="password" name="password2" id="password2" placeholder="Konfirmasi Password..." aria-label="default input example" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="telp" class="form-label">No. Telpon</label>
                        <input class="form-control" type="number" name="telp" id="telp" placeholder="Telpon..." aria-label="default input example" required>
                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Alamat..." id="alamat" name="alamat" style="height: 100px; resize:none;" required></textarea>
                            <label for="alamat" class="text-dark">Alamat</label>
                        </div>
                    </div>
                    <div class="mb-3 d-flex justify-content-between">
                        <p>Sudah punya akun? <a class="btn btn-primary px-1 py-0" href="../user/publisher/login.php">Login</a></p>
                        <button type="submit" name="register" id="register" class="btn btn-danger mt-2 p-1">Buat Akun</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
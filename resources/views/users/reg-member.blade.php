@extends('layouts.main')

@section('navbar')
    @include('partials.navbar')
@endsection

@section('container')
        <div id="publisher" class="publisher mt-5">
            <div class="container bg-danger text-white p-3">
                <div class="container bg-dark w-100 h-100 p-3 d-flex justify-content-center align-items-center">
                    <div class="container-fluid w-50 p-3">
                        <div class="mb-3 d-flex justify-content-center align-items-center">
                            <h3>Gabung Membership</h3>
                        </div>
                        <form action="{{route('store-reg-member')}}" method="POST">
                            @csrf
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul class="m-0">
                                        @foreach ($errors->all() as $error)
                                            <li class="list-group-item text-danger">{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="mb-2">
                                <label for="name" class="form-label">Nama</label>
                                <input class="form-control" type="text" name="name" id="name" placeholder="Nama..." aria-label="default input example">
                            </div>
                            <div class="mb-2">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
                            </div>
                            <div class="mb-2 d-flex justify-content-between">
                                <div class="mb-2">
                                    <label for="password" class="form-label">Password</label>
                                    <input class="form-control" type="password" name="password" id="password" placeholder="Password..." aria-label="default input example">
                                </div>
                                <div class="mb-2">
                                    <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                                    <input class="form-control" type="password" name="password_confirmation" id="password_confirmation" placeholder="Konfirmasi password..." aria-label="default input example">
                                </div>
                            </div>
                            <div class="mb-2">
                                <label for="gender" class="form-label">Gender</label>
                                <div class="form-control">
                                    <input type="radio" name="gender" value="Laki-laki" id="laki-laki">
                                    <label for="laki-laki">Laki-laki</label>
                                    <input type="radio" name="gender" value="Perempuan" id="perempuan">
                                    <label for="perempuan">Perempuan</label>
                                </div>
                            </div>
                            <div class="mb-2">
                                <label for="role_id" class="form-label">Role</label>
                                <select class="form-select" name="role_id" id="role_id" aria-label="Default select example">
                                    @foreach ($roles as $role)
                                        <option value="{{$role->id}}">{{$role->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-4 d-flex justify-content-between">
                                <p>Sudah punya akun? <a class="btn btn-primary px-1 py-0" href="/membership-login">Login</a></p>
                                <button type="submit" name="register" id="register" class="btn btn-danger mt-2 p-1">Buat Akun</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
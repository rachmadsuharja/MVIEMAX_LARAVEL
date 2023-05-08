@extends('layouts.main')

@section('embed')
    <link rel="stylesheet" href="/css/checkbox-grid.css">
@endsection

@section('container')
    <div class="container bg-transparent w-100 h-100 p-3 d-flex justify-content-center align-items-center">
        <div class="container-fluid w-50 px-5 py-3 bg-danger rounded">
            <div class="mb-3 d-flex justify-content-center">
                <h3 style="color: #dfdfdf;">Update Membership</h3>
            </div>
                <form action="{{route('update-member', ['id' => $member->id])}}" method="POST">
                    @method('put')
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input class="form-control" type="text" name="name" value="{{$member->name}}" id="name" placeholder="Name..." aria-label="default input example" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" value="{{$member->email}}" id="email" placeholder="name@example.com" required>
                    </div>
                    <div class="mb-3">
                        <label for="gender" class="form-label">Gender</label>
                        <div class="form-control">
                            <input type="radio" name="gender" value="Laki-laki" {{($member->gender === 'Laki-laki') ? 'checked' : ''}} id="laki-laki">
                            <label for="laki-laki">Laki-laki</label>
                            <input type="radio" name="gender" value="Perempuan" {{($member->gender === 'Perempuan') ? 'checked' : ''}} id="perempuan">
                            <label for="perempuan">Perempuan</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="role" class="form-label">Role</label>
                        <select class="form-select" name="role_id" id="role_id" aria-label="Default select example">
                            <option disabled value>Pilih Role</option>
                            @foreach ($roles as $role)
                                <option value="{{$role->id}}">{{$role->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3 d-flex justify-content-between">
                        <a href="/admin/memberships" class="btn btn-secondary">Kembali</a>
                        <button type="submit" name="register" id="submit" class="btn btn-success">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
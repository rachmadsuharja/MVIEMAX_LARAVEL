@extends('layouts.main')

@section('navbar')
    @include('partials.navbar')
@endsection

@section('container')
    <div class="container bg-danger mt-5 p-3">
        <div id="feedback">
            <div class="container text-white p-0">
                <div class="container w-100 h-100 d-flex justify-content-center align-items-center bg-dark">
                    <div class="container-fluid w-50 p-3">
                        <div class="mb-3 d-flex justify-content-center">
                            <h3>Feedback</h3>
                        </div>
                        <form action="{{route('store-feedback')}}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input class="form-control" type="text" name="name" id="nama" placeholder="Nama..." aria-label="default input example" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="name@name.com">
                            </div>
                            <div class="mb-3">
                                <div class="form-floating mt-4">
                                    <textarea class="form-control" placeholder="Feedback" id="feedback" name="feedback" style="height: 100px" required></textarea>
                                    <label for="feedback" class="text-dark">Feedback</label>
                                </div>
                            </div>
                            <div class="mb-3 d-flex justify-content-end">
                                <button type="submit" name="submit" id="submit" class="btn btn-danger d-flex justify-content-end">Kirim</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
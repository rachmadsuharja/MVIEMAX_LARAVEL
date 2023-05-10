@extends('layouts.main')

@section('container')
    <div class="container w-100 d-flex align-items-center justify-content-center" style="height:100vh">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
@endsection
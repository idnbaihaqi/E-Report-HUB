@extends('layout.user')

@section('css')
<link rel="stylesheet" href="{{ asset('css/landing.css') }}">
<style>
    body {
        background: #2d9c7b;
    }

    .btn-purple {
        background: #2d9c7b;
        width: 100%;
        color: #fff;
    }

    .btn-purple:hover {
        background: #2d9c7b;
        width: 100%;
        color: #fff;
        font-weight: 600;
    }

    .btn-warning {
        background: #2d9c7b;
        border: none;
    }
</style>
@endsection

@section('title', 'Register Page')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <h2 class="text-center text-white mg-0 mt-5">REHUB</h2>
            <p class="text-center text-white mg-5">E-Report Hub</p>
            <div class="card mt-5">
                <div class="card-body">
                    <h2 class="text-center mb-5">Create Account</h2>
                    <form action="#" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="number" name="nik" placeholder="NIK" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="text" name="nama" placeholder="Name" class="form-control">
                        </div><div class="form-group">
                            <input type="text" name="username" placeholder="Username" class="form-control">
                        </div><div class="form-group">
                            <input type="password" name="password" placeholder="Password" class="form-control">
                        </div><div class="form-group">
                            <input type="number" name="telp" placeholder="Phone Number" class="form-control">
                        </div>
                        <button class="btn btn-purple">Register</button>
                    </form>
                </div>
            </div>
            @if (Session::has('pesan'))
                <div class="alert alert-danger mt-2">
                    {{ Session::get('pesan') }}
                </div>
            @endif
            <a href="{{route('ereporthub.index')}}" class="btn btn-warning text-white mt-3" style="width: 100%">Back To Home</a>
        </div>
    </div>
</div>




@endsection


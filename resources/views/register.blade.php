@extends('layouts.main')

@section('main_body')
@if (session()->has('success_register'))
<div class="alert alert-success" role="alert">
    <h4 class="alert-heading">Selamat</h4>
    {{ session('success_register') }}
    <hr>
    <p class="mb-0">Silakan Login</p>
</div>
@endif
@if (session()->has('loginError'))
<div class="alert alert-danger" role="alert">
    <h4 class="alert-heading">Maaf</h4>
    {{ session('loginError') }}
    <hr>
    <p class="mb-0"></p>
</div>
@endif
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg text-center mt-4 text-dark">
            <h1 class="fw-bold">Rabkamar</h1>
        </div>
    </div>

    <div class="container" id="login-container">
        <div class="row login-form m-4">
            <div class="col-md-6 offset-md-3 rounded-3 bg-color-article p-5">
                <h4 class="fw-bold text-center">Daftar</h4>
                <form class="mt-4" action="/register" method="post">
                    @csrf
                    <div class="d-grid mx-auto ">
                        <label for="InputNama" class="form-label fw-bold mt-4">Nama</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror form-login" placeholder="Nama" id="InputNama" name="name" required>
                        @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="d-grid mx-auto">
                        <label for="InputEmail" class="form-label fw-bold mt-3">Email</label>
                        <input type="email" class="form-control  @error('email') is-invalid @enderror form-login" placeholder="Email" id="InputEmail" name="email" required>
                        @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="d-grid mx-auto">
                        <label for="InputPassword" class="form-label fw-bold mt-3">Password</label>
                        <input type="password" class="form-control  @error('password') is-invalid @enderror form-login" placeholder="Password" id="InputPassword" name="password" required>
                        @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="d-grid mx-auto">
                        <button type="submit" class="btn d-grid gap-2 btn-dark mt-5">Daftar</button>
                    </div>
                    <div class="text-center mt-3 mb-2">
                        <span class="fw-light">Sudah mempunyai akun?</span>
                        <a class="link-dark" href="/login">Masuk</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
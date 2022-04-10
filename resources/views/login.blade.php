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
                <h4 class="fw-bold text-center">Masuk ke Akun Anda</h4>
                <form class="mt-4" action="/login" method="post">
                    @csrf
                    <div class="d-grid mx-auto ">
                        <label for="exampleInputEmail1" class="form-label fw-bold mt-4">Email</label>
                        <input type="email" class="form-control form-login" name="email" placeholder="Email" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="d-grid mx-auto">
                        <label for="exampleInputPassword1" class="form-label fw-bold mt-3">Password</label>
                        <input type="password" class="form-control form-login" name="password" placeholder="Password" id="exampleInputPassword1">
                    </div>
                    <div class="d-grid mx-auto text-end">
                        <a class="link-dark mt-2" href="">Lupa Password?</a>
                    </div>
                    <div class="d-grid mx-auto">
                        <button type="submit" class="btn d-grid gap-2 btn-dark mt-4">Masuk</button>
                    </div>
                    <div class="text-center mt-3 mb-2">
                        <span class="fw-light">Belum mempunyai akun?</span>
                        <a class="link-dark" href="/register">Daftar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
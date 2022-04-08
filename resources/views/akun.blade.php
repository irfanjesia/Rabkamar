@extends('layouts.main')

@section('header')
@include('partials.navbar_user')
@endsection

@section('main_body')
<div class="container pb-4 border-bottom">
    <span class="brmedium"></span>
    <h1 class="display-5 fw-bold text-center">Akun</h1>
</div>

<div class="container mt-3">
    <div class="row justify-content-center align-items-center">
        <div class="col-lg-3 my-3">
            <img class="img-fluid rounded-circle" src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80">
        </div>
        <div class="col-lg-9">
            <div class="row">
                <div class="col-lg-5 pe-3 mx-3 border-end">
                    <p>Nama : {{ $user->name }}</p>
                    <p>Email : {{ $user->email }}</p>
                    <p>Bergabung pada : {{ $user->created_at }}</p>
                </div>
                <div class="col-lg-5 pb-4 mx-3">
                    <p>Jumlah pesanan : {{ $user->order()->count() }}</p>
                    <a class="btn btn-dark" href="/dashboard/riwayat/{{ $user->id }}">Riwayat Pesanan</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('layouts.main')

@section('header')
@include('partials.navbar_user')
@endsection

@section('main_body')
<div class="container pb-4 border-bottom">
    <span class="brmedium"></span>
    <h1 class="display-5 fw-bold text-center">Riwayat Pesanan</h1>
</div>

<table class="table container">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Tanggal Pemesanan</th>
            <th scope="col">Jenis Kamar</th>
            <th scope="col">Jumlah Orang</th>
            <th scope="col">Bukti Pemesanan</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <th scope="row"></th>
            <td>{{ $user->created_at}}</td>
            <td>{{ $user->kamar->jenis_kamar }}</td>
            <td>{{ $user->jumlah_orang }}</td>
            <td><a class="btn btn-dark" href="/dashboard/pesan/ordered/{{ $user->id }}">Lihat</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
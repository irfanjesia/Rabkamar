@extends('layouts.main')

@section('main_body')
<div class="container">
    <div class="container border mt-5" id="bukti-booking">
        <div class="container fw-light mt-3">
            <h3 class="display-7 mb-4 pb-3 border-bottom text-center">Bukti Booking</h3>
            <p class="mb-5">Tanggal pemesanan: {{ $ordered->created_at }}</p>
            <p>Nama pemesan : {{ $ordered->user->name }}</p>
            <p>Tanggal Check in : {{ $ordered->tanggal_masuk }}</p>
            <p>Tanggal Check Out : {{ $ordered->tanggal_keluar }}</p>
            <p>Jenis Kamar : {{ $ordered->kamar->jenis_kamar }}</p>
            <p class="mb-5">Jumlah orang : {{ $ordered->jumlah_orang }}</p>
            <p class="fw-bold">Mohon tunjukkan bukti booking pada saat check in</p>
        </div>
    </div>
    <a class="mt-4 btn btn-md btn-dark link" href="/dashboard/pesan">Kembali ke Halaman Utama</a>
</div>
@endsection
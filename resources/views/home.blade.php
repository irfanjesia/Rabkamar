@extends('layouts.main')

@section('header')
@include('partials.navbar_guest')
@endsection

@section('main_body')
<div class="position-relative">
    <div class="jumbotron jumbotron-fluid text-light bg-jumbotron" style="background-image: url('img/jumbotron.png')">
        <div class="container my-5" id="jumbotron">
            <h3>Piihan Terbaik</h3>
            <h1 class="display-4 fw-bolder">Menginap Anda</h1>
            <p class="lead">Rabkamar adalah salah satu hotel mewah terbaik di negara kita. Kami menawarkan akomodasi berkualitas tinggi dengan berbagai macam kamar, layanan, dan fasilitas yang tersedia untuk semua tamu kami.</p>
            <span class="brlarge"></span>
        </div>
    </div>

    <div class="position-absolute top-100 start-50 translate-middle">
        <div class="container rounded-3 bg-color-article" id="availability">
            <div class="row justify-content-center">
                <div class="col-lg info-panel mx-5 mt-4 mb-5">
                    <form action="">
                        <div class="row text-center">
                            <div class="col-lg mt-3">
                                <h6>Tanggal Check In</h6>
                                <input type="date" class="date-input" name="" id="">
                            </div>
                            <div class="col-lg mt-3">
                                <h6>Tanggal Check Out</h6>
                                <input type="date" class="date-input" name="" id="">
                            </div>
                            <div class="col-lg mt-3">
                                <button type="button" class="btn btn-dark mt-3">Cek Kamar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container welcome mt-5">
    <span class="brmedium"></span>
    <div class="row">
        <div class="col-lg-6 my-4">
            <img class="img-fluid rounded-3" src="{{ URL::asset('img/welcome.png') }}" alt="hotel" id="img-welcome">
        </div>
        <div class="col-lg-6 my-4 justify-content-center">
            <h3>Selamat Datang di RabKamar</h3>
            <p class="mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua.<br><br>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                aliquip ex ea commodo consequat. Duis aute irure dolor in.</p>
        </div>
    </div>
</div>

<div class="container-fluid bg-color-article" id="rooms">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center mt-5">
                <h3>Kamar Kami</h3>
                <p class="mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                    tempor
                    incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="container">
                <div class="card-group text-center mb-5 ">
                    <div class="card m-4 rounded-3">
                        <img src="{{ URL::asset('img/suite-room.png') }}" class="card-img-top" alt="suite room">
                        <div class="card-body">
                            <h5 class="card-title">Suite</h5>
                        </div>
                    </div>
                    <div class="card m-4 rounded-3">
                        <img src="{{ URL::asset('img/reguler-room.png') }}" class="card-img-top" alt="reguler room">
                        <div class="card-body">
                            <h5 class="card-title">Reguler</h5>
                        </div>
                    </div>
                    <div class="card m-4 rounded-3">
                        <img src="{{ URL::asset('img/family-room.png') }}" class="card-img-top" alt="family room">
                        <div class="card-body">
                            <h5 class="card-title">Family</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="row text-center mb-4">
                <div class="col-lg">
                    <h3 class="">Tertarik?</h3>
                    <h1 class="display-4 fw-bolder">Pesan Sekarang</h1>
                </div>
            </div>
            <div class="row text-center mb-4">
                <div class="d-grid gap-2 col-4 mx-auto">
                    <p>Sudah punya akun?</p>
                    <a href="/login"><button type="button" class="btn btn-lg btn-dark">Masuk</button></a>
                </div>
                <div class="d-grid gap-2 col-4 mx-auto">
                    <p>Belum punya akun?</p>
                    <a href="/register"><button type="button" class="btn btn-lg btn-dark">Daftar</button></a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row my-5 text-center">
        <h3>Keuntungan Pemesanan Secara Langsung</h3>
    </div>

    <div class="row my-5">
        <div class="col text-center">
            <img src="{{ URL::asset('svg/harga-bersahabat.svg') }}" alt="piggy bank">
            <p class="mt-4">Harga bersahabat</p>
        </div>
        <div class="col text-center">
            <img src="{{ URL::asset('svg/bebas-biaya-booking.svg') }}" alt="no booking fee">
            <p class="mt-4">Bebas biaya<br>booking</p>
        </div>
        <div class="col text-center">
            <img src="{{ URL::asset('svg/bebas-biaya-kartu-kredit.svg') }}" alt="no credit card">
            <p class="mt-4">Bebas biaya<br>kartu kredit</p>
        </div>
        <div class="col text-center">
            <img src="{{ URL::asset('svg/bebas-kustomisasi.svg') }}" alt="flexible to modify">
            <p class="mt-4">Bebas<br>kustomisasi</p>
        </div>
        <div class="col text-center">
            <img src="{{ URL::asset('svg/bayar-di-hotel.svg') }}" alt="pay at hotel">
            <p class="mt-4">Bayar di hotel</p>
        </div>
    </div>
</div>
@endsection

@section('footer')
@include('partials.footer')
@endsection

@section('script')
<script src="{{ URL::asset('js/navbar_onscroll.js') }}"></script>
@endsection
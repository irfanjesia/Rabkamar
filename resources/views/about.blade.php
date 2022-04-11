@extends('layouts.main')

@section('header')
@include('partials.navbar_guest')
@endsection

@section('main_body')
<div class="jumbotron jumbotron-fluid text-light bg-jumbotron" style="background-image: url('img/about.png')">
    <div class="container my-5" id="jumbotron">
        <h3>Selamat Datang di</h3>
        <h1 class="display-4 fw-bolder">Rabkamar</h1>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in.</p>
        <span class="brmedium"></span>
    </div>
</div>

<div class="container">
    <div class="row my-5 text-center">
        <h3>Layanan Kami</h3>
    </div>
    <div class="row my-5">
        <div class="col text-center">
            <img src="{{ URL::asset('svg/breakfast.svg') }}" alt="dish">
            <h5 class="mt-4">Sarapan</h5>
            <p class="mt-4">Gratis 2 porsi sarapan<br>untuk setiap kamar</p>
        </div>
        <div class="col text-center">
            <img src="{{ URL::asset('svg/wifi.svg') }}" alt="wifi signal">
            <h5 class="mt-4">Wifi</h5>
            <p class="mt-4">Layanan wifi berkecepatan<br>tinggi selama 24 jam</p>
        </div>
        <div class="col text-center">
            <img src="{{ URL::asset('svg/car.svg') }}" alt="free parking">
            <h5 class="mt-4">Bebas Parkir</h5>
            <p class="mt-4">Bebas biaya parkir untuk<br>penginap hotel</p>
        </div>
    </div>
</div>

<div class="container-fluid bg-color-article">
    <div class="container py-5 text-center">
        <h3>Tentang Kami</h3>
        <p class="mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in.</p>
        <p class="mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in.</p>
    </div>
</div>

<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col justify-content-center text-center">
                <h3 class="mt-5">Lokasi Kami</h3>
                <iframe class="w-100 mt-4" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15805.788953307723!2d112.6079343!3d-7.95264815!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78827f2d620975%3A0xf19b7459bbee5ed5!2sBrawijaya%20University!5e0!3m2!1sen!2sid!4v1649668961831!5m2!1sen!2sid" style="border:0;" height="300" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <p class="mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in.</p>
                <p>Ketawanggede, Lowokwaru, Malang City, East Java</p>
            </div>
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
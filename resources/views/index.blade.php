@extends('layouts.main')

@section('header')
@include('partials.navbar_user')
@endsection

@section('main_body')
<div class="container pb-4 border-bottom">
    <span class="brmedium"></span>
    <h1 class="display-5 fw-bold text-center">Isi Data Pemesanan</h1>
</div>

<div class="container mt-5 pb-5">
    <form action="/dashboard/pesan/order" method="post">
        @csrf
        <input type="hidden" name="user" value="{{ auth()->user()->id }}">
        <div class=" text-center row justify-content-center pb-5 border-bottom">
            <div class="col-lg-4 mt-4">
                <h3>Tanggal Check In</h3>
                <input type="date" class="date-input mt-3 mb-4" name="tanggal_masuk" id="">
            </div>
            <div class="col-lg-4 mt-4">
                <h3>Tanggal Check Out</h3>
                <input type="date" class="date-input mt-3 mb-4" name="tanggal_keluar" id="">
            </div>
        </div>
        <div class="text-center row justify-content-center pb-5 border-bottom">
            <div class="col-lg-8 mt-5">
                <h3>Jenis Kamar</h3>
            </div>
            <div class="row justify-content-center">
                <div class="container">
                    <div class="row justify-content-center mt-4">
                        <div class="container">
                            <div class="card-group text-center">
                                <div class="card m-3 rounded-3">
                                    <img src="{{ URL::asset('img/suite-room.png') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Suite</h5>
                                        <input type="radio" class="btn-check" name="kamar" value="1" id="option1" autocomplete="off" checked>
                                        <label class="btn btn-outline-dark btn-lg" for="option1">Pilih</label>
                                    </div>
                                </div>
                                <div class="card m-3 rounded-3">
                                    <img src="{{ URL::asset('img/reguler-room.png') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Reguler</h5>
                                        <input type="radio" class="btn-check" name="kamar" value="2" id="option2" autocomplete="off" checked>
                                        <label class="btn btn-outline-dark btn-lg" for="option2">Pilih</label>
                                    </div>
                                </div>
                                <div class="card m-3 rounded-3">
                                    <img src="{{ URL::asset('img/family-room.png') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Family</h5>
                                        <input type="radio" class="btn-check" name="kamar" value="3" id="option3" autocomplete="off" checked>
                                        <label class="btn btn-outline-dark btn-lg" for="option3">Pilih</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center row justify-content-center pb-5 border-bottom">
            <div class="col-lg-8 mt-5 mb-2">
                <h3>Jumlah Orang</h3>
            </div>
            <div class="text-center my-4 row justify-content-center">
                <div class="col-lg-2 mt-3">
                    <h4>Dewasa</h4>
                    <div class="input-group mt-3">
                        <input type="number" name="jumlah_orang_dewasa" id="jlhDewasa" value="0" class="form-control" placeholder="">
                        <button id="btnUpDewasa" onclick="upBtnDewasa()" class="btn btn-outline-secondary" type="button"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.6568 8.96219L16.2393 10.3731L12.9843 7.10285L12.9706 20.7079L10.9706 20.7059L10.9843 7.13806L7.75404 10.3532L6.34314 8.93572L12.0132 3.29211L17.6568 8.96219Z" fill="currentColor" />
                            </svg></button>
                        <button id="btnDownDewasa" onclick="downBtnDewasa()" class="btn btn-outline-secondary" type="button"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.0001 3.67157L13.0001 3.67157L13.0001 16.4999L16.2426 13.2574L17.6568 14.6716L12 20.3284L6.34314 14.6716L7.75735 13.2574L11.0001 16.5001L11.0001 3.67157Z" fill="currentColor" />
                            </svg></button>
                    </div>
                </div>
                <div class="col-lg-2 mt-3">
                    <h4>Anak</h4>
                    <div class="input-group mt-3">
                        <input type="number" name="jumlah_orang_anak" id="jlhAnak" value="0" class="form-control" placeholder="">
                        <button id="btnUpAnak" onclick="upBtnAnak()" class="btn btn-outline-secondary" type="button"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.6568 8.96219L16.2393 10.3731L12.9843 7.10285L12.9706 20.7079L10.9706 20.7059L10.9843 7.13806L7.75404 10.3532L6.34314 8.93572L12.0132 3.29211L17.6568 8.96219Z" fill="currentColor" />
                            </svg></button>
                        <button id="btnDownAnak" onclick="downBtnAnak()" class="btn btn-outline-secondary" type="button"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.0001 3.67157L13.0001 3.67157L13.0001 16.4999L16.2426 13.2574L17.6568 14.6716L12 20.3284L6.34314 14.6716L7.75735 13.2574L11.0001 16.5001L11.0001 3.67157Z" fill="currentColor" />
                            </svg></button>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-check text-center mt-5">
            <input class="form-check-input" type="checkbox" value="" id="checkBox">
            <label class="form-check-label" for="flexCheckDefault">
                Saya sudah mengisi data dengan benar
            </label>
        </div>

        <div class="row text-center justify-content-center mt-4">
            <div class="col">
                <button type="submit" class="px-5 btn btn-dark btn-lg">Konfirmasi Pesanan</button>
            </div>
        </div>
    </form>
</div>
@endsection

@section('script')
<script src="{{ URL::asset('js/updown_button.js') }}"></script>
@endsection
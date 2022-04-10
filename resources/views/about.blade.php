@extends('layouts.main')

@section('header')
@include('partials.navbar_guest')
@endsection

@section('main_body')
<div class="jumbotron jumbotron-fluid text-light bg-jumbotron" style="background-image: url('img/jumbotron.png')">
    <div class="container my-5" id="jumbotron">
        <h3 class="">Piihan Terbaik</h3>
        <h1 class="display-4 fw-bolder">Menginap Anda</h1>
        <p class="lead">Rabkamar adalah salah satu hotel mewah terbaik di negara kita. Kami menawarkan akomodasi berkualitas tinggi dengan berbagai macam kamar, layanan, dan fasilitas yang tersedia untuk semua tamu kami.</p>
        <span class="brlarge"></span>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <img class="img-fluid" src="https://images.unsplash.com/photo-1496417263034-38ec4f0b665a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1471&q=80" alt="" id="img-welcome">
        </div>
        <div class="col-lg-5">
            <h3>Selamat Datang di RabKamar</h3>
            <p class="mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore
                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                aliquip ex ea commodo consequat. Duis aute irure dolor in.</p>
            <p class="mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <h3>Pendiri RabKamar</h3>
            <p class="mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore
                et dolore magna aliqua.</p>
            <p class="mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
        <div class="col-lg-3">
            <img class="img-fluid" src="https://images.unsplash.com/photo-1605664042212-73d09aa18a96?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1374&q=80" alt="" id="img-welcome">
        </div>
    </div>
</div>

<div class="container-fluid" id="rooms" style="background-color: #d8d8d8">
    <div class="container">
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
        <div class="row justify-content-center mt-4">
            <div class="container">
                <div class="card-group text-center">
                    <div class="card m-3">
                        <img src="https://images.unsplash.com/photo-1629140727571-9b5c6f6267b4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=327&q=80" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Suite</h5>
                        </div>
                    </div>
                    <div class="card m-3">
                        <img src="https://images.unsplash.com/photo-1576354302919-96748cb8299e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1529&q=80" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Reguler</h5>
                        </div>
                    </div>
                    <div class="card m-3">
                        <img src="https://images.unsplash.com/photo-1630582837298-49d1927726e5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1376&q=80" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Family</h5>
                        </div>
                    </div>
                </div>
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
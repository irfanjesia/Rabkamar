<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;700&display=swap"
        rel="stylesheet">
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }

    </style>

    <title>RABKAMAR</title>
</head>

<body>

    <nav class="navbar pt-4 pb-4 navbar-expand-lg navbar-dark bg-opacity-0 fixed-top" id="navbar"
        style="transition: 0.5s">
        <div class="container">
            <a class="navbar-brand font-weight-bold" href="#">RabKamar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Hubungi Kami</a>
                    </li>
                </ul>
                <a href="/login" class="link-light">Masuk</a>
            </div>
        </div>
    </nav>

    <div class="jumbotron jumbotron-fluid text-light">
        <div class="container" id="jumbotron">
            <h3 class="">Piihan Terbaik</h3>
            <h1 class="display-4 fw-bolder">Menginap Anda</h1>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua.</p>
            <button type="button" class="btn btn-outline-light btn-lg">Cek Kamar</button>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 info-panel">
                <form action="">
                    <div class="row">
                        <div class="col-lg">
                            <h3>Tanggal Check In</h3>
                            <input type="date" class="date-input" name="" id="">
                        </div>
                        <div class="col-lg">
                            <h3>Tanggal Check Out</h3>
                            <input type="date" class="date-input" name="" id="">
                        </div>
                        <div class="col-lg">
                            <button type="button" class="btn btn-lg btn-outline-dark mt-3">Cek Ketersediaan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container welcome">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <img class="img-fluid"
                    src="https://images.unsplash.com/photo-1496417263034-38ec4f0b665a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1471&q=80"
                    alt="" id="img-welcome">
            </div>
            <div class="col-lg-5">
                <h3>Selamat Datang di RabKamar</h3>
                <p class="mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in.</p>
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
                            <img src="https://images.unsplash.com/photo-1629140727571-9b5c6f6267b4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=327&q=80"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Suite</h5>
                            </div>
                        </div>
                        <div class="card m-3">
                            <img src="https://images.unsplash.com/photo-1576354302919-96748cb8299e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1529&q=80"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Reguler</h5>
                            </div>
                        </div>
                        <div class="card m-3">
                            <img src="https://images.unsplash.com/photo-1630582837298-49d1927726e5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1376&q=80"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Family</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <div class="container" style="margin-top: 8rem">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <h3 class="">Tertarik?</h3>
                <h1 class="display-4 fw-bolder">Pesan Sekarang</h1>
                <p>Sudah punya akun?</p>
                <a href="/login"><button type="button" class="btn btn-outline-dark btn-lg">Masuk</button></a>
                <p>Belum punya akun?</p>
                <a href="/register"><button type="button" class="btn btn-outline-dark btn-lg">Daftar</button></a>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid"
                    src="https://img.freepik.com/free-photo/happy-business-woman-pointing-copyspace_171337-8496.jpg?t=st=1648719411~exp=1648720011~hmac=4a532cdb5a831f5dcd31b39327b1e6e4a026a759d1e833bc26c0d3a1b3799b68&w=826"
                    alt="" id="img-tertarik">
            </div>
        </div>
    </div>

    <div class="container-fluid text-light" style="background-color: black; margin-top: 8rem">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center mt-3">
                <h3>Rabkamar</h3>
                <div class="row justify-content-center mt-5">
                    <div class="col-lg-2 border-end">
                        <a class="link-light" href="">Facebook</a>
                    </div>
                    <div class="col-lg-2 border-end">
                        <a class="link-light" href="">Twitter</a>
                    </div>
                    <div class="col-lg-2">
                        <a class="link-light" href="">Instagram</a>
                    </div>
                </div>
                <p class="mt-4">© 2022 Rabkamar. Privacy Policy</p>
            </div>
        </div>
    </div>


    <script>
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {

                document.getElementById("navbar").style.background = "black";
            } else {

                document.getElementById("navbar").style.background = "none";
            }
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="{{ URL::asset('js/index.js') }}"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    -->
</body>

</html>

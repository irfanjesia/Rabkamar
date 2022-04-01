<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
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

    <nav class="navbar pt-4 pb-4 navbar-expand-lg navbar-dark bg-dark bg-opacity-0 fixed-top" id="navbar"
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
                        <a class="nav-link active" aria-current="page" href="#">Pesan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Akun Saya</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Riwayat Pesanan</a>
                    </li>
                </ul>
                <a href="#" class="link-light me-3 pe-3 border-end">{{ auth()->user()->name }}</a>
                <form action="/logout" method="post">
                    @csrf

                    <button class="btn btn-danger" type="submit">Logout</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container pb-3 border-bottom" style="margin-top: 8rem">
        <h1 class="display-4 fw-bold text-center">Silakan Isi Data</h1>
    </div>

    <div class="container mt-5 pb-5">
        <form action="/order" method="post">
            @csrf
            <input type="hidden" name="user" value="{{ auth()->user()->id }}">

            <div class=" text-center row justify-content-center pb-5 border-bottom">
                <div class="col-lg-4">
                    <h3>Tanggal Check In</h3>
                    <input type="date" class="date-input" name="tanggal_masuk" id="">
                </div>
                <div class="col-lg-4">
                    <h3>Tanggal Check Out</h3>
                    <input type="date" class="date-input" name="tanggal_keluar" id="">
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
                                    <div class="card m-3">
                                        <img src="https://images.unsplash.com/photo-1629140727571-9b5c6f6267b4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=327&q=80"
                                            class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Suite</h5>
                                            <input type="radio" class="btn-check" name="kamar" value="1" id="option1"
                                                autocomplete="off" checked>
                                            <label class="btn btn-outline-dark btn-lg" for="option1">Pilih</label>
                                        </div>
                                    </div>
                                    <div class="card m-3">
                                        <img src="https://images.unsplash.com/photo-1576354302919-96748cb8299e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1529&q=80"
                                            class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Reguler</h5>
                                            <input type="radio" class="btn-check" name="kamar" value="2" id="option2"
                                                autocomplete="off" checked>
                                            <label class="btn btn-outline-dark btn-lg" for="option2">Pilih</label>
                                        </div>
                                    </div>
                                    <div class="card m-3">
                                        <img src="https://images.unsplash.com/photo-1630582837298-49d1927726e5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1376&q=80"
                                            class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Family</h5>
                                            <input type="radio" class="btn-check" name="kamar" value="3" id="option3"
                                                autocomplete="off" checked>
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
                <div class="col-lg-8 mt-5">
                    <h3>Jumlah Orang</h3>
                </div>
                <div class="text-center mt-4 row justify-content-center">
                    <div class="col-lg-2">
                        <h4>Dewasa</h4>
                        <div class="input-group">
                            <input type="number" name="jumlah_orang_dewasa" id="jlhDewasa" value="0" class="form-control" placeholder="">
                            <button id="btnUpDewasa" onclick="upBtnDewasa()" class="btn btn-outline-secondary"
                                type="button"><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M17.6568 8.96219L16.2393 10.3731L12.9843 7.10285L12.9706 20.7079L10.9706 20.7059L10.9843 7.13806L7.75404 10.3532L6.34314 8.93572L12.0132 3.29211L17.6568 8.96219Z"
                                        fill="currentColor" />
                                </svg></button>
                            <button id="btnDownDewasa" onclick="downBtnDewasa()" class="btn btn-outline-secondary"
                                type="button"><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11.0001 3.67157L13.0001 3.67157L13.0001 16.4999L16.2426 13.2574L17.6568 14.6716L12 20.3284L6.34314 14.6716L7.75735 13.2574L11.0001 16.5001L11.0001 3.67157Z"
                                        fill="currentColor" />
                                </svg></button>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <h4>Anak</h4>
                        <div class="input-group">
                            <input type="number" name="jumlah_orang_anak" id="jlhAnak" value="0" class="form-control" placeholder="">
                            <button id="btnUpAnak" onclick="upBtnAnak()" class="btn btn-outline-secondary"
                                type="button"><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M17.6568 8.96219L16.2393 10.3731L12.9843 7.10285L12.9706 20.7079L10.9706 20.7059L10.9843 7.13806L7.75404 10.3532L6.34314 8.93572L12.0132 3.29211L17.6568 8.96219Z"
                                        fill="currentColor" />
                                </svg></button>
                            <button id="btnDownAnak" onclick="downBtnAnak()" class="btn btn-outline-secondary"
                                type="button"><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11.0001 3.67157L13.0001 3.67157L13.0001 16.4999L16.2426 13.2574L17.6568 14.6716L12 20.3284L6.34314 14.6716L7.75735 13.2574L11.0001 16.5001L11.0001 3.67157Z"
                                        fill="currentColor" />
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

    <script src="js/index.js"></script>

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

        function upBtnDewasa() {
            let value = parseInt(document.getElementById('jlhDewasa').value, 10);
            value = isNaN(value) ? 0 : value;
            value++;
            document.getElementById('jlhDewasa').value = value;
        }

        function upBtnAnak() {
            let value = parseInt(document.getElementById('jlhAnak').value, 10);
            value = isNaN(value) ? 0 : value;
            value++;
            document.getElementById('jlhAnak').value = value;
        }

        function downBtnDewasa() {
            let value = parseInt(document.getElementById('jlhDewasa').value, 10);
            value = isNaN(value) ? 0 : value;
            value--;
            document.getElementById('jlhDewasa').value = value;
        }

        function downBtnAnak() {
            let value = parseInt(document.getElementById('jlhAnak').value, 10);
            value = isNaN(value) ? 0 : value;
            value--;
            document.getElementById('jlhAnak').value = value;
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="js/index.js"></script>

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

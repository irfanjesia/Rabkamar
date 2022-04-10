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

    <nav class="navbar pt-4 pb-4 navbar-dark navbar-expand-lg fixed-top" id="navbar"
        style="transition: 0.5s; background-color: black">
        <div class="container">
            <a class="navbar-brand font-weight-bold" href="/dashboard/pesan">RabKamar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/dashboard/pesan">Pesan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/dashboard/akun/{{ auth()->user()->id }}">Akun Saya</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/dashboard/riwayat/{{ auth()->user()->id }}">Riwayat
                            Pesanan</a>
                    </li>
                </ul>
                <a href="/dashboard/akun/{{ $user->id }}"
                    class="link-light me-3 pe-3 border-end">{{ auth()->user()->name }}</a>
                <form action="/logout" method="post">
                    @csrf

                    <button class="btn btn-danger" type="submit">Logout</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container pb-3 border-bottom" style="margin-top: 8rem">
        <h1 class="display-7 fw-bold text-center">Akun</h1>
    </div>

    <div class="container mt-4">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-3">
                <img class="img-fluid"
                    src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80"
                    alt="" width="300" height="300" style="border-radius: 50%">
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-5 pe-3 border-end">
                        <p>Nama : {{ $user->name }}</p>
                        <p>Email : {{ $user->email }}</p>
                        <p>Bergabung pada : {{ $user->created_at }}</p>

                        <form action="/logout" method="post">
                            @csrf

                            <button class="btn btn-danger" type="submit">Logout</button>
                        </form>
                    </div>
                    <div class="col-lg-5">
                        <p>Jumlah pesanan : {{ $user->order()->count() }}</p>
                        <a class="btn btn-outline-dark" href="/dashboard/riwayat/{{ $user->id }}">Riwayat
                            Pesanan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/index.js"></script>

    <script>

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

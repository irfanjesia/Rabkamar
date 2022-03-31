<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }

    </style>

    <title>LOGIN</title>
</head>

<body>
    @if (session()->has('success_register'))
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Selamat</h4>
            {{ session('success_register') }}
            <hr>
            <p class="mb-0">Silakan Login</p>
        </div>
    @endif
    @if (session()->has('loginError'))
        <div class="alert alert-danger" role="alert">
            <h4 class="alert-heading">Maaf</h4>
            {{ session('loginError') }}
            <hr>
            <p class="mb-0"></p>
        </div>
    @endif
    <div class="container-fluid text-light" id="login-container">
        <div class="row justify-content-center">
            <div class="col-lg text-center mt-5 text-light">
                <h1 class="fw-bold">Rabkamar</h1>
            </div>
        </div>
        <div class="container mt-5 p-4 login-form">
            <h3 class="m-3 fw-bold text-center">Masuk ke Akun Anda</h3>
            <form class="mt-5" action="/login" method="post">
                @csrf

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label fw-bold">Email</label>
                    <input type="email" class="form-control form-login" name="email" placeholder="Email" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label fw-bold">Password</label>
                    <input type="password" class="form-control form-login" name="password" placeholder="Password"
                        id="exampleInputPassword1">
                </div>
                <div class="mb-3 text-end">
                    <a class="link-light me-3" href="/register">Daftar</a>
                    <a class="link-light" href="">Lupa Password?</a>
                </div>
                <button type="submit" class="btn btn-primary">LOGIN</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

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

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

    <title>REGISTER</title>
</head>

<body>
    <div class="container-fluid text-light" id="login-container">
        <div class="row justify-content-center">
            <div class="col-lg text-center mt-5 text-light">
                <h1 class="fw-bold">Rabkamar</h1>
            </div>
        </div>
        <div class="container mt-5 p-4 login-form">
            <h3 class="m-3 fw-bold text-center">Daftar</h3>
            <form class="mt-5" action="/register" method="post">
                @csrf

                <div class="mb-3">
                    <label for="InputNama" class="form-label fw-bold">Nama</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror form-login"
                        placeholder="Nama" id="InputNama" name="name" required>
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="InputEmail" class="form-label fw-bold">Email</label>
                    <input type="email" class="form-control  @error('email') is-invalid @enderror form-login"
                        placeholder="Email" id="InputEmail" name="email" required>
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="InputPassword" class="form-label fw-bold">Password</label>
                    <input type="password" class="form-control  @error('password') is-invalid @enderror form-login"
                        placeholder="Password" id="InputPassword" name="password" required>
                    @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 text-end">
                    <p>Sudah punya akun? <a class="link-light" href="/login">Login</a></p>
                </div>
                <button type="submit" class="btn btn-primary">DAFTAR</button>
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

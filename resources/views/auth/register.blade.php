<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mizukiya | Register</title>
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="/css/animate.css">

    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/css/magnific-popup.css">

    <link rel="stylesheet" href="/css/aos.css">

    <link rel="stylesheet" href="/css/ionicons.min.css">

    <link rel="stylesheet" href="/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="/css/jquery.timepicker.css">

    <link rel="stylesheet" href="/css/flaticon.css">
    <link rel="stylesheet" href="/css/icomoon.css">
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        .bg-light {
            background-image: url("/images/bg-login.jpg") !important;
            background-size: cover;
            background-repeat: no-repeat;
            height: 100%;
        }

        a {
            text-decoration: none;
        }

        .login-page {
            width: 100%;
            height: 100vh;
            display: inline-block;
            display: flex;
            align-items: center;
        }

        .form-right i {
            font-size: 100px;
        }
    </style>
</head>

<body>
    <div class="login-page bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <h3 class="mb-3 ftco-heading-2 text-light">BUAT AKUN</h3>
                    <div class="bg-white shadow rounded">
                        <div class="row">
                            <div class="col-md-7 pe-0">
                                <div class="form-left h-100 py-5 px-5">
                                    <form action="/register" method="POST" class="row g-4">
                                        @csrf
                                        <div class="col-12">
                                            <label for="name">Nama<span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <div class="input-group-text"><span class="icon-person"></span></i>
                                                </div>
                                                <input type="text" name="name" id="name"
                                                    class="form-control @error('name') is-invalid @enderror"
                                                    placeholder="Masukkan Nama" required value="{{ old('name') }}">
                                                @error('name')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label for="email">Email<span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <div class="input-group-text"><span class="icon-envelope"></span></i>
                                                </div>
                                                <input type="email" name="email" id="email"
                                                    class="form-control @error('email') is-invalid @enderror"
                                                    placeholder="Masukkan Email" required value="{{ old('email') }}">
                                                @error('email')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label for="password">Password<span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <div class="input-group-text"><span class="icon-lock2"></span></i></div>
                                                <input type="password" name="password" id="password"
                                                    class="form-control @error('password') is-invalid @enderror"
                                                    placeholder="Masukkan Password" required>
                                                @error('password')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <p>Sudah punya akun? <a href="/login" class=" text-primary">Login</a></p>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit"
                                                class="btn btn-primary px-4 float-end mt-4">Daftar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-5 ps-0 d-none d-md-block">
                                <div class="form-right h-100 bg-primary text-white text-center pt-5">
                                    <i class="bi bi-bootstrap"></i>
                                    <h2 class="fs-1">Mizukiya Resto</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Mizukiya Resto</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Reggae+One&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    @stack('css')
    @livewireStyles
</head>

<body>
    <div class="py-1 bg-black top">
        <div class="container">
            <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
                <div class="col-lg-12 d-block">
                    <div class="row d-flex">
                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon mr-2 d-flex justify-content-center align-items-center"><span
                                    class="icon-phone2"></span></div>
                            <span class="text">+ 1235 2355 98</span>
                        </div>
                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon mr-2 d-flex justify-content-center align-items-center"><span
                                    class="icon-paper-plane"></span></div>
                            <span class="text">mizukiya@email.com</span>
                        </div>
                        <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right justify-content-end">
                            <p class="mb-0 register-link"><span>Jam Operasional:</span> <span>Senin - Minggu,</span>
                                <span>08:00 - 21:00</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="/">Mizukiya</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item @yield('beranda')"><a href="{{ url('/') }}" class="nav-link">Beranda</a>
                    </li>
                    <li class="nav-item @yield('menu')"><a href="{{ url('menu') }}" class="nav-link">Menu</a></li>
                    <li class="nav-item @yield('reservasi')"><a href="{{ url('reservasi') }}"
                            class="nav-link ">Reservasi</a></li>
                    <li class="nav-item @yield('promo')"><a href="{{ url('promo') }}" class="nav-link">Promo</a>
                    </li>
                    <li class="nav-item @yield('kontak')"><a href="{{ url('kontak') }}" class="nav-link">Kontak</a>
                    </li>
                    @auth
                        <li class="nav-item  @yield('keranjang') cart"><a href="{{ url('keranjang') }}" class="nav-link"><span
                                    class="icon icon-shopping_cart"></span><span
                                    class="bag d-flex justify-content-center align-items-center"><small>1</small></span>
                                Keranjang</a></li>
                        <form action="/logout" method="POST">
                            @csrf
                            <button type="submit" class=" btn btn-primary mt-2">Logout</button>
                        </form>
                    @else
                        <li class="nav-item cta"><a href="{{ url('/login') }}" class="nav-link ">Login</a></li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    {{-- konten utama  --}}

    @yield('content')

    {{-- end konten utama --}}
    
    @livewireScripts

    <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-6 col-lg-3">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Mizukiya</h2>
                        <p>Restoran nuansa jepang dengan mengutamakan kualitas dan kepuasan pelanggan.</p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Jam Operasional</h2>
                        <ul class="list-unstyled open-hours">
                            <li class="d-flex"><span>Senin</span><span>8:00 - 21:00</span></li>
                            <li class="d-flex"><span>Selasa</span><span>8:00 - 21:00</span></li>
                            <li class="d-flex"><span>Rabu</span><span>8:00 - 21:00</span></li>
                            <li class="d-flex"><span>Kamis</span><span>8:00 - 21:00</span></li>
                            <li class="d-flex"><span>Jum'at</span><span>8:00 - 23:00</span></li>
                            <li class="d-flex"><span>Sabtu</span><span>8:00 - 23:00</span></li>
                            <li class="d-flex"><span>Minggu</span><span> 8:00 - 23:00</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Galeri</h2>
                        <div class="thumb d-sm-flex">
                            <a href="#" class="thumb-menu img"
                                style="background-image: url(images/insta-1.jpg);">
                            </a>
                            <a href="#" class="thumb-menu img"
                                style="background-image: url(images/insta-2.jpg);">
                            </a>
                            <a href="#" class="thumb-menu img"
                                style="background-image: url(images/insta-3.jpg);">
                            </a>
                        </div>
                        <div class="thumb d-flex">
                            <a href="#" class="thumb-menu img"
                                style="background-image: url(images/insta-4.jpg);">
                            </a>
                            <a href="#" class="thumb-menu img"
                                style="background-image: url(images/insta-5.jpg);">
                            </a>
                            <a href="#" class="thumb-menu img"
                                style="background-image: url(images/insta-6.jpg);">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Buletin</h2>
                        <p>Dari Pelanggan untuk Pelanggan</p>
                        <form action="#" class="subscribe-form">
                            <div class="form-group">
                                <input type="text" class="form-control mb-2 text-center"
                                    placeholder="Enter email address">
                                <input type="submit" value="Subscribe" class="form-control submit px-3">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                    <p>
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> Mizukiya | All rights reserved
                    </p>
                </div>
            </div>
        </div>
    </footer>


    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>


    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>
    @stack('js')
</body>

</html>

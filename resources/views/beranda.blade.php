@extends('layouts.base')
@section('beranda', 'active')

{{-- ini buat tambahan css kalau misal ada css khusus untuk 1 halaman aja gk mau berpengaruh ke halaman lain --}}
@push('css')
    <style>
        /*--------------------------------------------------------------
                                                                                                                                                    # Menu Section
                                                                                                                                                    --------------------------------------------------------------*/

        .menu-entry {
            margin-bottom: 30px;
        }

        .menu-entry .img {
            display: block;
            height: 200px;
        }

        .menu-entry .text h3 {
            font-size: 18px;
            text-transform: uppercase;
        }

        .menu-entry .text h3 a {
            color: #fff;
        }

        .menu-entry .text .price span {
            color: #fff;
            font-size: 18px;
        }
    </style>
@endpush

{{-- ini tempat isi kontennya --}}
@section('content')

    <section class="home-slider owl-carousel js-fullheight">
        <div class="slider-item js-fullheight" style="background-image: url(images/bg_1.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text js-fullheight justify-content-center align-items-center"
                    data-scrollax-parent="true">

                    <div class="col-md-12 col-sm-12 text-center ftco-animate">
                        <span class="subheading">Mizukiya</span>
                        <h1 class="mb-4">Japanese Restaurant</h1>
                    </div>

                </div>
            </div>
        </div>

        <div class="slider-item js-fullheight" style="background-image: url(images/bg_2.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text js-fullheight justify-content-center align-items-center"
                    data-scrollax-parent="true">

                    <div class="col-md-12 col-sm-12 text-center ftco-animate">
                        <span class="subheading">Mizukiya</span>
                        <h1 class="mb-4">Bernutrisi &amp; Lezat</h1>
                    </div>

                </div>
            </div>
        </div>

        <div class="slider-item js-fullheight" style="background-image: url(images/bg_3.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text js-fullheight justify-content-center align-items-center"
                    data-scrollax-parent="true">

                    <div class="col-md-12 col-sm-12 text-center ftco-animate">
                        <span class="subheading">Mizukiya</span>
                        <h1 class="mb-4">Sesuai Selera Anda</h1>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="featured">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="featured-menus ftco-animate">
                                    <div class="menu-img img" style="background-image: url(images/Makizushi.jpg);"></div>
                                    <div class="text text-center">
                                        <h3>Sushi</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="featured-menus ftco-animate">
                                    <div class="menu-img img" style="background-image: url(images/Mushroom_Ramen.jpg);"></div>
                                    <div class="text text-center">
                                        <h3>Ramen</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="featured-menus ftco-animate">
                                    <div class="menu-img img" style="background-image: url(images/Udon_Soup.jpg);"></div>
                                    <div class="text text-center">
                                        <h3>Udon</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="featured-menus ftco-animate">
                                    <div class="menu-img img" style="background-image: url(images/blackpaper_tori_don.jpeg);"></div>
                                    <div class="text text-center">
                                        <h3>Donburi</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="featured-menus ftco-animate">
                                    <div class="menu-img img" style="background-image: url(images/Yakiniku_Grill_set.jpg);"></div>
                                    <div class="text text-center">
                                        <h3>Yakiniku</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-wrap-about">
        <div class="container">
            <div class="row">
                <div class="col-md-7 d-flex">
                    <div class="img img-1 mr-md-2" style="background-image: url(images/about.jpg);"></div>
                    <div class="img img-2 ml-md-2" style="background-image: url(images/about-1.jpg);"></div>
                </div>
                <div class="col-md-5 wrap-about pt-5 pt-md-5 pb-md-3 ftco-animate">
                    <div class="heading-section mb-4 my-5 my-md-0">
                        <span class="subheading">Profil</span>
                        <h2 class="mb-4">Mizukiya Restaurant</h2>
                    </div>
                    <p>Sebuah Restoran Kecil dimulai dari kepulauan okinawa, Chef pertama kami yaitu Mizukiya Hitori adalah
                        pelopor utama bagi masakan jepang dan sekarang menyebar ke seluruh dunia
                    </p>
                    <pc class="time">
                        <span>Senin - Jumat <strong>8 AM - 11 PM</strong></span>
                        <span><a href="#">+ 1-978-123-4567</a></span>
                        </p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-12 text-center heading-section ftco-animate">
                    <span class="subheading">Keunggulan</span>
                    <h2 class="mb-4">Mizukiya Restaurant</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 d-flex align-self-stretch ftco-animate text-center">
                    <div class="media block-6 services d-block">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-cake"></span>
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">Pesta Ulang Tahun</h3>
                            <p>Restoran kami menyajikan paket katering bagi kamu yang sedang merayakan ulang tahun</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-self-stretch ftco-animate text-center">
                    <div class="media block-6 services d-block">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-meeting"></span>
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">Bisnis Meeting</h3>
                            <p>Restoran kami menyajikan paket katering bagi kamu yang sedang melakukan bisnis meeting</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-self-stretch ftco-animate text-center">
                    <div class="media block-6 services d-block">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-tray"></span>
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">Pesta Pernikahan</h3>
                            <p>Restoran Kami Menyajikan paket pernikahan spesial bagi kamu yang merayakan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 pr-md-5">
                    <div class="heading-section text-md-right ftco-animate">
                        <span class="subheading">Telusuri</span>
                        <h2 class="mb-4">Menu Kami</h2>
                        <p class="mb-4">Menu Kami memiliki tingkat kualitas yang tinggi dan tampilan yang menarik
                            untuk dilihat dan kami selalu mengutamakan kepuasan pelanggan kami
                        </p>
                        <p><a href="/menu" class="btn btn-primary btn-outline-primary px-4 py-3">Lihat Semua Menu Disini</a></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="menu-entry">
                                <a href="#" class="img" style="background-image: url(images/beef_curry_udon.jpeg);"></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="menu-entry mt-lg-4">
                                <a href="#" class="img" style="background-image: url(images/Fried_Sushi.jpg);"></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="menu-entry">
                                <a href="#" class="img" style="background-image: url(images/Yakitori_grill.jpg);"></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="menu-entry mt-lg-4">
                                <a href="#" class="img" style="background-image: url(images/Rib_Ramen_Soup.jpg);"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-gallery">
        <br><br>
        <div class="row justify-content-center mb-5">
            <div class="col-md-12 text-center heading-section ftco-animate">
                <span class="subheading">Galeri</span>
                <h2 class="mb-4">Cek Galeri Kami</h2>
            </div>
        </div>
        <div class="container-wrap">
            <div class="row no-gutters">
                <div class="col-md-3 ftco-animate">
                    <a href="images/gallery-1.jpg" class="gallery img d-flex align-items-center"
                        style="background-image: url(images/gallery-1.jpg);">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-search"></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 ftco-animate">
                    <a href="images/gallery-2.jpg" class="gallery img d-flex align-items-center"
                        style="background-image: url(images/gallery-2.jpg);">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-search"></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 ftco-animate">
                    <a href="images/gallery-3.jpg" class="gallery img d-flex align-items-center"
                        style="background-image: url(images/gallery-3.jpg);">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-search"></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 ftco-animate">
                    <a href="images/gallery-4.jpg" class="gallery img d-flex align-items-center"
                        style="background-image: url(images/gallery-4.jpg);">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-search"></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section testimony-section img">
        <div class="overlay"></div>
        <div class="container">
            <br><br>
            <div class="row justify-content-center mb-5">
                <div class="col-md-12 text-center heading-section ftco-animate">
                    <span class="subheading">Testimoni</span>
                    <h2 class="mb-4">Kepuasan Pelanggan</h2>
                </div>
            </div>
            <div class="row ftco-animate justify-content-center">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel ftco-owl">
                        <div class="item">
                            <div class="testimony-wrap text-center pb-5">
                                <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text p-3">
                                    <p class="mb-4">Hanya disini nuansa dari masakan jepang dapat terlihat seolah-olah
                                        kita sedang berada di negeri bunga sakura.
                                    </p>
                                    <p class="name">Jason McClean</p>
                                    <span class="position">Pelanggan</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap text-center pb-5">
                                <div class="user-img mb-4" style="background-image: url(images/person_2.jpg)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text p-3">
                                    <p class="mb-4">menu yang sangat beragam dengan rasa dan tampilan yang unik
                                        dijamin tidak akan membuat kecewa setiap pelangganya.
                                    </p>
                                    <p class="name">Mark Stevenson</p>
                                    <span class="position">Pelanggan</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap text-center pb-5">
                                <div class="user-img mb-4" style="background-image: url(images/person_3.jpg)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text p-3">
                                    <p class="mb-4">Penyajian yang sangat memuaskan membuat saya ingin menghabiskan
                                        setiap waktu saya di restoran ini.
                                    </p>
                                    <p class="name">Art Leonard</p>
                                    <span class="position">Pelanggan</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap text-center pb-5">
                                <div class="user-img mb-4" style="background-image: url(images/person_4.jpg)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text p-3">
                                    <p class="mb-4">Fasilitas bintang 5, pelayanan yang elegan, dan makanan yang mewah.</p>
                                    <p class="name">Rose Henderson</p>
                                    <span class="position">Pelanggan</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap text-center pb-5">
                                <div class="user-img mb-4" style="background-image: url(images/Wildan.jpg)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text p-3">
                                    <p class="mb-4">saya sangat menyukai restoran ini sampai saya 
                                        hanya ingin menghabiskan waktu saya disini.
                                    </p>
                                    <p class="name">Wildan R.</p>
                                    <span class="position">Pelanggan</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

{{-- ini buat tambahan js kalau misal ada js khusus untuk 1 halaman aja gk mau berpengaruh ke halaman lain kaya ajax dll --}}
@push('js')
    <script></script>
@endpush

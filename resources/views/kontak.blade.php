@extends('layouts.base')
@section('kontak', 'active')

{{-- ini buat tambahan css kalau misal ada css khusus untuk 1 halaman aja gk mau berpengaruh ke halaman lain --}}
@push('css')
    <style>

    </style>
@endpush

{{-- ini tempat isi kontennya --}}
@section('content')

    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_3.jpg');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate text-center mb-4">
                    <h1 class="mb-2 bread">Contact</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>Contact us <i
                                class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
        <div class="container">
            <div class="row d-flex align-items-stretch no-gutters">
                <div class="col-md-6 pt-5 px-2 pb-2 p-md-5 order-md-last">
                    <h2 class="h4 mb-2 mb-md-5 font-weight-bold">Contact Us</h2>
                    @if (session()->has('success'))
                        <div class="alert alert-primary" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form action="/kontak" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="name" id="name" class="form-control" placeholder="Your Name"
                                required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" id="email" class="form-control"
                                placeholder="Your Email" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="subjek" id="subjek" class="form-control" placeholder="Subject"
                                required>
                        </div>
                        <div class="form-group">
                            <textarea name="pesan" id="pesan" cols="30" rows="7" class="form-control" placeholder="Message"
                                required></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>
                </div>
                <div class="col-md-6 d-flex align-items-stretch">
                    <div id="map"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section contact-section">
        <div class="container">
            <div class="row d-flex contact-info">
                <div class="col-md-12 mb-4">
                    <h2 class="h4 font-weight-bold">Contact Information</h2>
                </div>
                <div class="w-100"></div>
                <div class="col-md-3 d-flex">
                    <div class="dbox">
                        <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="dbox">
                        <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="dbox">
                        <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="dbox">
                        <p><span>Website</span> <a href="#">yoursite.com</a></p>
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

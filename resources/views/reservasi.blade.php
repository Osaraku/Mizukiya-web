@extends('layouts.base')
@section('reservasi', 'active')

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
                    <h1 class="mb-2 bread">Book a Table</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>Reservation <i
                                class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb">
        <div class="container-fluid px-0">
            <div class="row d-flex no-gutters">
                <div class="col-md-6 order-md-last ftco-animate makereservation p-4 p-md-5 pt-5">
                    <div class="py-md-5">
                        <div class="heading-section ftco-animate mb-5">
                            <span class="subheading">Book a table</span>
                            <h2 class="mb-4">Make Reservation</h2>
                        </div>
                        @if (session()->has('success'))
                            <div class="alert alert-primary" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                        <form action="/reservasi" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            id="name" name="name" required placeholder="Your Name">
                                    </div>
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            id="email" name="email" required placeholder="Your Email">
                                    </div>
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input type="number" class="form-control" id="phone" name="phone" required
                                            placeholder="Phone">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="tanggal">Date</label>
                                        <input type="date" class="form-control" id="tanggal" name="tanggal" required
                                            placeholder="Date">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="waktu">Time</label>
                                        <input type="time" class="form-control" id="waktu" name="waktu" required
                                            placeholder="Time">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="jumlah_orang">Person</label>
                                        <div class="select-wrap one-third">
                                            <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                            <select name="jumlah_orang" id="jumlah_orang" class="form-control">
                                                <option value="1">1 Orang</option>
                                                <option value="2">2 Orang</option>
                                                <option value="3">3 Orang</option>
                                                <option value="4">4 Orang</option>
                                                <option value="5">5 Orang</option>
                                                <option value="6">6 Orang</option>
                                                <option value="7">7 Orang</option>
                                                <option value="8">8 Orang</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mt-3">
                                    <div class="form-group">
                                        <input type="submit" value="Make a Reservation" class="btn btn-primary py-3 px-5">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-stretch pb-5 pb-md-0">
                    <img src="{{ asset('images/reservasi.jpg') }}" alt="" class="img-fluid w-lg-50 w-90">
                </div>
            </div>
        </div>
    </section>

@endsection

{{-- ini buat tambahan js kalau misal ada js khusus untuk 1 halaman aja gk mau berpengaruh ke halaman lain kaya ajax dll --}}
@push('js')
    <script></script>
@endpush

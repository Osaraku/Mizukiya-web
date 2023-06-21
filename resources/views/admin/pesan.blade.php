@extends('layouts.base-admin')
@section('admin-pesan', 'active')

{{-- ini buat tambahan css kalau misal ada css khusus untuk 1 halaman aja gk mau berpengaruh ke halaman lain --}}
@push('css')
    <style>

    </style>
@endpush

{{-- ini tempat isi kontennya --}}
@section('content')

    <section class="hero-wrap hero-wrap-2" style="background-image: url('/images/bg_3.jpg');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate text-center mb-4">
                    <h1 class="mb-2 bread">Pesan</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>Reservation <i
                                class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <table class="table table-striped bg-light">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">No. Telp</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Waktu</th>
                        <th scope="col">Jumlah Orang</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pesans as $pesan)
                        <tr>
                            <td>1</td>
                            <td>{{ $pesan['name'] }}</td>
                            <td>{{ $pesan['email'] }}</td>
                            <td>{{ $pesan['phone'] }}</td>
                            <td>{{ $pesan['tanggal'] }}</td>
                            <td>{{ $pesan['waktu'] }}</td>
                            <td>{{ $pesan['jumlah_orang'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>

@endsection

{{-- ini buat tambahan js kalau misal ada js khusus untuk 1 halaman aja gk mau berpengaruh ke halaman lain kaya ajax dll --}}
@push('js')
    <script></script>
@endpush

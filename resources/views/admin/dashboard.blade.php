@extends('layouts.base-admin')
@section('admin-dashboard', 'active')

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
                    <h1 class="mb-2 bread">Dashboard</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Admin <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>Dashboard <i
                                class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container-fluid">
            <div class="container pt-5 pb-3">
                <center>
                    <a href="/admin/dashboard/create" class="btn btn-success mb-5 ">+Tambah Staff</a>
                </center>
                @if (session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="text-center mb-5">
                    <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Staff</h5>
                    <h1>Daftar </h1>
                </div>
                <div class="row">
                    @foreach ($staffs as $staff)
                        <div class="col-md-6 col-lg-3 team mb-4">
                            <div class="team-item rounded overflow-hidden mb-2">
                                <div class="team-img position-relative">
                                    <img class="img-fluid" src="{{ asset('storage/' . $staff->image) }}" alt="">
                                </div>
                                <div class="bg-light p-4">
                                    <h5>{{ $staff['nama'] }}</h5>
                                    <p class="m-0">{{ $staff['kelamin'] }}</p>
                                    <p class="m-0">{{ $staff['phone'] }}</p>
                                    <p class="m-0">{{ $staff['alamat'] }}</p>
                                    <a href="/admin/dashboard/{{ $staff->id }}/edit"
                                        class="btn btn-warning mb-5 d-inline ">Update</a>
                                    <form action="/admin/dashboard/{{ $staff->id }}" method="post" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger" type="submit"
                                            onclick="return confirm('Yakin hapus staff?') ">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- Team End -->
@endsection

{{-- ini buat tambahan js kalau misal ada js khusus untuk 1 halaman aja gk mau berpengaruh ke halaman lain kaya ajax dll --}}
@push('js')
    <script></script>
@endpush

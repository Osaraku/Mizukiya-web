@extends('layouts.base-admin')
@section('admin-promo', 'active')

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
                    <h1 class="mb-2 bread">Promo</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>Promo <i
                                class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <center>
            <a href="/admin/promo/create" class="btn btn-success mb-5 ">+Tambah Promo</a>
        </center>
        <div class="container">
            @if (session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <div class="row">
                @foreach ($promos as $promo)
                    <div class="col-md-4 ftco-animate">
                        <div class="blog-entry">
                            <a href="images/image_1.jpg" class="block-20"
                                style="background-image: url({{ asset('storage/' . $promo->image) }});">
                            </a>
                            <div class="text pt-3 pb-2 px-2">
                                <div class="meta">
                                    <div>
                                        <p>{{ $promo['awal_promo'] }} s/d {{ $promo['akhir_promo'] }}</p>
                                    </div>
                                </div>
                                <h3 class="heading">{{ $promo['judul'] }}</h3>
                                <p class="clearfix">
                                    {{ $promo['deskripsi'] }}
                                </p>
                                <center>
                                    <a href="/admin/promo/{{ $promo->id }}/edit"
                                        class="btn btn-warning mb-5 d-inline">Update</a>
                                    <form action="/admin/promo/{{ $promo->id }}" method="post" class="d-inline ">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger" type="submit"
                                            onclick="return confirm('Yakin hapus promo?') ">Delete</button>
                                    </form>
                                </center>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row no-gutters my-5">
                <div class="col text-center">
                    <div class="block-27">
                        <ul>
                            <li><a href="#">&lt;</a></li>
                            <li class="active"><span>1</span></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">&gt;</a></li>
                        </ul>
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

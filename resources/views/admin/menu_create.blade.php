@extends('layouts.base-admin')
@section('admin-menu', 'active')

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
        <div class="container">
            <form action="/admin/menu" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nama"><b>Nama</b></label>
                    <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Menu"
                        required>
                </div>
                <div class="form-group">
                    <label for="deskripsi"><b>Deskripsi</b></label>
                    <input type="text" name="deskripsi" id="deskripsi" class="form-control" placeholder="Deskripsi Menu"
                        required>
                </div>
                <div class="form-group">
                    <label for="id_kategori"><b>Kategori</b></label>
                    <select name="id_kategori" id="id_kategori" class="form-control">
                        <div class="select-wrap">
                            <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->nama_kategori }}</option>
                            @endforeach
                        </div>
                    </select>
                </div>
                <div class="form-group">
                    <label for="harga"><b>Harga</b></label>
                    <input type="number" name="harga" id="harga" class="form-control" placeholder="Harga Menu"
                        required>
                </div>
                <div class="form-group mb-3">
                    <label for="thumbnail" class="form-label">Default file input example</label>
                    <input class="form-control" type="file" name="thumbnail" id="thumbnail">
                </div>
                <div class="form-group">
                    <input type="submit" value="Tambah Menu" class="btn btn-primary py-3 px-5">
                </div>
            </form>
        </div>
    </section>
@endsection

{{-- ini buat tambahan js kalau misal ada js khusus untuk 1 halaman aja gk mau berpengaruh ke halaman lain kaya ajax dll --}}
@push('js')
    <script></script>
@endpush

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
            <form action="/admin/promo/{{ $promo->id }}" method="POST" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="form-group">
                    <label for="judul"><b>Judul</b></label>
                    <input type="text" name="judul" id="judul" class="form-control" placeholder="Judul Promo"
                        value="{{ $promo->judul }}" required>
                </div>
                <div class="form-group">
                    <label for="deskripsi"><b>Deskripsi</b></label>
                    <input type="text" name="deskripsi" id="deskripsi" class="form-control" placeholder="Deskripsi Promo"
                        value="{{ $promo->deskripsi }}" required>
                </div>
                <div class="form-group">
                    <label for="awal_promo"><b>Awal Promo</b></label>
                    <input type="date" name="awal_promo" id="awal_promo" class="form-control"
                        value="{{ $promo->awal_promo }}" required>
                </div>
                <div class="form-group">
                    <label for="akhir_promo"><b>Akhir Promo</b></label>
                    <input type="date" name="akhir_promo" id="akhir_promo" class="form-control"
                        value="{{ $promo->akhir_promo }}" required>
                </div>
                <div class="form-group mb-3">
                    <label for="image"><b>Foto Promo</b></label>
                    <input type="hidden" name="oldImage" value="{{ $promo->image }}">
                    <img src="{{ asset('storage/' . $promo->image) }}" class="img-preview img-fluid mb-3 col-sm-3 d-block">
                    <input class="form-control" type="file" name="image" id="image" accept="image/*"
                        onchange="previewImage()">
                </div>
                <div class="form-group">
                    <input type="submit" value="Update Promo" class="btn btn-primary py-3 px-5 mt-3">
                </div>
            </form>
        </div>
    </section>
@endsection

{{-- ini buat tambahan js kalau misal ada js khusus untuk 1 halaman aja gk mau berpengaruh ke halaman lain kaya ajax dll --}}
@push('js')
    <script>
        function previewImage() {
            const image = document.querySelector('#image')
            const imgPreview = document.querySelector('.img-preview')

            imgPreview.style.display - 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endpush

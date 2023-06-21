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
        <div class="container">
            <form action="/admin/dashboard/{{ $staff->id }}" method="POST" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="form-group">
                    <label for="nama"><b>Nama</b></label>
                    <input type="text" name="nama" id="nama" class="form-control" value="{{ $staff->nama }}"
                        placeholder="Nama Staff" required>
                </div>
                <div class="form-group">
                    <label for="kelamin"><b>Jenis Kelamin</b></label>
                    <select name="kelamin" id="kelamin" class="form-control">
                        <div class="select-wrap">
                            <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                            @if ($staff->kelamin == 'Perempuan')
                                <option value="Perempuan" selected>Perempuan</option>
                            @else
                                <option value="Laki-laki">Laki-laki</option>
                            @endif
                        </div>
                    </select>
                </div>
                <div class="form-group">
                    <label for="phone"><b>No. Telp</b></label>
                    <input type="number" name="phone" id="phone" class="form-control" value="{{ $staff->phone }}"
                        placeholder="Nomor Telepon" required>
                </div>
                <div class="form-group">
                    <label for="alamat"><b>Alamat</b></label>
                    <input type="text" name="alamat" id="alamat" class="form-control" value="{{ $staff->alamat }}"
                        placeholder="Alamat Staff" required>
                </div>
                <div class="form-group">
                    <label for="id_posisi"><b>Posisi</b></label>
                    <select name="id_posisi" id="id_posisi" class="form-control">
                        <div class="select-wrap">
                            <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                            @foreach ($posisis as $posisi)
                                @if ($staff->id_posisi == $posisi->id)
                                    <option value="{{ $posisi->id }}" selected>{{ $posisi->posisi }}</option>
                                @else
                                    <option value="{{ $posisi->id }}">{{ $posisi->posisi }}</option>
                                @endif
                            @endforeach
                        </div>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="image"><b>Foto Staff</b></label>
                    <input type="hidden" name="oldImage" value="{{ $staff->image }}">
                    <img src="{{ asset('storage/' . $staff->image) }}" class="img-preview img-fluid mb-3 col-sm-3 d-block">
                    <input class="form-control" type="file" name="image" id="image" accept="image/*"
                        onchange="previewImage()">
                </div>
                <div class="form-group">
                    <input type="submit" value="Tambah Staff" class="btn btn-primary py-3 px-5 mt-3">
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

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
                    <h1 class="mb-2 bread">Specialties</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>Menu <i
                                class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="ftco-search">
                <center>
                    <a href="/admin/menu/create" class="btn btn-success mb-5 ">+Tambah Menu</a>
                </center>
                @if (session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="row">
                    <div class="col-md-12 nav-link-wrap">
                        <div class="nav nav-pills d-flex text-center" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">
                            <a class="nav-link ftco-animate active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1"
                                role="tab" aria-controls="v-pills-1" aria-selected="true">Sushi</a>

                            <a class="nav-link ftco-animate" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2"
                                role="tab" aria-controls="v-pills-2" aria-selected="false">Ramen</a>

                            <a class="nav-link ftco-animate" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3"
                                role="tab" aria-controls="v-pills-3" aria-selected="false">Udon</a>

                            <a class="nav-link ftco-animate" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4"
                                role="tab" aria-controls="v-pills-4" aria-selected="false">Yakiniku</a>

                            <a class="nav-link ftco-animate" id="v-pills-5-tab" data-toggle="pill" href="#v-pills-5"
                                role="tab" aria-controls="v-pills-5" aria-selected="false">Donburi</a>

                            <a class="nav-link ftco-animate" id="v-pills-6-tab" data-toggle="pill" href="#v-pills-6"
                                role="tab" aria-controls="v-pills-6" aria-selected="false">Minuman</a>

                        </div>
                    </div>
                    <div class="col-md-12 tab-wrap">

                        <div class="tab-content" id="v-pills-tabContent">

                            <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel"
                                aria-labelledby="day-1-tab">
                                <div class="row no-gutters d-flex align-items-stretch">
                                    @foreach ($menus as $menu)
                                        @if ($menu['id_kategori'] === 1)
                                            <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                                                <div class="menus d-sm-flex ftco-animate align-items-stretch bg-light">
                                                    <div class="menu-img img"
                                                        style="background-image: url({{ asset('storage/' . $menu->image) }});">
                                                    </div>
                                                    <div class="text d-flex align-items-center">
                                                        <div>
                                                            <h3>{{ $menu['nama'] }}</h3>
                                                            <p>{{ $menu['deskripsi'] }}</p>
                                                            <div class="d-flex mt-3">
                                                                <div class="one-half">
                                                                    <span class="price">Rp.{{ $menu['harga'] }}</span>
                                                                </div>
                                                            </div>
                                                            <a href="/admin/menu/{{ $menu->id }}/edit"
                                                                class="btn btn-warning mb-5 d-inline ">Update</a>
                                                            <form action="/admin/menu/{{ $menu->id }}" method="post"
                                                                class="d-inline">
                                                                @method('delete')
                                                                @csrf
                                                                <button class="btn btn-danger" type="submit"
                                                                    onclick="return confirm('Yakin hapus menu?') ">Delete</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-day-2-tab">
                                <div class="row no-gutters d-flex align-items-stretch">
                                    @foreach ($menus as $menu)
                                        @if ($menu['id_kategori'] === 2)
                                            <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                                                <div class="menus d-sm-flex ftco-animate align-items-stretch bg-light">
                                                    <div class="menu-img img"
                                                        style="background-image: url({{ asset('storage/' . $menu->image) }});">
                                                    </div>
                                                    <div class="text d-flex align-items-center">
                                                        <div>
                                                            <h3>{{ $menu['nama'] }}</h3>
                                                            <p>{{ $menu['deskripsi'] }}</p>
                                                            <div class="d-flex mt-3">
                                                                <div class="one-half">
                                                                    <span class="price">Rp.{{ $menu['harga'] }}</span>
                                                                </div>
                                                            </div>
                                                            <a href="/admin/menu/{{ $menu->id }}/edit"
                                                                class="btn btn-warning mb-5 d-inline ">Update</a>
                                                            <form action="/admin/menu/{{ $menu->id }}" method="post"
                                                                class="d-inline">
                                                                @method('delete')
                                                                @csrf
                                                                <button class="btn btn-danger" type="submit"
                                                                    onclick="return confirm('Yakin hapus menu?') ">Delete</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-3" role="tabpanel"
                                aria-labelledby="v-pills-day-3-tab">
                                <div class="row no-gutters d-flex align-items-stretch">
                                    @foreach ($menus as $menu)
                                        @if ($menu['id_kategori'] === 3)
                                            <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                                                <div class="menus d-sm-flex ftco-animate align-items-stretch bg-light">
                                                    <div class="menu-img img"
                                                        style="background-image: url({{ asset('storage/' . $menu->image) }});">
                                                    </div>
                                                    <div class="text d-flex align-items-center">
                                                        <div>
                                                            <h3>{{ $menu['nama'] }}</h3>
                                                            <p>{{ $menu['deskripsi'] }}</p>
                                                            <div class="d-flex mt-3">
                                                                <div class="one-half">
                                                                    <span class="price">Rp.{{ $menu['harga'] }}</span>
                                                                </div>
                                                            </div>
                                                            <a href="/admin/menu/{{ $menu->id }}/edit"
                                                                class="btn btn-warning mb-5 d-inline ">Update</a>
                                                            <form action="/admin/menu/{{ $menu->id }}" method="post"
                                                                class="d-inline">
                                                                @method('delete')
                                                                @csrf
                                                                <button class="btn btn-danger" type="submit"
                                                                    onclick="return confirm('Yakin hapus menu?') ">Delete</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-4" role="tabpanel"
                                aria-labelledby="v-pills-day-4-tab">
                                <div class="row no-gutters d-flex align-items-stretch">
                                    @foreach ($menus as $menu)
                                        @if ($menu['id_kategori'] === 4)
                                            <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                                                <div class="menus d-sm-flex ftco-animate align-items-stretch bg-light">
                                                    <div class="menu-img img"
                                                        style="background-image: url({{ asset('storage/' . $menu->image) }});">
                                                    </div>
                                                    <div class="text d-flex align-items-center">
                                                        <div>
                                                            <h3>{{ $menu['nama'] }}</h3>
                                                            <p>{{ $menu['deskripsi'] }}</p>
                                                            <div class="d-flex mt-3">
                                                                <div class="one-half">
                                                                    <span class="price">Rp.{{ $menu['harga'] }}</span>
                                                                </div>
                                                            </div>
                                                            <a href="/admin/menu/{{ $menu->id }}/edit"
                                                                class="btn btn-warning mb-5 d-inline ">Update</a>
                                                            <form action="/admin/menu/{{ $menu->id }}" method="post"
                                                                class="d-inline">
                                                                @method('delete')
                                                                @csrf
                                                                <button class="btn btn-danger" type="submit"
                                                                    onclick="return confirm('Yakin hapus menu?') ">Delete</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-5" role="tabpanel"
                                aria-labelledby="v-pills-day-5-tab">
                                <div class="row no-gutters d-flex align-items-stretch">
                                    @foreach ($menus as $menu)
                                        @if ($menu['id_kategori'] === 5)
                                            <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                                                <div class="menus d-sm-flex ftco-animate align-items-stretch bg-light">
                                                    <div class="menu-img img"
                                                        style="background-image: url({{ asset('storage/' . $menu->image) }});">
                                                    </div>
                                                    <div class="text d-flex align-items-center">
                                                        <div>
                                                            <h3>{{ $menu['nama'] }}</h3>
                                                            <p>{{ $menu['deskripsi'] }}</p>
                                                            <div class="d-flex mt-3">
                                                                <div class="one-half">
                                                                    <span class="price">Rp.{{ $menu['harga'] }}</span>
                                                                </div>
                                                            </div>
                                                            <a href="/admin/menu/{{ $menu->id }}/edit"
                                                                class="btn btn-warning mb-5 d-inline ">Update</a>
                                                            <form action="/admin/menu/{{ $menu->id }}" method="post"
                                                                class="d-inline">
                                                                @method('delete')
                                                                @csrf
                                                                <button class="btn btn-danger" type="submit"
                                                                    onclick="return confirm('Yakin hapus menu?') ">Delete</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-6" role="tabpanel"
                                aria-labelledby="v-pills-day-6-tab">
                                <div class="row no-gutters d-flex align-items-stretch">
                                    @foreach ($menus as $menu)
                                        @if ($menu['id_kategori'] === 6)
                                            <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                                                <div class="menus d-sm-flex ftco-animate align-items-stretch bg-light">
                                                    <div class="menu-img img"
                                                        style="background-image: url({{ asset('storage/' . $menu->image) }});">
                                                    </div>
                                                    <div class="text d-flex align-items-center">
                                                        <div>
                                                            <h3>{{ $menu['nama'] }}</h3>
                                                            <p>{{ $menu['deskripsi'] }}</p>
                                                            <div class="d-flex mt-3">
                                                                <div class="one-half">
                                                                    <span class="price">Rp.{{ $menu['harga'] }}</span>
                                                                </div>
                                                            </div>
                                                            <a href="/admin/menu/{{ $menu->id }}/edit"
                                                                class="btn btn-warning mb-5 d-inline ">Update</a>
                                                            <form action="/admin/menu/{{ $menu->id }}" method="post"
                                                                class="d-inline">
                                                                @method('delete')
                                                                @csrf
                                                                <button class="btn btn-danger" type="submit"
                                                                    onclick="return confirm('Yakin hapus menu?') ">Delete</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
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

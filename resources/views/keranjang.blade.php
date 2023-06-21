@extends('layouts.base')
@section('keranjang', 'active')

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
                    <h1 class="mb-2 bread">Keranjang</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>Keranjang <i
                                class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-cart">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ftco-animate">
                    <div class="cart-list ftco-bg-light">
                        <table class="table">
                            <thead class="thead-primary">
                                <tr class="text-center">
                                    <th>&nbsp;</th>
                                    <th>&nbsp;</th>
                                    <th>Produk</th>
                                    <th>Harga</th>
                                    <th>Jumlah Barang</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($items as $item)
                                    <tr class="text-center">
                                        <td class="product-remove"><a href="#"><span class="icon-close"></span></a>
                                        </td>

                                        <td class="image-prod">
                                            <div class="img"
                                                style="background-image:url({{ asset('storage/' . $item->menu->image) }});">
                                            </div>
                                        </td>

                                        <td class="product-name">
                                            <h3>{{ $item->product_name }}</h3>
                                            <p>{{ $item->menu->deskripsi }}</p>
                                        </td>

                                        <td class="">Rp. {{ $item['product_price'] }}</td>

                                        <td class="quantity">
                                            {{ $item->qty }}
                                        </td>

                                        <td class="">Rp. {{ $item->total }}</td>
                                    </tr><!-- END TR-->
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 ftco-animate">
                    <form action="" method="POST" class="billing-form ftco-bg-dark p-3 p-md-5">
                        <h3 class="mb-4 billing-heading">Billing Details</h3>
                        <div class="row align-items-end">
                            <div class="w-100"></div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" id="nama" name="nama" class="form-control"
                                        placeholder="Nama">
                                </div>
                            </div>
                            <div class="w-100"></div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" id="email" name="email" class="form-control"
                                        placeholder="Email">
                                </div>
                            </div>

                            <div class="w-100"></div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="number" id="number" name="number" class="form-control"
                                        placeholder="Nomor Telp">
                                </div>
                            </div>
                        </div>
                    </form><!-- END -->
                </div> <!-- .col-md-8 -->

                <div class="col-xl-4 sidebar ftco-animate">
                    <div class="sidebar-box ftco-animate">
                        <div class="cart-detail cart-total ftco-bg-dark p-3 p-md-4">
                            <h3 class="billing-heading mb-4">Cart Total</h3>
                            <p class="d-flex">
                                <span>Subtotal</span>
                                <span>Rp. {{ $cart->total }}</span>
                            </p>
                            <p class="d-flex">
                                <span>Delivery</span>
                                <span>Rp. 10000</span>
                            </p>
                            <p class="d-flex">
                                <span>Discount</span>
                                <span>Rp. 0</span>
                            </p>
                            <hr>
                            <p class="d-flex total-price">
                                <span>Total</span>
                                <span>Rp. {{ $cart->total + 10000 }}</span>
                            </p>
                        </div>
                    </div>

                    <div class="sidebar-box ftco-animate">
                        <div class="cart-detail ftco-bg-dark p-3 p-md-4">
                            <h3 class="billing-heading mb-4">Payment Method</h3>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="radio">
                                        <label><input type="radio" name="optradio" class="mr-2"> Transfer
                                            Bank</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="radio">
                                        <label><input type="radio" name="optradio" class="mr-2"> COD</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="radio">
                                        <label><input type="radio" name="optradio" class="mr-2"> Retail</label>
                                    </div>
                                </div>
                            </div>
                            <p><a href="#"class="btn btn-primary py-3 px-4">Place an order</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- .section -->

@endsection

{{-- ini buat tambahan js kalau misal ada js khusus untuk 1 halaman aja gk mau berpengaruh ke halaman lain kaya ajax dll --}}
@push('js')
    <script></script>
@endpush

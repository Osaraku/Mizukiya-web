@extends('layouts.base')
@section('keranjang', 'active')

{{-- ini buat tambahan css kalau misal ada css khusus untuk 1 halaman aja gk mau berpengaruh ke halaman lain --}}
@push('css')
    <style>

    </style>
@endpush

{{-- ini tempat isi kontennya --}}
@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate text-center mb-4">
          <h1 class="mb-2 bread">Keranjang</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Keranjang <i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
</section>

<section class="ftco-section ftco-cart">
    <div class="container">
        <div class="row">
        <div class="col-md-12 ftco-animate">
            <div class="cart-list">
                <table class="table">
                    <thead class="thead-primary">
                      <tr class="text-center">
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="text-center">
                        <td class="product-remove"><a href="#"><span class="icon-close"></span></a></td>
                        
                        <td class="image-prod"><div class="img" style="background-image:url(images/menu-2.jpg);"></div></td>
                        
                        <td class="product-name">
                            <h3>Creamy Latte Coffee</h3>
                            <p>Far far away, behind the word mountains, far from the countries</p>
                        </td>
                        
                        <td class="">$4.90</td>
                        
                        <td class="quantity">
                            <div class="input-group mb-3">
                             <input type="text" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100">
                          </div>
                      </td>
                        
                        <td class="">$4.90</td>
                      </tr><!-- END TR-->

                      <tr class="text-center">
                        <td class="product-remove"><a href="#"><span class="icon-close"></span></a></td>
                        
                        <td class="image-prod"><div class="img" style="background-image:url(images/menu-1.jpg);"></div></td>
                        
                        <td class="product-name">
                            <h3>Grilled Ribs Beef</h3>
                            <p>Far far away, behind the word mountains, far from the countries</p>
                        </td>
                        
                        <td class="">$15.70</td>
                        
                        <td class="quantity">
                            <div class="input-group mb-3">
                             <input type="text" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100">
                          </div>
                      </td>
                        
                        <td class="">$15.70</td>
                      </tr><!-- END TR-->
                    </tbody>
                  </table>
              </div>
        </div>
    </div>
    <div class="row justify-content-end">
        <div class="col col-lg-3 col-md-6 mt-5 cart-wrap ftco-animate">
            <div class="cart-total mb-3">
                <h3>Cart Totals</h3>
                <p class="d-flex">
                    <span>Subtotal</span>
                    <span>$20.60</span>
                </p>
                <p class="d-flex">
                    <span>Delivery</span>
                    <span>$0.00</span>
                </p>
                <p class="d-flex">
                    <span>Discount</span>
                    <span>$3.00</span>
                </p>
                <hr>
                <p class="d-flex total-price">
                    <span>Total</span>
                    <span>$17.60</span>
                </p>
            </div>
            <p class="text-center"><a href="checkout.html" class="btn btn-primary py-3 px-4">Proceed to Checkout</a></p>
        </div>
    </div>
    </div>
</section>

@endsection

{{-- ini buat tambahan js kalau misal ada js khusus untuk 1 halaman aja gk mau berpengaruh ke halaman lain kaya ajax dll --}}
@push('js')
    <script>

    </script>
@endpush

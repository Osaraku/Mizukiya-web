@extends('layouts.base')

{{-- ini buat tambahan css kalau misal ada css khusus untuk 1 halaman aja gk mau berpengaruh ke halaman lain --}}
@push('css')
    <style>

    </style>
@endpush

{{-- ini tempat isi kontennya --}}
@section('content')

<section class="home-slider owl-carousel js-fullheight">
    <div class="slider-item js-fullheight" style="background-image: url(images/bg_1.jpg);">
        <div class="overlay"></div>
      <div class="container">
        <div class="row slider-text js-fullheight justify-content-center align-items-center" data-scrollax-parent="true">

          <div class="col-md-12 col-sm-12 text-center ftco-animate">
              <span class="subheading">Feliciano</span>
            <h1 class="mb-4">Best Restaurant</h1>
          </div>

        </div>
      </div>
    </div>

    <div class="slider-item js-fullheight" style="background-image: url(images/bg_2.jpg);">
        <div class="overlay"></div>
      <div class="container">
        <div class="row slider-text js-fullheight justify-content-center align-items-center" data-scrollax-parent="true">

          <div class="col-md-12 col-sm-12 text-center ftco-animate">
              <span class="subheading">Feliciano</span>
            <h1 class="mb-4">Nutritious &amp; Tasty</h1>
          </div>

        </div>
      </div>
    </div>

    <div class="slider-item js-fullheight" style="background-image: url(images/bg_3.jpg);">
        <div class="overlay"></div>
      <div class="container">
        <div class="row slider-text js-fullheight justify-content-center align-items-center" data-scrollax-parent="true">

          <div class="col-md-12 col-sm-12 text-center ftco-animate">
              <span class="subheading">Feliciano</span>
            <h1 class="mb-4">Delicious Specialties</h1>
          </div>

        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section ftco-no-pt ftco-no-pb">
      <div class="container-fluid">
          <div class="row">
              <div class="col-md-12">
                  <div class="featured">
                      <div class="row">
                          <div class="col-md-3">
                              <div class="featured-menus ftco-animate">
                        <div class="menu-img img" style="background-image: url(images/breakfast-1.jpg);"></div>
                        <div class="text text-center">
                        <h3>Grilled Beef with potatoes</h3>
                            <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                        </div>
                      </div>
                          </div>
                          <div class="col-md-3">
                              <div class="featured-menus ftco-animate">
                        <div class="menu-img img" style="background-image: url(images/breakfast-2.jpg);"></div>
                        <div class="text text-center">
                        <h3>Grilled Beef with potatoes</h3>
                            <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                        </div>
                      </div>
                          </div>
                          <div class="col-md-3">
                              <div class="featured-menus ftco-animate">
                        <div class="menu-img img" style="background-image: url(images/breakfast-3.jpg);"></div>
                        <div class="text text-center">
                        <h3>Grilled Beef with potatoes</h3>
                            <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                        </div>
                      </div>
                          </div>
                          <div class="col-md-3">
                              <div class="featured-menus ftco-animate">
                        <div class="menu-img img" style="background-image: url(images/breakfast-4.jpg);"></div>
                        <div class="text text-center">
                        <h3>Grilled Beef with potatoes</h3>
                            <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                        </div>
                      </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
</section>

<section class="ftco-section ftco-wrap-about">
    <div class="container">
        <div class="row">
            <div class="col-md-7 d-flex">
                <div class="img img-1 mr-md-2" style="background-image: url(images/about.jpg);"></div>
                <div class="img img-2 ml-md-2" style="background-image: url(images/about-1.jpg);"></div>
            </div>
            <div class="col-md-5 wrap-about pt-5 pt-md-5 pb-md-3 ftco-animate">
      <div class="heading-section mb-4 my-5 my-md-0">
          <span class="subheading">About</span>
        <h2 class="mb-4">Feliciano Restaurant</h2>
      </div>
      <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                <pc class="time">
                    <span>Mon - Fri <strong>8 AM - 11 PM</strong></span>
                    <span><a href="#">+ 1-978-123-4567</a></span>
                </p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
  <div class="col-md-12 text-center heading-section ftco-animate">
      <span class="subheading">Services</span>
    <h2 class="mb-4">Catering Services</h2>
  </div>
</div>
<div class="row">
  <div class="col-md-4 d-flex align-self-stretch ftco-animate text-center">
    <div class="media block-6 services d-block">
      <div class="icon d-flex justify-content-center align-items-center">
            <span class="flaticon-cake"></span>
      </div>
      <div class="media-body p-2 mt-3">
        <h3 class="heading">Birthday Party</h3>
        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
      </div>
    </div>      
  </div>
  <div class="col-md-4 d-flex align-self-stretch ftco-animate text-center">
    <div class="media block-6 services d-block">
      <div class="icon d-flex justify-content-center align-items-center">
            <span class="flaticon-meeting"></span>
      </div>
      <div class="media-body p-2 mt-3">
        <h3 class="heading">Business Meetings</h3>
        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
      </div>
    </div>    
  </div>
  <div class="col-md-4 d-flex align-self-stretch ftco-animate text-center">
    <div class="media block-6 services d-block">
      <div class="icon d-flex justify-content-center align-items-center">
            <span class="flaticon-tray"></span>
      </div>
      <div class="media-body p-2 mt-3">
        <h3 class="heading">Wedding Party</h3>
        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
      </div>
    </div>      
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
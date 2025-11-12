@extends('layouts.master')

@section('title', 'Tentang Kami')

@section('content')

<!-- BredCrumb-Section -->
    <div class="bred_crumb">
      <div class="container">
        <!-- shape animation  -->
        <span class="banner_shape1"> <img src="{{asset('landing/images/banner-shape1.png')}}" alt="image" > </span>
        <span class="banner_shape2"> <img src="{{asset('landing/images/banner-shape2.png')}}" alt="image" > </span>
        <span class="banner_shape3"> <img src="{{asset('landing/images/banner-shape3.png')}}" alt="image" > </span>

        <div class="bred_text">
          <h1>Isi Saldo</h1>
          <ul>
            <li><a href="{{ route('home')}}">Home</a></li>
            <li><span>»</span></li>
            <li><a href="">Isi Saldo</a></li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Pricing-Section -->
    <section class="row_am pricing_section" id="pricing">
      <!-- container start -->
      <div class="container">

        <!-- pricing box  monthly start -->
        <div class="pricing_pannel monthly_plan active" data-aos="fade-up" data-aos-duration="1500">
          <!-- row start -->
          <div class="row">
            <!-- pricing box 1 -->
            <div class="col-md-4">
              <div class="pricing_block">
                <div class="feature_img" data-aos="fade-down" data-aos-duration="1500" data-aos-delay="100">
                  <img src="{{asset('landing/images/features_frame.png')}}" alt="image" >
                </div>
                <br>
                <ul class="benifits" >
                  <li>
                    <p><b>1. Ajukan Tiket Deposit</b></p>
                  </li>
                  <li>
                    Buka aplikasi dan buat tiket top up saldo.
                  </li>
                </ul>
                <br>
              </div>
            </div>

            <!-- pricing box 2 -->
            <div class="col-md-4">
              <div class="pricing_block">
                <div class="feature_img" data-aos="fade-down" data-aos-duration="1500" data-aos-delay="100">
                  <img src="{{asset('landing/images/saldo_1.png')}}" alt="image" >
                </div>
                <br>
                <ul class="benifits" >
                  <li>
                    <p><b>2. Tentukan Nominal</b></p>
                  </li>
                  <li>
                    Pilih nominal cepat atau isi nominal sesuai keinginan Anda.
                  </li>
                </ul>
                <br>
              </div>
            </div>

            <!-- pricing box 3 -->
            <div class="col-md-4">
              <div class="pricing_block">
                <div class="feature_img" data-aos="fade-down" data-aos-duration="1500" data-aos-delay="100">
                  <img src="{{asset('landing/images/saldo_2.png')}}" alt="image" >
                </div>
                <br>
                <ul class="benifits" >
                  <li>
                    <p><b>3. Transfer Otomatis Terverifikasi</b></p>
                  </li>
                  <li>
                    Transfer ke bank yang tersedia — saldo otomatis masuk dalam beberapa menit!
                  </li>
                </ul>
                <br>
              </div>
            </div>
          </div>
          <!-- row end -->
        </div>

      </div>
      <!-- container start end -->
    </section>
    <!-- Pricing-Section end -->

@endsection

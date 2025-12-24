@extends('layouts.master')

@section('title', 'itech telemedia')

@section('content')

    @php

        $dataWebReport = '';
        $dataLinkApk = '';
        $dataPopUpWa = '';
        $dataCsWa = '';
        $dataCsTelegram = '';
        $dataCenterWa1 = '';
        $dataCenterWa2 = '';
        $dataCenterWa3 = '';

        foreach ($data as $item) {
            if ($item->nama_field == 'Url Web Report') {
                $dataWebReport = $item->nilai_field;
            } else if ($item->nama_field == 'Url Link Apk') {
                $dataLinkApk = $item->nilai_field;
            } else if ($item->nama_field == 'Url Pop Up Wa') {
                $dataPopUpWa = $item->nilai_field;
            } else if ($item->nama_field == 'Url Cs Wa') {
                $dataCsWa = $item->nilai_field;
            } else if ($item->nama_field == 'Url Cs Telegram') {
                $dataCsTelegram = $item->nilai_field;
            } else if ($item->nama_field == 'Url Center Wa 1') {
                $dataCenterWa1 = $item->nilai_field;
            } else if ($item->nama_field == 'Url Center Wa 2') {
                $dataCenterWa2 = $item->nilai_field;
            } else if ($item->nama_field == 'Url Center Wa 3') {
                $dataCenterWa3 = $item->nilai_field;
            }
        }

    @endphp
    <!-- Banner-Section-Start -->
    <section class="banner_section">
      <!-- container start -->
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-12"  data-aos="fade-right" data-aos-duration="1500">
          	<!-- banner text -->
            <div class="banner_text">
              <!-- h1 -->
              <h1>Solusi Digital <span>untuk Distributor & Agen Pulsa Modern.</span></h1>
              <!-- p -->
              <p>Jalankan bisnis pulsa dan layanan digital tanpa ribet. Sistem stabil, harga kompetitif, Produk Lengkap,transaksi Lancar, dan fitur lengkap siap mendukung bisnis Anda.
              </p>
            </div>
            <!-- app buttons -->
            <ul class="app_btn">
              <li>
                <a href="{{ $dataLinkApk }}">
                  <img class="blue_img" src="{{asset('landing/images/googleplay_blue.png')}}" alt="image" >
                  <img class="white_img" src="{{asset('landing/images/googleplay_white.png')}}" alt="image" >
                </a>
              </li>
            </ul>
          </div>

          <!-- banner slides start -->
          <div class="col-lg-6 col-md-12"  data-aos="fade-in" data-aos-duration="1500">
            <div class="banner_slider">
              <div class="left_icon">
                <!-- <img src="images/message_icon.png" alt="image" > -->
              </div>
              <div class="right_icon">
                <!-- <img src="images/shield_icon.png" alt="image" > -->
              </div>
              <div id="frmae_slider" class="owl-carousel owl-theme">
                <div class="item">
                  <div class="slider_img">
                    <img src="{{asset('landing/images/screen.png')}}" alt="image" >
                  </div>
                </div>
                <div class="item">
                  <div class="slider_img">
                    <img src="{{asset('landing/images/screen-1.png')}}" alt="image" >
                  </div>
                </div>
                <div class="item">
                  <div class="slider_img">
                    <img src="{{asset('landing/images/screen-2.png')}}" alt="image" >
                  </div>
                </div>
                <div class="item">
                  <div class="slider_img">
                    <img src="{{asset('landing/images/screen-3.png')}}" alt="image" >
                  </div>
                </div>
              </div>
              <div class="slider_frame">
                <img src="{{asset('landing/images/mobile_frame_svg.svg')}}" alt="image" >
              </div>
            </div>
          </div>
          <!-- banner slides end -->

        </div>
        <!-- row end -->
      </div>
      <!-- container end -->

    </section>
    <!-- Banner-Section-end -->

    <!-- Trusted Section start -->
    <section class="row_am trusted_section">
      <!-- container start -->
      <div class="container">
        <!-- logos slider start -->
        <div class="company_logos" >
          <div id="company_slider" class="owl-carousel owl-theme">
            <div class="item">
              <div class="logo">
                <img src="{{asset('landing/images/telkomsel.png')}}" alt="image" >
              </div>
            </div>
            <div class="item">
              <div class="logo">
                <img src="{{asset('landing/images/axis.png')}}" alt="image" >
              </div>
            </div>
            <div class="item">
              <div class="logo">
                <img src="{{asset('landing/images/smartfren.png')}}" alt="image" >
              </div>
            </div>
            <div class="item">
              <div class="logo">
                <img src="{{asset('landing/images/tri.png')}}" alt="image" >
              </div>
            </div>
            <div class="item">
              <div class="logo">
                <img src="{{asset('landing/images/indosat.png')}}" alt="image" >
              </div>
            </div>
            <div class="item">
              <div class="logo">
                <img src="{{asset('landing/images/dana.png')}}" alt="image" >
              </div>
            </div>
            <div class="item">
              <div class="logo">
                <img src="{{asset('landing/images/shopeepay.png')}}" alt="image" >
              </div>
            </div>
            <div class="item">
              <div class="logo">
                <img src="{{asset('landing/images/gopay.png')}}" alt="image" >
              </div>
            </div>
            <div class="item">
              <div class="logo">
                <img src="{{asset('landing/images/ovo.png')}}" alt="image" >
              </div>
            </div>
          </div>
        </div>
        <!-- logos slider end -->
      </div>
      <!-- container end -->
    </section>
    <!-- Trusted Section ends -->


    <!-- Features-Section-Start -->
    <section class="row_am features_section" id="features">
      <!-- container start -->
      <div class="container">
        <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
          <!-- h2 -->
          <h2><span>Fitur Terbaik</span> untuk Bisnis Digital Anda</h2>
          <!-- p -->
          <p>Mulai jualan pulsa, paket data, dan produk digital tanpa ribet.<br>
            Sistem cepat, aman,dan pastinya bantu kamu nambah penghasilan.</p>
        </div>
        <div class="feature_detail">
          <!-- feature box left -->
          <div class="left_data feature_box">

          	<!-- feature box -->
            <div class="data_block" data-aos="fade-right" data-aos-duration="1500">
              <div class="icon">
                <img src="{{asset('landing/images/secure_data.png')}}" alt="image" >
              </div>
              <div class="text">
                <br>
                <h4>Keamanan Transaksi</h4>
                <p>Transaksi diproses melalui sistem terenkripsi
                  dan server terpercaya. Data aman, transaksi lancar tanpa khawatir.</p>
              </div>
            </div>

            <!-- feature box -->
            <div class="data_block" data-aos="fade-right" data-aos-duration="1500">
              <div class="icon">
                <img src="{{asset('landing/images/functional.png')}}" alt="image" >
              </div>
              <div class="text">
                <br>
                <h4>Transaksi Cepat</h4>
                <p>Pengisian pulsa, paket data, token listrik,
                  dan semua produk digital diproses otomatis dalam hitungan detik.</p>
              </div>
            </div>
          </div>

          <!-- feature box right -->
          <div class="right_data feature_box">

          	<!-- feature box -->
            <div class="data_block" data-aos="fade-left" data-aos-duration="1500">
              <div class="icon">
                <img src="{{asset('landing/images/live-chat.png')}}" alt="image" >
              </div>
              <div class="text">
                <br>
                <h4>Multi Pembayaran</h4>
                <p>Top-up saldo lebih fleksibel: Bank Transfer, QRIS, E-wallet,
                  dan metode pembayaran lainnya.<br>
                  &nbsp;&nbsp;&nbsp;&nbsp;
                </p>
              </div>
            </div>

            <!-- feature box -->
            <div class="data_block" data-aos="fade-left" data-aos-duration="1500">
              <div class="icon">
                <img src="{{asset('landing/images/support.png')}}" alt="image" >
              </div>
              <div class="text">
                <br>
                <h4>Customer Service 24/7</h4>
                <p>Customer Service Kami siap membantu kapan pun, memastikan Transaksi kamu terus berjalan tanpa gangguan.</p>
              </div>
            </div>

          </div>
          <!-- feature image -->
          <div class="feature_img" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
            <img src="{{asset('landing/images/features_frame.png')}}" alt="image" >
          </div>
        </div>
      </div>
      <!-- container end -->
    </section>
    <!-- Features-Section-end -->

    <!-- About-App-Section-Start -->
    <section class="row_am about_app_section">
      <!-- container start -->
      <div class="container">
      	<!-- row start -->
        <div class="row">
          <div class="col-lg-6">

          	<!-- about images -->
            <div class="about_img" data-aos="fade-in" data-aos-duration="1500">
              <div class="frame_img">
                <img class="moving_position_animatin" src="{{asset('landing/images/about-frame.png')}}" alt="image" >
              </div>
              <div class="screen_img">
                <img class="moving_animation" src="{{asset('landing/images/about-screen.png')}}" alt="image" >
              </div>
            </div>
          </div>
          <div class="col-lg-6">

          	<!-- about text -->
            <div class="about_text">
              <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">

              	<!-- h2 -->
                <h2>Solusi Cepat untuk Pulsa, PPOB, & E-Wallet.<span>
                  <br>
                  Lengkap dan Mudah.</span></h2>

                <!-- p -->
                <p>
                  Dari isi pulsa sampai bayar tagihan, semua bisa kamu lakukan dengan i-tech
                  cuma dalam hitungan detik! Sudah ribuan pengguna ngerasain betapa mudahnya transaksi digital dengan i-tech. Yuk gabung sekarang dan rasain sendiri kemudahannya.
                </p>
              </div>

              <!-- UL -->
              <ul class="app_statstic" id="counter" data-aos="fade-in" data-aos-duration="1500">
                <li>
                  <div class="icon">
                    <img src="{{asset('landing/images/reviews.png')}}" alt="image" >

                  </div>
                  <div class="text">
                    <p><span class="counter-value" data-count="200">0</span><span>K+</span></p>
                    <p>Transaksi Sukses</p>
                  </div>
                </li>
                <li>
                  <div class="icon">
                    <img src="{{asset('landing/images/followers.png')}}" alt="image" >
                  </div>
                  <div class="text">
                    <p><span class="counter-value" data-count="500">0 </span><span>K+</span></p>
                    <p>Mitra Aktif</p>
                  </div>
                </li>
                <li>
                  <div class="icon">
                    <img src="{{asset('landing/images/download.png')}}" alt="image" >
                  </div>
                  <div class="text">
                    <p><span class="counter-value" data-count="1250">0</span><span>+</span></p>
                    <p>Download App</p>
                  </div>
                </li>
                <li>
                  <div class="icon">
                    <img src="{{asset('landing/images/countries.png')}}" alt="image" >
                  </div>
                  <div class="text">
                    <p><span class="counter-value" data-count="4.9">0</span><span></span></p>
                    <p>Rating Pengguna</p>
                  </div>
                </li>
              </ul>
              <!-- UL end -->
              <a href="{{ $dataLinkApk }}" class="btn puprple_btn" data-aos="fade-in" data-aos-duration="1500">MULAI  COBA GRATIS</a>
            </div>
          </div>
        </div>
        <!-- row end -->
      </div>
      <!-- container end -->
    </section>
    <!-- About-App-Section-end -->

    <!-- ModernUI-Section-Start -->
    <section class="row_am modern_ui_section">
      <!-- container start -->
      <div class="container">
      	<!-- row start -->
        <div class="row">
          <div class="col-lg-6">
          	<!-- UI content -->
            <div class="ui_text">
              <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
                <h2 style="font-size: 21pt;">Dukungan Pelanggan 24/7,
                  <span>Keamanan Maksimal</span></h2>
                <p>
                  Di i-tech, kami menyediakan layanan pelanggan 24/7 untuk memastikan setiap pertanyaan atau masalah Anda segera ditangani.
                  Kami juga memprioritaskan keamanan transaksi dengan teknologi enkripsi terbaru, menjaga data Anda tetap terlindungi.
                  Dengan dukungan tanpa henti dan perlindungan maksimal, Anda bisa bertransaksi dengan nyaman kapan saja
                </p>
              </div>
              <ul class="design_block">
                <li data-aos="fade-up" data-aos-duration="1500">
                  <h4>Transaksi Lancar</h4>
                  <p>Nikmati pengalaman transaksi tanpa hambatan. Sistem kami dirancang untuk memberikan proses yang cepat, stabil, dan efisien di setiap langkah.</p>
                </li>
                <li data-aos="fade-up" data-aos-duration="1500">
                  <h4>Costumer Service 24 Jam</h4>
                  <p>Costumer Service kami selalu siap membantu 24/7. Kapan pun Anda membutuhkan bantuan, kami hadir untuk memberikan solusi terbaik dengan respons yang cepat.</p>
                </li>
                <li data-aos="fade-up" data-aos-duration="1500">
                  <h4>Keamananan Data Terjaga</h4>
                  <p>Kami melindungi setiap transaksi dan informasi pribadi Anda dengan sistem keamanan terbaik</p>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6">
          	<!-- UI Image -->
            <div class="ui_images" data-aos="fade-in" data-aos-duration="1500">
              <div class="left_img">
                <img class="moving_position_animatin" src="{{asset('landing/images/modern01.png')}}"" alt="image" >
              </div>
              <!-- UI Image -->
              <div class="right_img">
                <img class="moving_position_animatin" src="{{asset('landing/images/secure_data.png')}}"" alt="image" >
                <img class="moving_position_animatin" src="{{asset('landing/images/modern02.png')}}"" alt="image" >
                <img class="moving_position_animatin" src="{{asset('landing/images/modern03.png')}}"" alt="image" >
              </div>
            </div>
          </div>
        </div>
        <!-- row end -->
      </div>
      <!-- container end -->
    </section>
    <!-- ModernUI-Section-end -->

    <!-- How-It-Workes-Section-Start -->
    <section class="row_am how_it_works" id="how_it_work">
      <!-- container start -->
      <div class="container">
        <div class="how_it_inner">
          <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
          	<!-- h2 -->
            <h2>3 Langkah Cepat Jadi
              <br>
              <span> Mitra i-tech</span></h2>
          </div>
          <div class="step_block">
          	<!-- UL -->
            <ul>
              <!-- step -->
              <li>
                <div class="step_text" data-aos="fade-right" data-aos-duration="1500">
                  <h4>Download Aplikasi</h4>
                  <div class="app_icon">
                    <a href="#"><i class="icofont-brand-android-robot"></i></a>
                  </div>
                  <p>Unduh i-tech dari Play Store dan akses semua produk digital dalam satu aplikasi.</p>
                </div>
                <div class="step_number">
                  <h3 style="color: white;">01</h3>
                </div>
                <div class="step_img" data-aos="fade-left" data-aos-duration="1500">
                  <img src="{{asset('landing/images/download_app.jpg')}}" alt="image" >
                </div>
              </li>

              <!-- step -->
              <li>
                <div class="step_text" data-aos="fade-left" data-aos-duration="1500">
                  <h4>Daftar Akun</h4>
                  <p>Registrasi cepat dan langsung terhubung ke sistem transaksi real-time.</p>
                </div>
                <div class="step_number">
                  <h3 style="color: white;">02</h3>
                </div>
                <div class="step_img" data-aos="fade-right" data-aos-duration="1500">
                  <img src="{{asset('landing/images/create_account.jpg')}}" alt="image" >
                </div>
              </li>

              <!-- step -->
              <li>
                <div class="step_text" data-aos="fade-right" data-aos-duration="1500">
                  <h4>Mulai Bertransaksi</h4>
                  <p>Isi saldo, beli pulsa, paket data, token listrik, dan banyak layanan lainnya — cepat & mudah.</p>
                  <span>Jika Ada Pertanyaan Silahkan Hubungi Costumer Service Kami <a href="{{ $dataPopUpWa }}" style="color: black">CS I-tech</a></span>
                </div>
                <div class="step_number">
                  <h3 style="color: white;">03</h3>
                </div>
                <div class="step_img" data-aos="fade-left" data-aos-duration="1500">
                  <img src="{{asset('landing/images/enjoy_app.jpg')}}" alt="image" >
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- container end -->
    </section>
    <!-- How-It-Workes-Section-end -->

    <!-- Testimonial-Section start -->
    <section class="row_am testimonial_section">
      <!-- container start -->
      <div class="container">
        <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
            <h2>Testimoni Pelanggan <br>
            <span>i-tech</span></h2>
        </div>
        <div class="testimonial_block" data-aos="fade-in" data-aos-duration="1500">
          <div id="testimonial_slider" class="owl-carousel owl-theme">
          	<!-- user 1 -->
            @foreach ($testimoni as $item)
                <div class="item">
                    <div class="testimonial_slide_box">
                        <div class="rating">
                        {{-- <span><i class="icofont-star"></i></span>
                        <span><i class="icofont-star"></i></span>
                        <span><i class="icofont-star"></i></span>
                        <span><i class="icofont-star"></i></span>
                        <span><i class="icofont-star"></i></span> --}}
                        @for ($i = 1; $i <= 5; $i++)
                            @if ($i <= $item->rating)
                                <span><i class="icofont-star"></i></span>
                            @else
                                <span><i class="icofont-star"></i></span>
                            @endif
                        @endfor
                        </div>
                        <p class="review">
                        “ {{ $item->caption }} ”
                        </p>
                        <div class="testimonial_img">
                        <img src="{{asset('landing/images/review_11.png')}}" alt="image" width="40%">
                        </div>
                        <h3>{{ $item->namalengkap }}</h3>
                        <span class="designation">{{ $item->pekerjaan }}</span>
                    </div>
                </div>
            @endforeach
        </div>
      </div>
    </section>
    <!-- Testimonial-Section end -->

    <!-- FAQ-Section start -->
    <section class="row_am faq_section">
      <!-- container start -->
      <div class="container">
        <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
          <!-- h2 -->
          <h2>Tanya Jawab Seputar <br>
            <span>i-tech</span>
          </h2>
        </div>
        <!-- faq data -->
        <div class="faq_panel">
          <div class="accordion" id="accordionExample">
            <div class="card" data-aos="fade-up" data-aos-duration="1500">
              <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                  <button type="button" class="btn btn-link active" data-toggle="collapse" data-target="#collapseOne">
                  	<i class="icon_faq icofont-plus"></i></i>Bagaimana cara menjadi mitra i-tech?</button>
                </h2>
              </div>
              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                  <p>Cukup daftar melalui aplikasi, verifikasi nomor WhatsApp, lalu isi saldo pertama. Setelah itu Anda sudah bisa langsung bertransaksi.</p>
                </div>
              </div>
            </div>
            <div class="card" data-aos="fade-up" data-aos-duration="1500">
              <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                  <button type="button" class="btn btn-link collapsed" data-toggle="collapse"
                    data-target="#collapseTwo"><i class="icon_faq icofont-plus"></i></i>Berapa minimal Deposit saldo?</button>
                </h2>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                  <p>Minimal deposit sangat terjangkau mulai dari Rp50.000.</p>
                </div>
              </div>
            </div>
            <div class="card" data-aos="fade-up" data-aos-duration="1500">
              <div class="card-header" id="headingThree">
                <h2 class="mb-0">
                  <button type="button" class="btn btn-link collapsed" data-toggle="collapse"
                    data-target="#collapseThree"><i class="icon_faq icofont-plus"></i></i>Produk apa saja yang tersedia di i-tech?</button>
                </h2>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                  <p>Pulsa all operator, Paket Data, token PLN, voucher game, e-money, bayar tagihan (PPOB), dan banyak produk digital lain.</p>
                </div>
              </div>
            </div>
            <div class="card" data-aos="fade-up" data-aos-duration="1500">
              <div class="card-header" id="headingFour">
                <h2 class="mb-0">
                  <button type="button" class="btn btn-link collapsed" data-toggle="collapse"
                    data-target="#collapseFour"><i class="icon_faq icofont-plus"></i></i>Apakah harga produk bersaing?</button>
                </h2>
              </div>
              <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                <div class="card-body">
                  <p>Ya! Kami menyediakan harga grosir, margin stabil, dan update harga otomatis mengikuti pasar.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- container end -->
    </section>
    <!-- FAQ-Section end -->

    <!-- Story-Section-Start -->
    <section class="row_am latest_story" id="blog">
     <!-- container start -->
      <div class="container">
          <div class="section_title" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="100">
              <h2>News & Updates <br><span>i-tech</span></h2>
              <p>Selalu terhubung dengan kabar terbaru seputar dunia pulsa dan teknologi digital.</p>
          </div>
          <!-- row start -->
          <div class="row">
          	<!-- story -->
            @foreach ($berita as $item)
                <div class="col-md-4">
                    <div class="story_box" data-aos="fade-up" data-aos-duration="1500">
                        <div class="story_img">
                        <img src="{{ asset('berita/' . $item->image) }}" alt="image" width="50%">
                        </div>
                        <div class="story_text">
                            <h3>{{ $item->title }}</h3>
                            <p style="color: black">
                                {!! Str::words(strip_tags($item->content), 10, '...') !!}
                            </p>
                            <a href="{{ route('get-detail-blog', $item->slug) }}">READ MORE</a>
                        </div>
                    </div>
                </div>
            @endforeach

            <!-- story -->
            {{-- <div class="col-md-4">
                <div class="story_box" data-aos="fade-up" data-aos-duration="1500">
                    <div class="story_img">
                      <img src="{{asset('landing/images/story02.png')}}" alt="image" >
                      <span>45 min ago</span>
                    </div>
                    <div class="story_text">
                          <h3>Top rated app! Yupp.</h3>
                        <p>Simply dummy text of the printing and typesetting industry lorem Ipsum has Lorem Ipsum is.</p>
                        <a href="#">READ MORE</a>
                    </div>
                </div>
            </div>

            <!-- story -->
            <div class="col-md-4">
                <div class="story_box" data-aos="fade-up" data-aos-duration="1500">
                    <div class="story_img">
                      <img src="{{asset('landing/images/story03.png')}}" alt="image" >
                      <span>45 min ago</span>
                    </div>
                    <div class="story_text">
                          <h3>Creative ideas on app.</h3>
                        <p>Printing and typesetting industry lorem Ipsum has Lorem simply dummy text of the.</p>
                        <a href="#">READ MORE</a>
                    </div>
                </div>
            </div> --}}
          </div>
          <!-- row end -->
      </div>
      <!-- container end -->
    </section>
    <!-- Story-Section-end -->
@endsection

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
          <h1>Tentang Kami</h1>
          <ul>
            <li><a href="{{ route('home')}}">Home</a></li>
            <li><span>»</span></li>
            <li><a href="">Tentang Kami</a></li>
          </ul>
        </div>
      </div>
    </div>


    <!-- App-Solution-Section-Start -->
    <section class="row_am app_solution_section">
      <!-- container start -->
      <div class="container">
        <!-- row start -->
        <div class="row">
          <div class="col-lg-6">
            <!-- UI content -->
            <div class="app_text">
              <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
                <h2><span>i-tech</span> Solusi Digital Terpercaya untuk Pulsa, Pembayaran PPOB & E-Wallet.</h2>
              </div>
              <p data-aos="fade-up" data-aos-duration="1500">
                CV.ITECH TELEMEDIA adalah perusahaan yang bergerak dalam bidang penjualan produk voucher isi ulang pulsa,
                perdana operator seluler, akksesories hp, pelayanan jasa multi payment dan tiket. Berawal dari sebuah
                toko kecil yang berdiri sejak 22 November 2006, kami telah berkembang menjadi salah satu server pulsa
                all operator terbesar di Bandung.
              </p>
              <p data-aos="fade-up" data-aos-duration="1500">
                Dengan dukungan piranti keras dan lunak yang canggih, kami bisa melayani transaksi dengan cepat dan tepat.
                Selain itu, pelayanan konsumen kami siap memberikan layanan purna jual yang memuaskan, yang bisa menjawab
                segala keluhan dan pertanyaan anda sepanjang waktu, 24 jam sehari, 7 hari seminggu.
              </p>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="app_images" data-aos="fade-in" data-aos-duration="1500">
              <ul>
                <li><img src="{{asset('landing/images/abt_01.JPG')}}" alt=""></li>
                <!-- <li>
                  <a class="popup-youtube play-button"
                    data-url="https://www.youtube.com/embed/tgbNymZ7vqY?autoplay=1&mute=1" data-toggle="modal"
                    data-target="#myModal" title="About Video">
                    <img src="images/abt_02.png" alt="">
                    <div class="waves-block">
                      <div class="waves wave-1"></div>
                      <div class="waves wave-2"></div>
                      <div class="waves wave-3"></div>
                    </div>
                    <span class="play_icon"><img src="images/play_black.png" alt="image"></span>
                  </a>
                </li>
                <li><img src="images/abt_03.png" alt=""></li> -->
                <!-- <li><img src="images/abt_03.png" alt=""></li> -->
              </ul>
            </div>
          </div>
        </div>
        <!-- row end -->
      </div>
      <!-- container end -->
    </section>
    <!-- App-Solution-Section-end -->


    <!-- Why we are section Start -->
    <section class="row_am why_we_section" data-aos="fade-in">
      <div class="why_inner">
        <div class="container">
          <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
            <h2>Apa yang Membuat <span>i-tech</span> Berbeda!</h2>
            <p>Transaksi digital lebih mudah, cepat, dan terjangkau. Dari pulsa hingga tiket, semua bisa dilakukan dalam hitungan detik. Harga bersaing, layanan siap bantu 24/7.</p>
          </div>
          <div class="row">
            <div class="col-md-6 col-lg-3">
              <div class="why_box" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
                <div class="icon">
                  <img src="{{asset('landing/images/secure.png')}}" alt="image">
                </div>
                <div class="text">
                  <h3>Sistem Aman & Terpercaya</h3>
                  <p>Transaksi berjalan di sistem server yang stabil, cepat, dan memiliki keamanan tinggi untuk menjamin kenyamanan pelanggan dan mitra.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3">
              <div class="why_box" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">
                <div class="icon">
                  <img src="{{asset('landing/images/abt_functional.png')}}" alt="image">
                </div>
                <div class="text">
                  <h3>Layanan Lengkap & Terintegrasi</h3>
                  <p>Satu platform untuk pulsa, paket data, voucher digital, pembayaran tagihan, dan tiket — praktis dan efisien.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3">
              <div class="why_box" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
                <div class="icon">
                  <img src="{{asset('landing/images/communication.png')}}" alt="image">
                </div>
                <div class="text">
                  <h3>Dukungan Pelanggan Responsif</h3>
                  <p>Tim support siap membantu setiap kendala dan pertanyaan pelanggan dengan ramah dan profesional.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3">
              <div class="why_box" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="400">
                <div class="icon">
                  <img src="{{asset('landing/images/abt_support.png')}}" alt="image">
                </div>
                <div class="text">
                  <h3>Layanan 24/7 Siap Membantu</h3>
                  <p>Kami selalu ada untuk membantu Anda — kapan pun, setiap hari.</p>
                </div>
              </div>
            </div>
          </di>
        </div>
      </div>
    </section>

        <!-- Query Section Start -->
    <section class="row_am query_section">
      <div class="query_inner" data-aos="fade-in" data-aos-duration="1500">
          <div class="container">
            <!-- shape animation  -->
            <span class="banner_shape1"> <img src="{{asset('landing/images/banner-shape1.png')}}" alt="image" > </span>
            <span class="banner_shape2"> <img src="{{asset('landing/images/banner-shape2.png')}}" alt="image" > </span>
            <span class="banner_shape3"> <img src="{{asset('landing/images/banner-shape3.png')}}" alt="image" > </span>

              <div class="section_title">
                  <h2>Ingin tahu lebih lanjut tentang i-tech ?</h2>
                  <p>Hubungi tim Customer Service kami untuk mendapatkan <br>informasi lengkap mengenai layanan dan solusi distribusi pulsa terbaik dari i-Tech.</p>
              </div>
              <a href="https://wa.me/6281802144757?text=Halo%20Saya%20Mau%20Tanya" target="_blank" class="btn white_btn">Hubungi Kami Sekarang</a>
          </div>
      </div>
    </section>

        <!-- Map Section Start -->
    <section class="row_am map_section">
      <div class="container">
          <div class="map_inner">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.771154984694!2d107.567764!3d-6.9179398999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e5e49eaf5f89%3A0xec04d6b79c1cbeb3!2sPT.%20Itech%20Telemedia!5e0!3m2!1sen!2sid!4v1762609924892!5m2!1sen!2sid" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
      </div>
    </section>
    <!-- Map Section End -->

@endsection

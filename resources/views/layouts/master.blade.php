<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>@yield('title', 'I-tech Telemedia')</title>

  <!-- icofont-css-link -->
  <link rel="stylesheet" href="{{asset('landing/css/icofont.min.css')}}">
  <!-- Owl-Carosal-Style-link -->
  <link rel="stylesheet" href="{{asset('landing/css/owl.carousel.min.css')}}">
  <!-- Bootstrap-Style-link -->
  <link rel="stylesheet" href="{{asset('landing/css/bootstrap.min.css')}}">
  <!-- Aos-Style-link -->
  <link rel="stylesheet" href="{{asset('landing/css/aos.css')}}">
  <!-- Coustome-Style-link -->
  <link rel="stylesheet" href="{{asset('landing/css/style.css')}}">
  <!-- Responsive-Style-link -->
  <link rel="stylesheet" href="{{asset('landing/css/responsive.css')}}">
  <!-- Favicon -->
  <link rel="shortcut icon" href="{{asset('landing/images/favicon.png')}}" type="image/x-icon">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
  integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

{{-- <style>
.grecaptcha-badge {
    left: 10px !important;
    right: auto !important;
    bottom: 10px !important;
    transform: scale(0.7);
    opacity: 0.6;
    z-index: 1000;
}
</style> --}}

</head>

<body>
  <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">
  <!-- Page-wrapper-Start -->
  <div class="page_wrapper">

    <!-- Preloader -->
    <!-- <div id="preloader">
      <div id="loader"></div>
    </div> -->

    <!-- Header Start -->
        @if (Request::is('/'))
        <header>
            <!-- container start -->
            <div class="container">
                <!-- navigation bar -->
                <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="#">
                    <img src="{{asset('landing/images/logo.png')}}" alt="image" >
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                    <!-- <i class="icofont-navigation-menu ico_menu"></i> -->
                    <div class="toggle-wrap">
                        <span class="toggle-bar"></span>
                    </div>
                    </span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                    <li class="nav-item has_dropdown">
                        <a class="nav-link" href="{{ route('home')}}">Home</a>
                    </li>
                    <li class="nav-item has_dropdown">
                        <a class="nav-link" href="{{ route('about')}}">Tentang</a>
                    </li>
                    <li class="nav-item has_dropdown">
                        <a class="nav-link" href="{{ route('home') }}#how_it_work">Cara Daftar</a>
                    </li>
                    <li class="nav-item has_dropdown">
                        <a class="nav-link" href="{{ route('saldo')}}">Isi Saldo</a>
                    </li>
                    <li class="nav-item has_dropdown">
                        <a class="nav-link" href="https://webreport.itechtelemedia.co.id" target="_blank">Web Report</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link dark_btn" href="https://drive.google.com/file/d/1M3g2rGPk4qnev1waEpmt-579ru82fZLG/view?usp=drive_link" target="_blank">Download I-tech</a>
                    </li>
                    </ul>
                </div>
                </nav>
                <!-- navigation end -->
            </div>
        <!-- container end -->
        </header>

    @else
        {{-- Halaman lain --}}
        <header class="white_header">
            <!-- container start -->
            <div class="container">
                <!-- navigation bar -->
                <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="#">
                    <img src="{{asset('landing/images/logo_white.png')}}" alt="image" >
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                    <!-- <i class="icofont-navigation-menu ico_menu"></i> -->
                    <div class="toggle-wrap">
                        <span class="toggle-bar"></span>
                    </div>
                    </span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                    <li class="nav-item has_dropdown">
                        <a class="nav-link" href="{{ route('home')}}">Home</a>
                    </li>
                    <li class="nav-item has_dropdown">
                        <a class="nav-link" href="{{ route('about')}}">Tentang</a>
                    </li>
                    <li class="nav-item has_dropdown">
                        <a class="nav-link" href="{{ route('home') }}#how_it_work">Cara Daftar</a>
                    </li>
                    <li class="nav-item has_dropdown">
                        <a class="nav-link" href="{{ route('saldo')}}">Isi Saldo</a>
                    </li>
                    <li class="nav-item has_dropdown">
                        <a class="nav-link" href="https://webreport.itechtelemedia.co.id" target="_blank">Web Report</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link dark_btn" href="https://drive.google.com/file/d/1M3g2rGPk4qnev1waEpmt-579ru82fZLG/view?usp=drive_link" target="_blank">Download I-tech</a>
                    </li>
                    </ul>
                </div>
                </nav>
                <!-- navigation end -->
            </div>
        <!-- container end -->
        </header>
    @endif

    @yield('content')

    <!-- News-Letter-Section-Start -->
    <section class="newsletter_section">
      <div class="container">
        <div class="newsletter_box">
          <div class="row justify-content-center text-center">

            <div class="col-md-4 col-sm-6 mb-4">
              <div class="contact_item">
                <img class="moving_position_animatin" src="{{asset('landing/images/phone.png')}}" alt="image" >
                <h3>Contact Us</h3>
                <span>(022) 86067617</span>
              </div>
            </div>

            <div class="col-md-4 col-sm-6 mb-4">
              <div class="contact_item">
                <img class="moving_position_animatin" src="{{asset('landing/images/email.png')}}" alt="image" >
                <h3>Email Address</h3>
                <span>admin@itechtelemedia.co.id</span>
              </div>
            </div>

            <div class="col-md-4 col-sm-6 mb-4">
              <div class="contact_item">
               <img class="moving_position_animatin" src="{{asset('landing/images/maps.png')}}" alt="image" >
                <h3>Office Location</h3>
                <span>Jl. Melong Asih, Komplek Melong Asih Regency No.A32</span>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- News-Letter-Section-End -->

    <!-- Footer-Section start -->
    <footer>
        <div class="top_footer" id="contact">
          	<!-- container start -->
            <div class="container">
              <!-- row start -->
              <div class="row">
              	  <!-- footer link 1 -->
                  <div class="col-lg-6 col-md-6 col-12">
                      <div class="abt_side">
                        <div class="logo"> <img src="{{asset('landing/images/footer_logo.png')}}" alt="image" ></div>
                        <ul>
                          <li><a href="">
                            I-Tech Solusi Mudah untuk Transaksi Pulsa, Paket Data, Token PLN, dan Pembayaran PPOB
                              Nikmati kemudahan transaksi kapan saja dan di mana saja, dengan proses yang cepat dan praktis.</a></li>
                          <!-- <li><a href="#">(022) 86067617</a></li> -->
                        </ul>
                        <ul class="social_media">
                            <li><a href="https://www.facebook.com/itechtelemedia" target="_blank"><i class="icofont-facebook"></i></a></li>
                            <li><a href="https://www.instagram.com/itechtelemedia" target="_blank"><i class="icofont-instagram"></i></a></li>
                        </ul>
                      </div>
                  </div>

                  <!-- footer link 2 -->
                  <div class="col-lg-3 col-md-6 col-12">
                      <div class="links">
                        <h3>Links</h3>
                          <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Tentang</a></li>
                            <li><a href="#">Cara Daftar</a></li>
                            <li><a href="#">Isi Saldo</a></li>
                            <li><a href="#">Web Report</a></li>
                          </ul>
                      </div>
                  </div>

                  <!-- footer link 3 -->
                  <div class="col-lg-3 col-md-6 col-12">
                    <div class="links">
                      <h3>Costumer Service</h3>
                        <ul>


                          <li style="color: #fff;"><a href="https://wa.me/6281802144757" target="_blank" style="color: #fff;"><i class="fab fa-whatsapp"></i> CS Whatsapp</a></li>
                          <li style="color: #fff;"><a href="https://t.me/Cs_itech01" target="_blank"><i class="fab fa-telegram"></i> CS Telegram</a></li>
                          <li style="color: #fff;"><a href="https://wa.me/6285720165555" target="_blank" style="color: #fff;"><i class="fab fa-whatsapp"></i> Center Whatsapp 1</a></li>
                          <li style="color: #fff;"><a href="https://wa.me/6287825981888" target="_blank" style="color: #fff;"><i class="fab fa-whatsapp"></i> Center Whatsapp 2</a></li>
                          <li style="color: #fff;"><a href="https://wa.me/6281220826161" target="_blank" style="color: #fff;"><i class="fab fa-whatsapp"></i> Center Whatsapp 3</a></li>
                        </ul>
                    </div>
                  </div>

              </div>
              <!-- row end -->
          </div>
          <!-- container end -->
        </div>

        <!-- last footer -->
        <div class="bottom_footer">
        	<!-- container start -->
            <div class="container">
              <!-- row start -->
              <div class="row">
                <div class="col-md-6">
                    <p>© Copyrights 2025. All rights reserved.</p>
                </div>
                <div class="col-md-6">
                    <p class="developer_text">Design & developed by RF</p>
                </div>
            </div>
            <!-- row end -->
            </div>
            <!-- container end -->
        </div>

        <!-- go top button -->
        <div class="go_top">
            <!-- <span><img src="images/go_top.png" alt="image" ></span> -->
        </div>
    </footer>
    <!-- Footer-Section end -->

    <!-- WhatsApp floating button -->
    <a href="https://wa.me/6281802144757?text=Halo%20Saya%20Mau%20Tanya"
        class="whatsapp-float" target="_blank" rel="noopener" aria-label="Chat via WhatsApp">
        <svg viewBox="0 0 32 32" width="20" height="20" aria-hidden="true" focusable="false">
        <path fill="#fff" d="M16 3C9.4 3 4 8.4 4 15c0 2.6.8 5 2.2 7.1L4 29l6.2-2.1c1.9 1 4 1.6 6 1.6 6.6 0 12-5.4 12-12S22.6 3 16 3z"/>
        <path fill="#25D366" d="M21.7 18.1c-.3-.2-1.9-.9-2.2-1-.3-.1-.5-.2-.7.2-.2.3-.8 1-.9 1.2-.2.3-.3.3-.6.1-1.8-.9-3-1.6-4.2-3.3-.3-.5.3-.5.9-1.6.1-.3 0-.5-.1-.7-.1-.2-.7-1.6-.9-2.2-.2-.6-.5-.5-.8-.5-.3 0-.7 0-1.1 0-.3 0-.7.1-1 .4-.3.3-1 1-1 2.4s1 2.8 1.2 3c.2.2 2 3 4.8 4.2 2.8 1.2 2.8.8 3.3.8.5 0 1.6-.6 1.8-1.6.2-1 .2-1.1 0-1.3z"/>
        </svg>
    </a>

  <!-- Page-wrapper-End -->

  <!-- Icon -->
  <script>
    window.addEventListener('scroll', function() {
      if (window.innerWidth <= 768) {
        const footer = document.querySelector('footer');
        const waButton = document.querySelector('.whatsapp-float');
        const footerTop = footer.getBoundingClientRect().top;
        const windowHeight = window.innerHeight;

        if (footerTop < windowHeight - 100) {
          waButton.style.bottom = '90px'; // naik kalau footer kelihatan
        } else {
          waButton.style.bottom = '20px'; // posisi normal
        }
      } else {
        // reset posisi untuk desktop
        const waButton = document.querySelector('.whatsapp-float');
        waButton.style.bottom = '20px';
      }
    });


  </script>

  <script src="https://www.google.com/recaptcha/api.js?render={{ config('services.recaptcha.site_key') }}"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        grecaptcha.ready(function() {
            grecaptcha.execute('{{ config('services.recaptcha.site_key') }}', {action: 'front'})
            .then(function(token) {
                document.getElementById('g-recaptcha-response').value = token;
            });
        });
    });
    </script>


  <!-- Jquery-js-Link -->
  <script src="{{asset('landing/js/jquery.js')}}"></script>
  <!-- owl-js-Link -->
  <script src="{{asset('landing/js/owl.carousel.min.js')}}"></script>
  <!-- bootstrap-js-Link -->
  <script src="{{asset('landing/js/bootstrap.min.js')}}"></script>
  <!-- aos-js-Link -->
  <script src="{{asset('landing/js/aos.js')}}"></script>
  <!-- main-js-Link -->
  <script src="{{asset('landing/js/main.js')}}"></script>

</body>
</html>

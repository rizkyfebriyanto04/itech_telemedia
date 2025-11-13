<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>@yield('title', 'I-tech Telemedia')</title>

  <!-- icofont-css-link -->
  <link rel="stylesheet" href="{{asset('landing/css/icofont.min.css')}}">
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

</head>

<body>

  <!-- Page-wrapper-Start -->
  <div class="page_wrapper">

    <!-- Preloader
    <div id="preloader">
      <div id="loader"></div>
    </div> -->

    <div class="full_bg">

      <div class="container">
         <section class="signup_section">

          <div class="top_part">
            <a class="navbar-brand" href="#">
              <img src="{{asset('landing/images/footer_logo.png')}}" alt="image">
            </a>
          </div>

          <!-- Comment Form Section -->
          <div class="signup_form">
            <div class="section_title">
               <p style="font-size: 25px;">
                  Login Your Account
               </p>
            </div>
            {{-- <form action="{{ route('login.post') }}" method="POST">
              @csrf
              <div class="form-group">
                <input type="username" name="username" class="form-control" placeholder="Username">
              </div>
              <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password">
              </div>
              <div class="form-group">
                <button class="btn puprple_btn" type="submit">SIGN IN</button>
              </div>
            </form> --}}

            <form action="{{ route('login.post') }}" method="POST" id="loginForm">
                @csrf
                <div class="form-group">
                    <input type="text" name="username" class="form-control" placeholder="Username" required>
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                </div>

                <!-- Hidden input buat token reCAPTCHA -->
                <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">

                <div class="form-group">
                    <button class="btn puprple_btn" type="submit">SIGN IN</button>
                </div>
            </form>
          </div>
         </section>
      </div>

    </div>



  </div>
  <!-- Page-wrapper-End -->
    <script src="https://www.google.com/recaptcha/api.js?render={{ config('services.recaptcha.site_key') }}"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const form = document.getElementById('loginForm');
        const tokenInput = document.getElementById('g-recaptcha-response');

        form.addEventListener('submit', function (e) {
            e.preventDefault(); // tahan submit sementara
            grecaptcha.ready(function () {
                grecaptcha.execute('{{ config('services.recaptcha.site_key') }}', { action: 'login' })
                .then(function (token) {
                    tokenInput.value = token;
                    form.submit(); // baru submit setelah token terisi
                }).catch(function(err){
                    console.error('grecaptcha error', err);
                    // fallback: submit juga (atau tampilkan pesan error)
                    form.submit();
                });
            });
        });
    });
    </script>



  <!-- Jquery-js-Link -->
  <script src="{{asset('landing/js/jquery.js')}}"></script>
  <!-- bootstrap-js-Link -->
  <script src="{{asset('landing/js/bootstrap.min.js')}}"></script>
  <!-- aos-js-Link -->
  <script src="{{asset('landing/js/aos.js')}}"></script>
  <!-- main-js-Link -->
  <script src="{{asset('landing/js/main.js')}}"></script>

</body>
</html>

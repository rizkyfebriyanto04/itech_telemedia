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
              <!-- <h2> Login Your Account </h2> -->
               <p style="font-size: 25px;">
                  Login Your Account
               </p>
            </div>
            <form action="#">
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Email">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" placeholder="Password">
              </div>
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

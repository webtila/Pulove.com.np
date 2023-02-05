<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
    <meta charset="UTF-8">
    <script src="https://unpkg.com/react@17/umd/react.development.js" crossorigin></script>
    <script src="https://unpkg.com/react-dom@17/umd/react-dom.development.js"crossorigin></script>


    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PRG</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="BreezyCV - Resume / CV / vCard Template">
    <meta name="keywords" content="vcard, resposnive, retina, resume, jquery, css3, bootstrap, Material CV, portfolio">
    <meta name="author" content="lmpixels">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="{{ url('frontend/css/reset.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ url('frontend/css/bootstrap-grid.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ url('frontend/css/animations.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ url('frontend/css/perfect-scrollbar.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ url('frontend/css/owl.carousel.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ url('frontend/css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ url('frontend/css/main.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ url('frontend/css/fonts/fontawesome-free-5.12.1-web/css/all.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ url('frontend/css/fonts/liner-icons-fonts/style.css') }}" type="text/css">


    <script src="{{ url('frontend/js/modernizr.custom.js') }}"></script>
  </head>

  <body>
    <!-- Animated Background -->
    <div class="lm-animated-bg" style="background-image: {{ url('frontend/img/main_bg.png') }};"></div>
    <!-- /Animated Background -->

    {{-- <!-- Loading animation -->
    <div class="preloader">
      <div class="preloader-animation">
        <div class="preloader-spinner">
        </div>
      </div>
    </div>
    <!-- /Loading animation --> --}}

    <div class="page">
      <div class="page-content">

          <header id="site_header" class="header mobile-menu-hide">
            <div class="header-content">
              <div class="header-photo">
                <img src="{{ url('frontend/img/main_photo.jpg') }}" alt="Pulove Raj Giri">
              </div>
              <div class="header-titles">
                <h2>Pulove Raj Giri</h2>
                <h4>Laravel Developer </h4>
                <h4>Web Designer </h4>
                <h4>Web Developer </h4>
                <h4>Graphic Designer </h4>

              </div>
            </div>

            <ul class="main-menu">
              <li class="active">
                <a href="{{url('/')  }}" class="nav-anim">
                  <span class="menu-icon lnr lnr-home"></span>
                  <span class="link-text">Home</span>
                </a>
              </li>
              <li>
                <a href="{{ url('/aboutme') }} "class="nav-anim">
                  <span class="menu-icon lnr lnr-user"></span>
                  <span class="link-text">About Me</span>
                </a>
              </li>

              <li>
                <a href="{{ url('/portfolio') }}" class="nav-anim">
                  <span class="menu-icon lnr lnr-briefcase"></span>
                  <span class="link-text">Portfolio</span>
                </a>
              </li>
              <li>
                <a href="{{ url('blog') }}" class="nav-anim">
                  <span class="menu-icon lnr lnr-book"></span>
                  <span class="link-text">Blog</span>
                </a>
              </li>
              <li>
                <a href="{{ url('/contact') }}" class="nav-anim">
                  <span class="menu-icon lnr lnr-envelope"></span>
                  <span class="link-text">Contact</span>
                </a>
              </li>
            </ul>

            <div class="social-links">
              <ul>
                <li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
              </ul>
            </div>

            <div class="header-buttons">
              <a href="#" target="_blank" class="btn btn-primary">WhatsApp Me</a>
            </div>

            <div class="copyrights">© 2022 All rights reserved.</div>
          </header>

          <!-- Mobile Navigation -->
          <div class="menu-toggle">
            <span></span>
            <span></span>
            <span></span>
          </div>
          <!-- End Mobile Navigation -->

          <!-- Arrows Nav -->
          <div class="lmpixels-arrows-nav">
            <div class="lmpixels-arrow-right"><i class="lnr lnr-chevron-right"></i></div>
            <div class="lmpixels-arrow-left"><i class="lnr lnr-chevron-left"></i></div>
          </div>
          <!-- End Arrows Nav -->

          <div class="content-area">
            <div class="animated-sections">
              <!-- Home Subpage -->
              <section data-id="home" class="animated-section start-page">
                <div class="section-content vcentered">

                    <div class="row">
                      <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="title-block">
                          <h2>Pulove Raj Giri</h2>
                          <div class="owl-carousel text-rotation">
                            <div class="item">
                              <div class="sp-subtitle">Web Designer</div>
                            </div>

                            <div class="item">
                              <div class="sp-subtitle">Frontend-developer</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                </div>
              </section>
              <!-- End of Home Subpage -->

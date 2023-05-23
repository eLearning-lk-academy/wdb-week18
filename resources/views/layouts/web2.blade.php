<!doctype html>
<html lang="en">
  <head>
    @include('layouts.web.partials.head')
    @stack('css')
  </head>
  <body>
    <!-- ========== PRELOADER ========== -->
    <div class="loader loader3">
      <div class="loader-inner">
        <div class="spin">
          <span></span>
          <img src="images/logo.svg" alt="Hotel Himara">
        </div>
      </div>
    </div>
    <!-- ========== MOBILE MENU ========== -->
    <nav id="mobile-menu"></nav>
    <!-- ========== WRAPPER ========== -->
    <div class="wrapper">

      <!-- ========== TOP MENU ========== -->
      @include('layouts.web.partials.topbar')
      <!-- ========== HEADER ========== -->
      @include('layouts.web.partials.header')
      @yield('pageTitle')
      @yield('content')
      
      <!-- ========== FOOTER ========== -->
      @include('layouts.web.partials.footer')
    </div>
    <!-- ========== CONTACT NOTIFICATION ========== -->
    <div id="contact-notification" class="notification fixed"></div>
    <!-- ========== BACK TO TOP ========== -->
    <div class="back-to-top">
      <i class="fa fa-angle-up" aria-hidden="true"></i>
    </div>
    <!-- ========== JAVASCRIPT ========== -->
    <script src="js/jquery.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?key=YOUR_API_KEY"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-select.min.js"></script>
    <script src="js/jquery.mmenu.js"></script>
    <script src="js/jquery.inview.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/owl.carousel.thumbs.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/countup.min.js"></script>
    <script src="js/moment.min.js"></script>
    <script src="js/daterangepicker.js"></script>
    <script src="js/parallax.min.js"></script>
    <script src="js/smoothscroll.min.js"></script>
    <script src="js/instafeed.min.js"></script>
    <script src="js/main.js"></script>
    @stack('scripts')
  </body>
</html>

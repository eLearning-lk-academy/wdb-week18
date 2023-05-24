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
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('http://maps.google.com/maps/api/js?key=YOUR_API_KEY')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('js/jquery.mmenu.js')}}"></script>
    <script src="{{asset('js/jquery.inview.min.js')}}"></script>
    <script src="{{asset('js/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('js/masonry.pkgd.min.js')}}"></script>
    <script src="{{asset('js/wow.min.js')}}"></script>
    <script src="{{asset('js/countup.min.js')}}"></script>
    <script src="{{asset('js/moment.min.js')}}"></script>
    <script src="{{asset('js/daterangepicker.js')}}"></script>
    <script src="{{asset('js/parallax.min.js')}}"></script>
    <script src="{{asset('js/smoothscroll.min.js')}}"></script>
    <script src="{{asset('js/instafeed.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    @stack('scripts')
  </body>
</html>

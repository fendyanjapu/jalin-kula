<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>JALIN KULA</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ url('/img/JK2.png') }}" rel="icon">
  <link href="{{ url('/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ url('/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ url('/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ url('/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ url('/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ url('/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ url('/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ url('/css/style.css') }}" rel="stylesheet">
  <!-- jquery-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <!-- datatable -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
  
  <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>

  <!-- =======================================================
  * Template Name: FlexStart
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <!--<a href="#" class="logo d-flex align-items-center">-->
      <!--  <img src="img/batola.png" alt="JALIN KULA">-->
      <!--</a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li>
            @auth
              <a class="nav-link scrollto active" href="{{ route('dashboard') }}">Dashboard</a></li>
            @else
              <a class="nav-link scrollto active" href="{{ route('login') }}">Login</a></li>
            @endauth
              <a class="nav-link scrollto active" href="{{ route('tutorial') }}">Tutorial</a></li>
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->

    </div>
  </header>
  <!-- End Header -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-house"></i>
              <div>
                <span ></span>
                <a href="{{ route('home') }}">Home</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
              <div>
                <span ></span>
                <a href="{{ route('home.selayang-pandang') }}">Selayang Pandang</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-calendar-check" style="color: #15be56;"></i>
              <div>
                <span ></span>
                <a href="{{ route('jadwal-kegiatan.index') }}">Jadwal kegiatan</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-image" style="color: #bb0852;"></i>
              <div>
                <span ></span>
                <a href="{{ route('home.dokumentasi') }}">Dokumentasi Kegiatan Pimpinan</a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- End Counts Section -->
  <!-- ======= Hero Section ======= -->
    @yield('content')
  <!-- End Hero -->


  

    

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ url('/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ url('/vendor/aos/aos.js') }}"></script>
  <script src="{{ url('/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ url('/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ url('/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ url('/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ url('/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ url('/js/main.js') }}"></script>

</body>

</html>
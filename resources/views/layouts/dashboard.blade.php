<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Jalin Kula - {{ auth()->user()->username }}</title>
  <!-- Favicons -->
  <link href="img/JK2.png" rel="icon">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <link href="/assets2/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets2/css/bootstrap-responsive.min.css" rel="stylesheet">
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
  rel="stylesheet">
  <link href="/assets2/css/font-awesome.css" rel="stylesheet">
  <link href="/assets2/css/style.css" rel="stylesheet">
  <link href="/assets2/css/pages/dashboard.css" rel="stylesheet">
  <!-- <script src="/assets/js/jquery-3.3.1.min.js"></script> -->
  <script src="/assets2/js/jquery-1.7.2.min.js"></script>
  <script src="/assets2/js/jquery.dataTables.min.js"></script>
  <link href="/assets2/css/jquery.dataTables.min.css" rel="stylesheet">
  <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
</head>
<body>

  <div class="subnavbar">
    <div class="subnavbar-inner">
      <div class="container">
        <ul class="mainnav">
          <li><a href="{{ route('dashboard') }}"><i class="icon-home"></i><span>Home</span> </a> </li>
          
          <li><a href="{{ route('undangan-kegiatan.index') }}"><i class="icon-list"></i><span>Jadwal Kegiatan</span> </a> </li>
          <li><a href="{{ route('dokumentasi-kegiatan.index') }}"><i class="icon-picture"></i><span>Dokumentasi Kegiatan</span> </a> </li>
          <li><a href="{{ route('admin') }}"><i class="icon-user"></i><span>Admin</span> </a> </li>
          <li><a href="{{ route('pejabat.index') }}"><i class="icon-group"></i><span>Pejabat</span> </a> </li>
          <li><a href="{{ route('laporan') }}" target="_blank"><i class="icon-file"></i><span>Laporan</span> </a> </li>
          
          <li>
            <form action="{{ route('logout') }}" method="POST">
              @csrf
              <button><i class="icon-signout"></i> Keluar</button>
              
            </form>
          </li>
        </ul>
      </div>
      <!-- /container --> 
    </div>
    <!-- /subnavbar-inner --> 
  </div>
  <!-- /subnavbar -->
  <div class="main" style="min-height: 600px">
    <div class="main-inner">
      <div class="container">
        <div class="row">
          <div class="span12">
            @yield('content')
          </div>
        </div>
        <!-- /row --> 
      </div>
      <!-- /container --> 
    </div>
    <!-- /main-inner --> 
  </div>
  <!-- /main -->
  <div class="footer">
    <div class="footer-inner">
      <div class="container">
        <div class="row">
          <div class="span12">JALIN KULA</a></div>
          <!-- /span12 --> 
        </div>
        <!-- /row --> 
      </div>
      <!-- /container --> 
    </div>
    <!-- /footer-inner --> 
  </div>
  <!-- /footer --> 
<!-- Le javascript
  ================================================== --> 
  <!-- Placed at the end of the document so the pages load faster --> 
  <script src="/assets2/js/excanvas.min.js"></script> 
  <script src="/assets2/js/bootstrap.js"></script>
  <script src="/assets2/js/base.js"></script> 

</body>
</html>

@extends('layouts.main')

@section('content')
<script>
    $(document).ready( function () {
        $('#myTable').DataTable();
    } );
</script>
<style>
    p {text-align: justify;}
    li {text-align: justify;}
    td {vertical-align: top;}
</style>
<!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <!--<ol>-->
        <!--  <li><a href="index.html">Home</a></li>-->
        <!--  <li><a href="blog.html">Blog</a></li>-->
        <!--  <li>Blog Single</li>-->
        <!--</ol>-->
        <h2>Jadwal Kegiatan</h2>

      </div>
    </section><!-- End Breadcrumbs -->

<!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-12 entries">

            <article class="entry entry-single">


              <h2 class="entry-title">
                <a href="#"></a>
              </h2>

              <!--<div class="entry-meta">-->
              <!--  <ul>-->
              <!--    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">John Doe</a></li>-->
              <!--    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>-->
              <!--    <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html">12 Comments</a></li>-->
              <!--  </ul>-->
              <!--</div>-->

              <div class="entry-content">
                <div class="table-responsive">  
                <table id="myTable" class="display">
                    <a href="{{ route('jadwal-kegiatan.create') }}" class="btn btn-primary">Tambah Kegiatan</a>
                    <br><br>
                <thead>
                    <tr>
                        <th style="text-align:center">NO</th>
                        <th style="text-align:center">HARI/TANGGAL</th>
                        <th style="text-align:center">KEGIATAN</th>
                        <th style="text-align:center">WAKTU (WITA)</th>
                        <th style="text-align:center">TEMPAT</th>
                        <th style="text-align:center">DIHADIRI</th>
                        <th style="text-align:center">PAKAIAN</th>
                        <th style="text-align:center">ASAL UNDANGAN</th>
                        <th style="text-align:center">YANG DIUNDANG</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($jadwals as $jadwal)
                    <tr>
                        <td style="text-align:center"><?php echo ++$no ?></td>
                        <td style="text-align:center">
                            <?php 
                                $tgl = date_create($jadwal->tanggal_kegiatan);
                                $hari = date_format($tgl, 'l');
                                switch ($hari) {
                                    case 'Monday':
                                        $h = 'Senin';
                                        break;
                                    case 'Tuesday':
                                        $h = 'Selasa';
                                        break;
                                    case 'Wednesday':
                                        $h = 'Rabu';
                                        break;
                                    case 'Thursday':
                                        $h = 'Kamis';
                                        break;
                                    case 'Friday':
                                        $h = 'Jum`at';
                                        break;
                                    case 'Saturday':
                                        $h = 'Sabtu';
                                        break;
                                    case 'Sunday':
                                        $h = 'Minggu';
                                        break;
                                    default:
                                        $h = '';
                                }
                                $tgl = date_format($tgl, 'j F Y');
                                echo $h."<br>";
                                echo $tgl;
                            ?>
                        </td>
                        
                        <td style="text-align:center"><?php echo $jadwal->nama_kegiatan ?></td>
                        <td style="text-align:center"><?php echo $jadwal->waktu ?></td>
                        <td style="text-align:center"><?php echo $jadwal->tempat_kegiatan ?></td>
                        <td style="text-align:center">
                            <?php
                                if ($jadwal->dihadiri == 1) {
                                    echo 'Bupati';
                                } elseif ($jadwal->dihadiri == 2) {
                                    echo $jadwal->yang_mewakilkan;
                                } else {
                                    
                                }
                                if ($jadwal->tambahan_yang_hadir != '') {
                                    echo '<br>';
                                    echo $jadwal->tambahan_yang_hadir;
                                }
                            ?>
                        </td>
                        <td style="text-align:center"><?php echo $jadwal->pakaian ?></td>
                        <td style="text-align:center"><?php echo $jadwal->dari ?></td>
                        <td style="text-align:center">
                            <a href="" class="btn btn-warning">Lihat</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
                    
                </div>
            </div>

              <div class="entry-footer">
                <!--<i class="bi bi-folder"></i>-->
                <!--<ul class="cats">-->
                <!--  <li><a href="#">Business</a></li>-->
                <!--</ul>-->

                <!--<i class="bi bi-tags"></i>-->
                <!--<ul class="tags">-->
                <!--  <li><a href="#">Creative</a></li>-->
                <!--  <li><a href="#">Tips</a></li>-->
                <!--  <li><a href="#">Marketing</a></li>-->
                <!--</ul>-->
              </div>

            </article><!-- End blog entry -->

            <div class="blog-author d-flex align-items-center">
              <!--<img src="assets/img/blog/blog-author.jpg" class="rounded-circle float-left" alt="">-->
              <!--<div>-->
              <!--  <h4>Jane Smith</h4>-->
              <!--  <div class="social-links">-->
              <!--    <a href="https://twitters.com/#"><i class="bi bi-twitter"></i></a>-->
              <!--    <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>-->
              <!--    <a href="https://instagram.com/#"><i class="biu bi-instagram"></i></a>-->
              <!--  </div>-->
              <!--</div>-->
            </div><!-- End blog author bio -->


        </div>

      </div>
    </section><!-- End Blog Single Section -->
    
@endsection
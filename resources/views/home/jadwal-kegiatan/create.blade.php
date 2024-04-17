@extends('layouts.main')

@section('content')
    <!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
    <div class="container">

      <!--<ol>-->
      <!--  <li><a href="index.html">Home</a></li>-->
      <!--  <li><a href="blog.html">Blog</a></li>-->
      <!--  <li>Blog Single</li>-->
      <!--</ol>-->
      <h2>Tambah Jadwal Kegiatan</h2>

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
                
              <form action="{{ route('jadwal-kegiatan.store') }}" method="post" enctype= multipart/form-data>
                @csrf
                <div class="row gy-4">
  
                  <div class="col-md-12">
                      <label>Nama Kegiatan</label>
                    <input type="text" name="nama_kegiatan" class="form-control" required>
                  </div>
                  
                  <div class="col-md-12">
                      <label>Asal Undangan</label>
                    <input type="text" name="dari" class="form-control" required>
                  </div>
  
                  <div class="col-md-12">
                      <label>Tempat</label>
                    <input type="text" class="form-control" name="tempat_kegiatan" required>
                  </div>
                  
                  <div class="col-md-12">
                      <label>Pakaian</label>
                    <input type="text" class="form-control" name="pakaian" required>
                  </div>
                  
                  <div class="col-md-6">
                    <label>Waktu (wita)</label>
                    <input type="time" class="form-control" name="waktu" required>
                  </div>
                  
                  <div class="col-md-6">
                    <label>Tanggal</label>
                    <input type="date" class="form-control" name="tanggal_kegiatan" required>
                  </div>
  
                  <!--<div class="col-md-12">-->
                  <!--  <textarea class="form-control" name="message" rows="6" placeholder="Keterangan" required></textarea>-->
                  <!--</div>-->
                  
                  <div class="col-md-12">
                    <label>Undangan / Bahan Sambutan Bupati</label><small> (maksimal 4 MB)</small>
                    <input type="file" class="form-control" name="undangan" >
                  </div>
                  
                  <div class="col-md-12">
                      <label>No HP</label>
                    <input type="text" class="form-control" name="no_hp" required>
                  </div>
                  
                  <div class="col-md-12">
                      <label>Yang Diundang:</label>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" onchange="checkAll(this)" name="chk[]" id="flexCheckDefaultAll">
                        <label class="form-check-label" for="flexCheckDefaultAll">
                          Select All
                        </label>
                      </div>
                      @foreach ($pejabats as $pejabat)
                      {!! $pejabat->br !!}
                      @if ($pejabat->group != '')
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" onchange="<?= $pejabat->onchange ?>" name="chk[]" id="<?= $pejabat->class ?>">
                        <label class="form-check-label" for="<?= $pejabat->class ?>">
                          <?= $pejabat->group ?>
                        </label>
                      </div>
                      @endif
                      <div class="form-check">
                        <input class="form-check-input {{ $pejabat->class }}" type="checkbox" name="yang_diundang[]" value="{{ $pejabat->jabatan }}" id="flexCheckDefault{{ ++$i }}">
                        <label class="form-check-label" for="flexCheckDefault{{ $i}}">
                          {{ $pejabat->jabatan }}
                        </label>
                      </div>
                      @endforeach
                  </div>
                  
                  <br>
                  <div class="col-md-6">
                      <button type="submit" class="btn btn-primary">Kirim</button>
                  </div>
                    
                  </div>
  
                </div>
              </form>
              

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
  <script type="text/javascript">
   function checkAll(ele) {
        var checkboxes = document.getElementsByTagName('input');
        if (ele.checked) {
            for (var i = 0; i < checkboxes.length; i++) {
                if (checkboxes[i].type == 'checkbox' ) {
                    checkboxes[i].checked = true;
                }
            }
        } else {
            for (var i = 0; i < checkboxes.length; i++) {
                if (checkboxes[i].type == 'checkbox') {
                    checkboxes[i].checked = false;
                }
            }
        }
    }
    
    function checkGroupForkopimda(ele) {
        if (ele.checked) {
            $('.forkopimda').prop('checked', true);
            
        } else {
            $('.forkopimda').prop('checked', false);
        }
    }
    
    function checkGroupWanita(ele) {
        if (ele.checked) {
            $('.ketua-organisasi-wanita').prop('checked', true);
            
        } else {
            $('.ketua-organisasi-wanita').prop('checked', false);
        }
    }
    
    function checkGroupStafAhli(ele) {
        if (ele.checked) {
            $('.staf-ahli').prop('checked', true);
            
        } else {
            $('.staf-ahli').prop('checked', false);
        }
    }
    
    function checkGroupAsisten(ele) {
        if (ele.checked) {
            $('.asisten').prop('checked', true);
            
        } else {
            $('.asisten').prop('checked', false);
        }
    }
    
    function checkGroupSkpd(ele) {
        if (ele.checked) {
            $('.kepala-skpd').prop('checked', true);
            
        } else {
            $('.kepala-skpd').prop('checked', false);
        }
    }
    
    function checkGroupBagianSetda(ele) {
        if (ele.checked) {
            $('.kabag-setda').prop('checked', true);
            
        } else {
            $('.kabag-setda').prop('checked', false);
        }
    }
    
    function checkGroupBagianDprd(ele) {
        if (ele.checked) {
            $('.kabag-dprd').prop('checked', true);
            
        } else {
            $('.kabag-dprd').prop('checked', false);
        }
    }
    
    function checkGroupCamat(ele) {
        if (ele.checked) {
            $('.camat').prop('checked', true);
            
        } else {
            $('.camat').prop('checked', false);
        }
    }
  </script>
@endsection
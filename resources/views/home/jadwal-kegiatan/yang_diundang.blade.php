@extends('layouts.main')

@section('content')

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
        <h2>Yang Diundang</h2>

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

              <div class="entry-content">
            
                <p>{!! $jadwalKegiatan->yang_diundang !!}</p>

                <br>
                <a href="#" class="btn btn-danger" onClick="self.history.back()">Kembali</a>
                <br>
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
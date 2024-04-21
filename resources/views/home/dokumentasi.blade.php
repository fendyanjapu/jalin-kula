@extends('layouts.main')

@section('content')
<style>
    p {text-align: justify;}
    li {text-align: justify;}
</style>
<!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <!--<ol>-->
        <!--  <li><a href="index.html">Home</a></li>-->
        <!--  <li><a href="blog.html">Blog</a></li>-->
        <!--  <li>Blog Single</li>-->
        <!--</ol>-->
        <h2>Dokumentasi Kegiatan Pimpinan</h2>

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
                  
                  <!-- ======= Values Section ======= -->
                    <section id="values" class="values">
                
                      <div class="container" data-aos="fade-up">
                
                        <!--<header class="section-header">-->
                        <!--  <h2>Our Values</h2>-->
                        <!--  <p>Odit est perspiciatis laborum et dicta</p>-->
                        <!--</header>-->
                
                        <div class="row">
                            @forelse ($dokumentasis as $dokumentasi)
                                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                                    <div class="box">
                                    <img src="{{ asset('storage/' . $dokumentasi->foto) }}" class="img-fluid" alt="">
                                    <h3>{{ $dokumentasi->nama_kegiatan }}</h3>
                                    </div>
                                </div> 
                            @empty
                            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                                <div class="box">
                                  <h3></h3>
                                </div>
                              </div>
                            @endforelse
                        </div>
                
                      </div>
                
                    </section><!-- End Values Section -->

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

            <!--<div class="blog-author d-flex align-items-center">-->
            <!--  <img src="assets/img/blog/blog-author.jpg" class="rounded-circle float-left" alt="">-->
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
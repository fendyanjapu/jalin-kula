@extends('layouts.dashboard')

@section('content')
    <!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
    <div class="container">

      <!--<ol>-->
      <!--  <li><a href="index.html">Home</a></li>-->
      <!--  <li><a href="blog.html">Blog</a></li>-->
      <!--  <li>Blog Single</li>-->
      <!--</ol>-->
      <h2>Tambah Dokumentasi Kegiatan Pimpinan</h2>
      <br>
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
                
              <form action="{{ route('dokumentasi-kegiatan.store') }}" method="post" enctype= multipart/form-data>
                @csrf
                <div class="row gy-8">
  
                  <div class="col-md-12">
                    <input type="text" name="nama_kegiatan" class="form-control" placeholder="Nama Kegiatan" required>
                  </div>
                  <div class="col-md-12">
                    <label>FOTO</label>
                    <img class="img-preview">
                    <input type="file" class="form-control" name="foto" id="image" required onchange="previewImage()">
                    @error('foto')
                        <div class="invalid-feedback" style="color: red">
                            {{ $message }}
                        </div>
                    @enderror
                  </div>
                      <br>
                      <div class="col-md-6">
                          <button type="submit" class="btn btn-primary">Simpan</button>
                          <a href="{{ route('dokumentasi-kegiatan.index') }}" class="btn btn-danger">Batal</a>
                      </div>
                    
                  </div>
  
                </div>
              </form>
              

            </div>

            <div class="entry-footer">
              
            </div>

          </article><!-- End blog entry -->

          <div class="blog-author d-flex align-items-center">
           
          </div><!-- End blog author bio -->


      </div>

    </div>
  </section><!-- End Blog Single Section -->
  <script>
    function previewImage() {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');
    
        imgPreview.style.display = 'block';
        imgPreview.style.height = "200px";
    
        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);
    
        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }

    }
  </script>
@endsection
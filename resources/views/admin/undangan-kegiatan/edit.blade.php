@extends('layouts.dashboard')

@section('content')
    
<div class="container">
    <div class="row">
      <div class="col-sm-12 col-sm-offset-3">
        <h1 class="module-title font-alt mb-0">Edit Jadwal Kegiatan</h1>
      </div>
    </div>
  </div>
</section>
<br><br>
    <div class="row">
      <div class="col-sm-12 col-sm-offset-2">
        <hr class="divider-w mt-10 mb-20">
        <form class="form" enctype="multipart/form-data" role="form" method="post" action="{{ route('undangan-kegiatan.update', ['undangan_kegiatan' => $jadwalKegiatan]) }}">
          @csrf
          @method('put')  
          <table>
              <tr>
                  <td align="right" style="padding: 2px"><h4>Nama Kegiatan</h4></td>
                  <td class="col-md-10" style="padding: 2px">
                      <input class="form-control" name="nama_kegiatan" value="{{ $jadwalKegiatan->nama_kegiatan }}">
                  </td>
                </tr>
                <tr>
                  <td align="right" style="padding: 2px"><h4>Asal Undangan</h4></td>
                  <td class="col-md-10" style="padding: 2px"><input class="form-control" name="dari" value="{{ $jadwalKegiatan->dari }}"></td>
                </tr>
                <tr>
                  <td align="right" style="padding: 2px"><h4>Tempat Kegiatan</h4></td>
                  <td class="col-md-10" style="padding: 2px"><input class="form-control" name="tempat_kegiatan" value="{{ $jadwalKegiatan->tempat_kegiatan }}"></td>
                </tr>
                <tr>
                  <td align="right" style="padding: 2px"><h4>Waktu</h4></td>
                  <td class="col-md-10" style="padding: 2px"><input class="form-control" name="waktu" value="{{ $jadwalKegiatan->waktu }}"></td>
                </tr>
                <tr>
                  <td align="right" style="padding: 2px"><h4>Tanggal Kegiatan</h4></td>
                  <td class="col-md-10" style="padding: 2px"><input type="date" class="form-control" name="tanggal_kegiatan" value="{{ $jadwalKegiatan->tanggal_kegiatan }}"></td>
                </tr>
                <tr>
                  <td align="right" style="padding: 2px"><h4>Pakaian</h4></td>
                  <td class="col-md-10" style="padding: 2px"><input type="text" class="form-control" name="pakaian" value="{{ $jadwalKegiatan->pakaian }}"></td>
                </tr>
            
            <td style="padding: 2px">
              <td>
                <input class="btn btn-primary" type="submit" value="Simpan">
                <a href="#" class="btn btn-danger" onclick="self.history.back()">Batal</a>
              </td>
            </td>
          </tr>
        </table>
      </form>
    </div>
  </div>
@endsection
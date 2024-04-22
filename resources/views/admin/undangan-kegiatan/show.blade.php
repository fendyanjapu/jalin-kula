@extends('layouts.dashboard')

@section('content')
    
<div class="container">
  <div class="row">
    <div class="col-sm-12 col-sm-offset-3">
      <h1 class="module-title font-alt mb-0">Verifikasi Undangan Kegiatan</h1>
    </div>
  </div>
</div>
</section>
<br><br>
  <div class="row">
    <div class="col-sm-12 col-sm-offset-2">
      <hr class="divider-w mt-10 mb-20">
      <form class="form" enctype="multipart/form-data" role="form" method="post" action="{{ route('verifikasi', ['undangan_kegiatan' => $jadwalKegiatan]) }}">
        @csrf
        @method('put')
        <table>
          
            <tr>
                <td align="right" style="padding: 2px"><h4>Nama Kegiatan</h4></td>
                <td class="col-md-10" style="padding: 2px">
                    <input class="form-control" name="nama_kegiatan" value="<?= $jadwalKegiatan->nama_kegiatan ?>" readonly>
                </td>
              </tr>
              <tr>
                <td align="right" style="padding: 2px"><h4>Asal Undangan</h4></td>
                <td class="col-md-10" style="padding: 2px"><input class="form-control" name="dari" value="<?= $jadwalKegiatan->dari ?>" readonly></td>
              </tr>
              <tr>
                <td align="right" style="padding: 2px"><h4>Tempat Kegiatan</h4></td>
                <td class="col-md-10" style="padding: 2px"><input class="form-control" name="tempat_kegiatan" value="<?= $jadwalKegiatan->tempat_kegiatan ?>" readonly></td>
              </tr>
              <tr>
                <td align="right" style="padding: 2px"><h4>Tanggal Kegiatan</h4></td>
                <td class="col-md-10" style="padding: 2px"><input type="date" class="form-control" name="tanggal_kegiatan" value="<?= $jadwalKegiatan->tanggal_kegiatan ?>" readonly></td>
              </tr>
              <tr>
                <td align="right" style="padding: 2px"><h4>Undangan Kegiatan</h4></td>
                <td class="col-md-10" style="padding: 2px">
                    <a href="{{ asset('storage/' . $jadwalKegiatan->undangan) }}" target="_blank" class="btn btn-info">Lihat</a>
                </td>
              </tr>
              <tr>
                <td align="right" style="padding: 2px; vertical-align:top"><h4>Yang Diundang</h4></td>
                <td class="col-md-10" style="padding: 2px">
                    <?= $jadwalKegiatan->yang_diundang ?>
                </td>
              </tr>
              <tr>
                <td align="right" style="padding: 2px"><h4>Verifikasi</h4></td>
                <td class="col-md-10" style="padding: 2px">
                  <select class="form-control" name="verifikasi" required>
                      <option value=""></option>
                      <option value="1">Diteruskan ke Bupati</option>
                      <option value="3">Dihadiri</option>
                      <option value="2">Ditolak</option>
                  </select>
                </td>
              </tr>
          
          
          <td style="padding: 2px">
            <td>
              <input class="btn btn-primary" type="submit" value="Simpan">
              <button class="btn btn-danger" onclick="{{ route('undangan-kegiatan.index') }}">Cancel</button>
            </td>
          </td>
        </tr>
      </table>
    </form>
  </div>
</div>
@endsection
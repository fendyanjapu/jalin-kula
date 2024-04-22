@extends('layouts.dashboard')

@section('content')

    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-sm-offset-3">
          <h1 class="module-title font-alt mb-0">Tambahan Yang Menghadiri Undangan</h1>
        </div>
      </div>
    </div>
  </section>
  <br><br>
      <div class="row">
        <div class="col-sm-12 col-sm-offset-2">
          <hr class="divider-w mt-10 mb-20">
          <form class="form" role="form" method="post" action="{{ route('update-yg-hadir', ['undangan_kegiatan' => $jadwalKegiatan]) }}">
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
                    <td align="right" style="padding: 2px"><h4>Dihadiri</h4></td>
                    <td class="col-md-10" style="padding: 2px"><input class="form-control" name="dihadiri" value="<?= $jadwalKegiatan->dihadiri == 1 ? 'Bupati' : $jadwalKegiatan->yang_mewakilkan ?>" readonly></td>
                  </tr>
                  <tr>
                    <td align="right" style="padding: 2px; vertical-align: top"><h4>Tambah yang menghadiri</h4></td>
                    <td>
                         <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="tambahan_yang_hadir[]" value="Forkopimda" id="flexCheckDefault1">
                          <label class="form-check-label" for="flexCheckDefault1">
                            Forkopimda
                          </label>
                        </div>  
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="tambahan_yang_hadir[]" value="Sekda" id="flexCheckDefault2">
                          <label class="form-check-label" for="flexCheckDefault2">
                            Sekda
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="tambahan_yang_hadir[]" value="Ketua TP. PKK" id="flexCheckDefault3">
                          <label class="form-check-label" for="flexCheckDefault3">
                            Ketua TP. PKK
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="tambahan_yang_hadir[]" value="Ketua DWP" id="flexCheckDefault4">
                          <label class="form-check-label" for="flexCheckDefault4">
                            Ketua DWP
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="tambahan_yang_hadir[]" value="Ketua Organisasi Wanita" id="flexCheckDefault5">
                          <label class="form-check-label" for="flexCheckDefault5">
                            Ketua Organisasi Wanita
                          </label>
                        </div>
                    </td>
                    
                  </tr>
              
              <td style="padding: 2px">
                <td>
                    <button class="btn btn-primary">Simpan</button>
                    <a href="#" class="btn btn-danger" onclick="self.history.back()">Batal</a>
                </td>
              </td>
            </tr>
          </table>
        </form>
      </div>
    </div>
@endsection
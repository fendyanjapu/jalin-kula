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
      <form class="form" enctype="multipart/form-data" role="form" method="post" action="{{ route('dihadiri', ['undangan_kegiatan' => $jadwalKegiatan]) }}">
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
                  @if ($jadwalKegiatan->undangan)
                    <a href="{{ asset('storage/' . $jadwalKegiatan->undangan) }}" target="_blank" class="btn btn-info">Lihat</a>
                  @endif
                    
                </td>
              </tr>
              <?php if (auth()->user()->username == 'bupati'): ?>
              <tr>
                <td align="right" style="padding: 2px"><h4>Hadiri</h4></td>
                <td class="col-md-10" style="padding: 2px">
                  <select class="form-control" name="dihadiri" required>
                      <option value=""></option>
                      <option value="1" <?= $jadwalKegiatan->dihadiri == '1' ? 'selected' : '' ?>>Dihadiri</option>
                      <option value="2" <?= $jadwalKegiatan->dihadiri == '2' ? 'selected' : '' ?>>Diwakilkan</option>
                  </select>
                </td>
              </tr>
              <?php endif ?>
              <tr>
                <td align="right" style="padding: 2px"><h4>Yang Mewakilkan (isi apabila diwakilkan)</h4></td>
                <td class="col-md-10" style="padding: 2px">
                    <select class="form-control" name="yang_mewakilkan">
                        <option value=""></option>
                        @foreach ($pejabats as $pejabat)
                          <option value="<?= $pejabat->jabatan ?>" <?= $jadwalKegiatan->yang_mewakilkan == $pejabat->jabatan ? 'selected' : '' ?>><?= $pejabat->jabatan." | ".$pejabat->nama_pejabat ?></option>
                        @endforeach
                    </select>
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
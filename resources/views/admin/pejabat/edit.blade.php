@extends('layouts.dashboard')

@section('content')
    
<div class="container">
  <div class="row">
    <div class="col-sm-6 col-sm-offset-3">
      <h1 class="module-title font-alt mb-0">Edit Pejabat</h1>
    </div>
  </div>
</div>
</section>
<br><br><br><br>
<section class="module">
<div class="container">
  <div class="row">
    <div class="col-sm-8 col-sm-offset-2">
      <hr class="divider-w mt-10 mb-20">
      <form class="form" enctype="multipart/form-data" role="form" method="post" action="{{ route('pejabat.update', ['pejabat' => $pejabat]) }}">
        @csrf
        @method('put')
        <table>
          <tr>
              <tr>
                <td align="right" style="padding: 2px"><h4>Nama</h4></td>
                <td class="col-md-10" style="padding: 2px"><input class="form-control" name="nama_pejabat" value="{{ $pejabat->nama_pejabat }}" required></td>
              </tr>
              <tr>
                <td align="right" style="padding: 2px"><h4>Jabatan</h4></td>
                <td class="col-md-10" style="padding: 2px"><input type="text" class="form-control" name="jabatan" value="{{ $pejabat->jabatan }}" required></td>
              </tr>
              <tr>
                <td align="right" style="padding: 2px"><h4>No WA</h4></td>
                <td class="col-md-10" style="padding: 2px">
                  <input type="text" class="form-control" name="no_wa" value="{{ $pejabat->no_wa }}" onkeypress="return event.charCode >= 48 && event.charCode <= 57" required>
                </td>
              </tr>
          
          <td style="padding: 2px">
            <td>
              <input class="btn btn-primary" type="submit" value="Simpan">
              <a href="{{ route('pejabat.index') }}" class="btn btn-danger">Batal</a>
            </td>
          </td>
        </tr>
      </table>
    </form>
  </div>
</div>
</div>
</section>
@endsection
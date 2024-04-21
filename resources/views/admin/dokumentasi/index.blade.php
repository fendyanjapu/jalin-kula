@extends('layouts.dashboard')

@section('content')
    
<script>
    $(document).ready( function () {
        $('#tabel').DataTable();
    } );
</script>
@if (session()->has('success'))
	<div class="alert alert-success" role="alert">
		{{ session('success') }}
	</div>
@endif
<div class="row">
    <div class="col-md-12">
       <h3>Dokumentasi Kegiatan Pimpinan</h3>    
   </div>
</div>
<!-- /. ROW  -->
<hr />
<a href="{{ route('dokumentasi-kegiatan.create') }}" class="btn btn-primary">Tambah</a>
<div class="panel-body" style="margin-top: 10px">
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover" id="tabel">
            <thead>
                <tr>
                    <th style="text-align:center">NO</th>
                    <th style="text-align:center">NAMA KEGIATAN</th>
                    <th style="text-align:center">FOTO</th>
                    <th style="text-align:center">#</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dokumentasi_kegiatans as $dokumentasi_kegiatan)
                <tr>
                    <td style="text-align:center">{{ $loop->iteration }}</td>
                    
                    <td style="text-align:center">{{ $dokumentasi_kegiatan->nama_kegiatan }}</td>
                    <td style="text-align:center"><img src="{{ asset('storage/' . $dokumentasi_kegiatan->foto) }}" width="100px" height="100px"></td>
                    <td style="text-align:center">
                        <form action="{{ route('dokumentasi-kegiatan.destroy', ['dokumentasi_kegiatan' => $dokumentasi_kegiatan]) }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger" onclick="return confirm('Hapus data?')">Hapus</button>
                        </form>
                    </td>
                </tr>  
                @endforeach
                
            </tbody>
        </table>
    </div>	  	
</div>
@endsection
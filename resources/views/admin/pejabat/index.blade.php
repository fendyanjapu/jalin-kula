@extends('layouts.dashboard')

@section('content')
<script>
    $(document).ready( function () {
        $('#tabel').DataTable({
            dom: 'Bflrtip',
            buttons: [
                {
                    extend: 'excelHtml5',
                    title: 'Pejabat',
                    exportOptions: {
                        columns: [ 0, 1, 2, 3]
                    }
                },
                {
                    extend: 'pdfHtml5',
                    title: 'Pejabat',
                    exportOptions: {
                        columns: [ 0, 1, 2, 3]
                    }
                }
            ]
        });
    } );
</script>
@if (session()->has('success'))
	<div class="alert alert-success" role="alert">
		{{ session('success') }}
	</div>
@endif
<div class="row">
    <div class="col-md-12">
       <h3>Pejabat</h3>    
   </div>
</div>
<!-- /. ROW  -->
<hr />
<a href="{{ route('pejabat.create') }}" class="btn btn-primary">Tambah</a>
<div class="panel-body" style="margin-top: 10px">
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover" id="tabel">
            <thead>
                <tr>
                    <th style="text-align:center">No</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>No WA</th>
                    <th style="text-align:center">#</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pejabats as $pejabat)
                <tr>
                    <td style="text-align:center">{{ ++$no }}</td>
                    <td>{{ $pejabat->nama_pejabat }}</td>
                    <td>{{ $pejabat->jabatan }}</td>
                    <td>{{ $pejabat->no_wa }}</td>
                    <td style="text-align:center">
                        <a href="{{ route('pejabat.edit', ['pejabat' => $pejabat]) }}" class="btn btn-success">Edit</a>
                        <form action="{{ route('pejabat.destroy', ['pejabat' => $pejabat]) }}" method="post">
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
                    <!--End Advanced Tables -->
@endsection
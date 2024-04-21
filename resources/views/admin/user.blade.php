@extends('layouts.dashboard')

@section('content')
<script>
    $(document).ready( function () {
        $('#tabel').DataTable({
            dom: 'Bflrtip',
            buttons: [
                {
                    extend: 'excelHtml5',
                    title: 'Admin',
                },
                {
                    extend: 'pdfHtml5',
                    title: 'Admin',
                    // exportOptions: {
                    //     columns: [ 0, 1, 2, 3, 4 ]
                    // }
                }
            ]
        });
    } );
</script>
<div class="row">
    <div class="col-md-12">
       <h3>Admin</h3>    
   </div>
</div>
<!-- /. ROW  -->
<hr />
<!--<a href="#" class="btn btn-primary">Tambah</a>-->
<div class="panel-body" style="margin-top: 10px">
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover" id="tabel">
            <thead>
                <tr>
                    <th style="text-align:center">No</th>
                    <th>Username</th>
                    <th>Keterangan</th>
                    <!--<th style="text-align:center">#</th>-->
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td style="text-align:center">{{ ++$no }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->ket }}</td>
                    <!--<td style="text-align:center">-->
                    <!--    <a href="#" class="btn btn-success">Edit</a>-->
                    <!--    <a href="#" class="btn btn-danger">Hapus</a>-->
                    <!--</td>-->
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>	  	
</div>
@endsection
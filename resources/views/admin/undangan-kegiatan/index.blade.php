@extends('layouts.dashboard')
@section('content')
<script>
    $(document).ready( function () {
        // var pageNo = <?= $pageNo ?>;
        var table = $('#tabel').DataTable({
            dom: 'Bflrtip',
            buttons: [
                {
                    extend: 'excelHtml5',
                    title: 'Jadwal Kegiatan',
                    exportOptions: {
                        columns: [ 0, 1, 2, 3, 4, 5, 6, 7 ]
                    }
                },
                {
                    extend: 'pdfHtml5',
                    title: 'Jadwal Kegiatan',
                    orientation: 'landscape',
                    exportOptions: {
                        columns: [ 0, 1, 2, 3, 4, 5, 6, 7 ]
                    }
                }
            ],
            // drawCallback: function (settings) {
            //     // Output the data for the visible rows to the browser's console
            //     var api = this.api();
 
            //     // Output the data for the visible rows to the browser's console
            //     var page = api.rows({ page: 'current' }).page();
            //     // console.log(page);
            //     $('#page').val(page);
                
            // }
        });
        // table.page(pageNo).draw('page');
    } );
</script>
<div class="row">
    <div class="col-md-12">
       <h3>Jadwal Kegiatan</h3>    
   </div>
</div>
<!-- /. ROW  -->
<hr />
@if (session()->has('success'))
    <div class="alert alert-success" role="alert">
    {{ session('success') }}
    </div>
@endif
<input type="hidden" name="page" id="page" >
<div class="panel-body" style="margin-top: 10px">
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover" id="tabel">
            <thead>
                <tr>
                    <th style="text-align:center">NO</th>
                    <th style="text-align:center">HARI/TANGGAL</th>
                    <th style="text-align:center">KEGIATAN</th>
                    <th style="text-align:center">WAKTU (WITA)</th>
                    <th style="text-align:center">TEMPAT</th>
                    <th style="text-align:center">DIHADIRI</th>
                    <th style="text-align:center">PAKAIAN</th>
                    <th style="text-align:center">ASAL UNDANGAN</th>
                    <th>UNDANGAN</th>
                    <?php if (auth()->user()->username == 'admin'): ?>
                        <th style="text-align:center">NO HP</th>
                        <th style="text-align:center">TAMBAH YANG MENGHADIRI</th>
                    <?php endif ?>
                    <th style="text-align:center">#</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($jadwals as $jadwal)
                <tr>
                    <td style="text-align:center">{{ $loop->iteration }}</td>
                    <td style="text-align:center">
                        <?php 
                            $tgl = date_create($jadwal->tanggal_kegiatan);
                            $hari = date_format($tgl, 'l');
                            switch ($hari) {
                                case 'Monday':
                                    $h = 'Senin';
                                    break;
                                case 'Tuesday':
                                    $h = 'Selasa';
                                    break;
                                case 'Wednesday':
                                    $h = 'Rabu';
                                    break;
                                case 'Thursday':
                                    $h = 'Kamis';
                                    break;
                                case 'Friday':
                                    $h = 'Jum`at';
                                    break;
                                case 'Saturday':
                                    $h = 'Sabtu';
                                    break;
                                case 'Sunday':
                                    $h = 'Minggu';
                                    break;
                                default:
                                    $h = '';
                            }
                            $tgl = date_format($tgl, 'j F Y');
                            echo $h."<br>";
                            echo $tgl;
                        ?>
                    </td>
                    
                    <td style="text-align:center"><?php echo $jadwal->nama_kegiatan ?></td>
                    <td style="text-align:center"><?php echo $jadwal->waktu ?></td>
                    <td style="text-align:center"><?php echo $jadwal->tempat_kegiatan ?></td>
                    <td style="text-align:center">
                        <?php
                            if ($jadwal->dihadiri == 1) {
                                echo 'Bupati';
                            } elseif ($jadwal->dihadiri == 2) {
                                echo $jadwal->yang_mewakilkan;
                            } else {
                                
                            }
                            if ($jadwal->tambahan_yang_hadir != '') {
                                echo '<br>';
                                echo $jadwal->tambahan_yang_hadir;
                            }
                        ?>
                    </td>
                    <td style="text-align:center"><?php echo $jadwal->pakaian ?></td>
                    <td style="text-align:center"><?php echo $jadwal->dari ?></td>
                    <td>
                        <?php if ($jadwal->undangan): ?>
                            <a href="<?php echo 'storage/'.$jadwal->undangan ?>" target="_blank">Lihat</a>
                        <?php endif ?>
                    </td>
                    <?php if (auth()->user()->username == 'admin'): ?>
                        <td style="text-align:center"><?php echo $jadwal->no_hp ?></td>
                        <td style="text-align:center">
                            <a href="{{ route('tambah-yg-hadir', ['undangan_kegiatan' => $jadwal]) }}" class="btn btn-primary">Tambahkan</a>
                        </td>
                    <?php endif ?>
                    <td style="text-align:center">
                        <div class="d-flex p-2">
                            <?php if (auth()->user()->username == 'admin'): ?>
                            <?php if ($jadwal->verifikasi == 0): ?>
                                <a href="{{ route('undangan-kegiatan.show', ['undangan_kegiatan' => $jadwal]) }}" class="btn btn-success">Verifikasi</a>
                            <?php endif ?>
                        <?php elseif (auth()->user()->username == 'bupati'): ?>
                            <a href="{{ route('hadiri-undangan', ['undangan_kegiatan' => $jadwal]) }}" class="btn btn-success">Hadiri/Wakilkan</a>
                        <?php elseif (auth()->user()->username == 'sekda'): ?>
                            <?php if ($jadwal->yang_mewakilkan == 'Sekda'): ?>
                                <a href="{{ route('hadiri-undangan', ['undangan_kegiatan' => $jadwal]) }}" class="btn btn-success">Wakilkan</a>
                            <?php endif ?>
                        <?php endif ?>
                        <a href="{{ route('undangan-kegiatan.edit', ['undangan_kegiatan' => $jadwal]) }}" class="btn btn-default">Edit</a>
                        <form action="{{ route('undangan-kegiatan.destroy', $jadwal->id) }}" method="post">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger" onclick="return confirm('Hapus data?')">Hapus</button>
                        </form>
                        
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>	  	
</div>
                    <!--End Advanced Tables -->
                    <script>
                        function verifikasi(id) {
                            let redirect = "";
                            let pages = $('#page').val();
                            window.location.replace(redirect+id+'/'+pages);
                        }
                    </script>
@endsection
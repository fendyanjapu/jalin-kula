<!DOCTYPE html>
<html>
<head>
	<title>Laporan</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h4>Laporan Rekap Kegiatan {{ $tgl }}</h4>
	</center>
 
	<table class='table table-bordered'>
		<thead>
			<tr>
				<th style="text-align: center">No</th>
				<th style="text-align: center">Jabatan</th>
				<th style="text-align: center">Kegiatan Dihadiri</th>
			</tr>
		</thead>
		<tbody>
			@foreach($pejabats as $pejabat)
            @php
                if ($pejabat->id == 1) {
                    $kegiatan = App\Models\JadwalKegiatan::where('dihadiri', 1)
                        ->whereMonth('tanggal_kegiatan', '03')
                        ->whereYear('tanggal_kegiatan', $tahun)
                        ->get()->count();
                } else {
                    $kegiatan = App\Models\JadwalKegiatan::where('yang_mewakilkan', $pejabat->jabatan)
                        ->whereMonth('tanggal_kegiatan', '03')
                        ->whereYear('tanggal_kegiatan', $tahun)
                        ->get()->count();
                }
                
            @endphp
			<tr>
				@if ($kegiatan > 0)
                    <td style="text-align: center">{{ $loop->iteration }}</td>
                    <td>{{$pejabat->nama_pejabat}}</td>
                    <td style="text-align: center">{{ $kegiatan }}</td>        
                @endif
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>
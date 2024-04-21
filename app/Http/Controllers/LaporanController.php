<?php

namespace App\Http\Controllers;

use App\Models\Pejabat;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class LaporanController extends Controller
{
    public function index()
    {
        $pejabat = Pejabat::all();
        $bulan = date('m');
        $tahun = date('Y');
        $tgl = $this->bulan($bulan) . ' ' . $tahun;
        $pdf = Pdf::loadView('admin.laporan_pdf', [
            'tgl'=> $tgl,
            'bulan'=> $bulan,
            'tahun'=> $tahun,
            'pejabats'=> $pejabat
        ]);
        return $pdf->stream();
    }

    private function bulan($b) 
	{
	    switch ($b) {
          case '01':
            $bulan = 'Januari';
            break;
          case '02':
            $bulan = 'Februari';
            break;
          case '03':
            $bulan = 'Maret';
            break;
          case '04':
            $bulan = 'April';
            break;
          case '05':
            $bulan = 'Mei';
            break;
          case '06':
            $bulan = 'Juni';
            break;
          case '07':
            $bulan = 'Juli';
            break;
          case '08':
            $bulan = 'Agustus';
            break;
          case '09':
            $bulan = 'September';
            break;
          case '10':
            $bulan = 'Oktober';
            break;
          case '11':
            $bulan = 'November';
            break;
          case '12':
            $bulan = 'Desember';
            break;
          default:
            //code block
        }
        return $bulan;
	}
}

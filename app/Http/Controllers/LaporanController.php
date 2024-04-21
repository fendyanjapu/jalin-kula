<?php

namespace App\Http\Controllers;

use App\Models\Pejabat;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class LaporanController extends Controller
{
    public function index()
    {
        $pdf = Pdf::loadView('admin.laporan_pdf');
        return $pdf->stream();
    }
}

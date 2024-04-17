<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalKegiatan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_kegiatan',
        'dari',
        'tempat_kegiatan',
        'tanggal_kegiatan',
        'waktu',
        'undangan',
        'verifikasi',
        'tanggal_verifikasi',
        'dihadiri',
        'yang_mewakilkan',
        'tambahan_yang_hadir',
        'pakaian',
        'no_hp',
        'yang_diundang',
    ];
}

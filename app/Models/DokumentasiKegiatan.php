<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DokumentasiKegiatan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_kegiatan',
        'foto'
    ];
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('jadwal_kegiatans', function (Blueprint $table) {
            $table->id();

            $table->string('nama_kegiatan');
            $table->string('dari');
            $table->string('tempat_kegiatan');
            $table->date('tanggal_kegiatan');
            $table->string('waktu');
            $table->string('undangan')->nullable();
            $table->string('verifikasi');
            $table->date('tanggal_verifikasi')->nullable();
            $table->string('dihadiri')->nullable();
            $table->string('yang_mewakilkan')->nullable();
            $table->string('tambahan_yang_hadir')->nullable();
            $table->string('pakaian');
            $table->string('no_hp');
            $table->text('yang_diundang');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal_kegiatans');
    }
};

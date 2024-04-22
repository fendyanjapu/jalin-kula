<?php

use App\Http\Controllers\LaporanController;
use App\Models\DokumentasiKegiatan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PejabatController;
use App\Http\Controllers\UndanganController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JadwalKegiatanController;
use App\Http\Controllers\DokumentasiKegiatanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home.index');
})->name('home');

Route::get('dashboard', function () {
    return view('admin.home');
})->name('dashboard')->middleware('auth');

Route::get('admin', function () {
    return view('admin.user', [
        'no'=> 0,
        'users'=> \App\Models\User::orderBy('level','desc')->get()
    ]);
})->name('admin')->middleware('auth');

Route::get('login', [LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('login', [LoginController::class,'login'])->name('signin');
Route::post('logout', [LoginController::class,'logout'])->name('logout');

Route::get('tutorial', function () {
    return view('home.tutorial');
})->name('tutorial');

Route::get('selayang-pandang', function () {
    return view('home.selayang-pandang');
})->name('home.selayang-pandang');

Route::get('dokumentasi-kegiatan-pimpinan', function () {
    return view('home.dokumentasi', [
        'dokumentasis'=> DokumentasiKegiatan::all(),
    ]);
})->name('home.dokumentasi');

Route::get('laporan', [LaporanController::class, 'index'] )->name('laporan')->middleware('auth');
Route::get('undangan-kegiatan/hadiri-undangan/{undangan_kegiatan}', [UndanganController::class, 'hadiri_undangan'] )->name('hadiri-undangan')->middleware('auth');
Route::get('undangan-kegiatan/tambah-yg-hadir/{undangan_kegiatan}', [UndanganController::class, 'tambah_yg_hadir'] )->name('tambah-yg-hadir')->middleware('auth');

Route::resource('jadwal-kegiatan', JadwalKegiatanController::class)->except('edit','update','destroy');
Route::resource('undangan-kegiatan', UndanganController::class)->except('create','store')->middleware('auth');
Route::resource('pejabat', PejabatController::class)->except('show')->middleware('auth');
Route::resource('dokumentasi-kegiatan', DokumentasiKegiatanController::class)->except('edit','update','show')->middleware('auth');

Route::put('undangan-kegiatan/verifikasi/{undangan_kegiatan}', [UndanganController::class,'verifikasi'])->name('verifikasi')->middleware('auth');
Route::put('undangan-kegiatan/dihadiri/{undangan_kegiatan}', [UndanganController::class,'dihadiri'])->name('dihadiri')->middleware('auth');
Route::put('undangan-kegiatan/update-yg-hadir/{undangan_kegiatan}', [UndanganController::class,'update_yg_hadir'])->name('update-yg-hadir')->middleware('auth');

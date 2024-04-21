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

Route::resource('jadwal-kegiatan', JadwalKegiatanController::class)->except('edit','update','destroy')->middleware('auth');
Route::resource('undangan-kegiatan', UndanganController::class)->except('create','store','show')->middleware('auth');
Route::resource('pejabat', PejabatController::class)->except('show')->middleware('auth');
Route::resource('dokumentasi-kegiatan', DokumentasiKegiatanController::class)->except('edit','update','show')->middleware('auth');

Route::get('undangan-kegiatan/verifikasi', [UndanganController::class,'verifikasi'])->name('verifikasi')->middleware('auth');

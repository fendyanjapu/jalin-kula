<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JadwalKegiatanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UndanganController;
use App\Models\DokumentasiKegiatan;
use Illuminate\Support\Facades\Route;

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
})->name('dashboard');

Route::get('login', [LoginController::class,'index'])->name('login');
Route::post('login', [LoginController::class,'login'])->name('signin');

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

Route::resource('jadwal-kegiatan', JadwalKegiatanController::class)->except('edit','update','destroy');
Route::resource('undangan-kegiatan', UndanganController::class)->except('create','store');

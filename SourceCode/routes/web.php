<?php
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfileControllerAdmin;
use App\Http\Controllers\ProfileControllerStaffBiasa;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CetakLaporanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataPemasukanController;
use App\Http\Controllers\DataPengeluaranController;
use App\Http\Controllers\LaporanController;

use App\Http\Controllers\CetakLaporanControllerAdmin;
use App\Http\Controllers\DashboardControllerAdmin;
use App\Http\Controllers\DataPemasukanControllerAdmin;
use App\Http\Controllers\DataPengeluaranControllerAdmin;
use App\Http\Controllers\LaporanControllerAdmin;
use App\Http\Controllers\DataUserController;
use App\Http\Controllers\HistoriController;

use App\Http\Controllers\CetakLaporanControllerStaffBiasa;
use App\Http\Controllers\DashboardControllerStaffBiasa;
use App\Http\Controllers\DataPemasukanControllerStaffBiasa;
use App\Http\Controllers\DataPengeluaranControllerStaffBiasa;
use App\Http\Controllers\LaporanControllerStaffBiasa;

use App\Http\Controllers\LoginController;




@include_once('admin_web.php');

Route::get('/', function () {
    return view('landingPage.index');
})->name('landingPage.index');


Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


Route::prefix('starter-kit')->group(function () {
    Route::view('index', 'admin.color-version.index')->name('index');
});

// Menangani edit profil
// Route::get('/edit-profile', [DataUserController::class, 'edit'])->name('edit-profile');
// Route::post('/edit-profile', [DataUserController::class, 'updateProfile'])->name('update-profile');
Route::resource('/profile', ProfileController::class);
Route::resource('/profileAdmin', ProfileControllerAdmin::class);
Route::resource('/profileStaffBiasa', ProfileControllerStaffBiasa::class);



// routes/web.php

Route::post('/edit-profile', [ProfileController::class, 'updateProfile'])->name('update-profile');
Route::post('/edit-profile', [ProfileControllerAdmin::class, 'updateProfile'])->name('update-profile');
Route::post('/edit-profile', [ProfileControllerStaffBiasa::class, 'updateProfile'])->name('update-profile');


Route::resource('/dataPengeluaran', DataPengeluaranController::class);
Route::resource('/laporan', LaporanController::class);
Route::resource('/dataPemasukan', DataPemasukanController::class);
Route::resource('/dashboard', DashboardController::class);
Route::resource('/cetak', CetakLaporanController::class);
Route::get('/tampil-laporan', [CetakLaporanController::class, 'tampilLaporan'])->name('tampil-laporan');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


Route::resource('/dataPengeluaranAdmin', DataPengeluaranControllerAdmin::class);
Route::resource('/laporanAdmin', LaporanControllerAdmin::class);
Route::resource('/dataPemasukanAdmin', DataPemasukanControllerAdmin::class);
Route::resource('/cetakAdmin', CetakLaporanControllerAdmin::class);
Route::resource('/dashboardAdmin', DashboardControllerAdmin::class);
Route::resource('/dataUser', DataUserController::class);
Route::resource('/histori', HistoriController::class);
Route::get('/tampil-laporan-Admin', [CetakLaporanControllerAdmin::class, 'tampilLaporan'])->name('tampil-laporan-Admin');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


Route::resource('/dataPengeluaranStaffBiasa', DataPengeluaranControllerStaffBiasa::class);
Route::resource('/laporanStaffBiasa', LaporanControllerStaffBiasa::class);
Route::resource('/dataPemasukanStaffBiasa', DataPemasukanControllerStaffBiasa::class);
Route::resource('/dashboardStaffBiasa',DashboardControllerStaffBiasa::class);
Route::resource('/cetakStaffBiasa', CetakLaporanControllerStaffBiasa::class);
Route::get('/tampil-laporanStaffBiasa', [CetakLaporanControllerStaffBiasa::class, 'tampilLaporan'])->name('tampil-laporan-StaffBiasa');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');



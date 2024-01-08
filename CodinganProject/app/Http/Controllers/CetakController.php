<?php

namespace App\Http\Controllers;

use Illuminate\Encryption\MissingAppKeyException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CetakController extends Controller
{
 
  public function index()
  {
    $user = session('user');

    if (!$user || $user['levelUser'] !== 'staff_keuangan') {
      // Mendapatkan URL sebelum perubahan
      $previousUrl = url()->previous();

      // Redirect ke halaman sebelum perubahan
      return redirect($previousUrl)->with('error', 'Unauthorized access');
    }
  
    $data = DB::SELECT(DB::raw("SELECT * from datapemasukan1"));
    $dataPengeluaran = DB::select(DB::raw("SELECT * from datapengeluaran1"));

    return view('cetak.index', compact('data','dataPengeluaran'));
  }

  public function tampilLaporan(Request $request)
  {
    $jenis = $request->input('jenis');
    $tanggalAwal = $request->input('awal');
    $tanggalAkhir = $request->input('akhir');
    $username = $request->input('username');

    // Logika pengambilan data laporan berdasarkan parameter yang diberikan
    $query = $this->getDataLaporan($jenis, $tanggalAwal, $tanggalAkhir, $username);

    // Mengirimkan data laporan ke tampilan dengan format JSON
    return view('partials.tabel_laporan', compact('query', 'jenis'));
  }


}
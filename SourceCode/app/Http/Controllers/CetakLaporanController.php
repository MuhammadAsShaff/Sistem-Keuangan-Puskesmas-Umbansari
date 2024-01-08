<?php
namespace App\Http\Controllers;
use Illuminate\Encryption\MissingAppKeyException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use stdClass;


class CetakLaporanController extends Controller
{
   
    public function totalPemasukan()
    {
        return DB::table('datapemasukan1')->sum('jumlahNominal');
    }

    public function totalPengeluaran()
    {
        return DB::table('datapengeluaran1')->sum('jumlahNominal');
    }

    public function index()
    {
        $user = session('user');

        if (!$user || $user['levelUser'] !== 'staff_keuangan') {
            // Mendapatkan URL sebelum perubahan
            $previousUrl = url()->previous();

            // Redirect ke halaman sebelum perubahan
            return redirect($previousUrl)->with('error', 'Unauthorized access');
        }
        return view('cetak.index');
    }

    public function tampilLaporan(Request $request)
    {
        $jenis = $request->input('jenis');
        $awal = $request->input('awal');
        $akhir = $request->input('akhir');

        if ($jenis == 'Pemasukkan') {
            $data = DB::table('datapemasukan1')
                ->whereBetween('tanggalMasuk', [$awal, $akhir])
                ->get();
        } elseif ($jenis == 'Pengeluaran') {
            $data = DB::table('datapengeluaran1')
                ->whereBetween('tanggalKeluar', [$awal, $akhir])
                ->get();
        } else {
            return response()->json(['error' => 'Jenis laporan tidak valid.']);
        }

        return view('cetak/tampilanLaporan', ['data' => $data, 'jenis' => $jenis]);
    }

}
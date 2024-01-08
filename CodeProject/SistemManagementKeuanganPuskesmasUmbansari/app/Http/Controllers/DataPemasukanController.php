<?php

namespace App\Http\Controllers;
use Illuminate\Encryption\MissingAppKeyException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class DataPemasukanController extends Controller
{
    public function totalPemasukan()
    {
        $totalPemasukan = DB::table('datapemasukan1')->sum('jumlahNominal');

        return view('dataPemasukan.index', compact('totalPemasukan'));
    }


    private function generateBulanMasukArray()
    {
        $bulanMasuk = [];

        for ($i = 1; $i <= 12; $i++) {
            $bulan = str_pad($i, 2, '0', STR_PAD_LEFT); // Format 2 digit untuk bulan
            $bulanMasuk[] = Carbon::parse("2024-$bulan-01")->format('M Y');
        }

        return $bulanMasuk;
    }

    public function index(Request $request)
    {
        $user = session('user');

        if (!$user || $user['levelUser'] !== 'staff_keuangan') {
            // Mendapatkan URL sebelum perubahan
            $previousUrl = url()->previous();

            // Redirect ke halaman sebelum perubahan
            return redirect($previousUrl)->with('error', 'Unauthorized access');
        }
        $data = DB::table('datapemasukan1')->orderBy('tanggalMasuk')->get();

        // Inisialisasi array untuk menyimpan jumlah nominal berdasarkan bulan
        $totalPemasukanPerBulan = [];

        foreach ($data as $item) {
            $bulanTahun = Carbon::parse($item->tanggalMasuk)->format('M Y');

            // Jika belum ada entry untuk bulan tersebut, inisialisasi dengan nilai 0
            if (!isset($totalPemasukanPerBulan[$bulanTahun])) {
                $totalPemasukanPerBulan[$bulanTahun] = 0;
            }

            // Tambahkan jumlah nominal ke total untuk bulan tersebut
            $totalPemasukanPerBulan[$bulanTahun] += $item->jumlahNominal;
        }

        // Ambil hanya kunci (bulan dan tahun) dari array yang sudah dihitung
        $bulanMasuk = array_keys($totalPemasukanPerBulan);

        // Ambil nilai (jumlah nominal) dari array yang sudah dihitung
        $jumlahNominal = array_values($totalPemasukanPerBulan);

        $totalPemasukan = array_sum($jumlahNominal);

        return view('dataPemasukan.index', compact('data', 'totalPemasukan', 'bulanMasuk', 'jumlahNominal'));
    }

    // ...



    public function create()
    {
        return view('dataPemasukan.create');
    }

    public function store(Request $request)
    {
        // ...

        DB::insert("INSERT INTO datapemasukan1 (
        `idPemasukan`,
        `tanggalMasuk`,
        `keterangan`,
        `sumberPemasukan`,
        `jumlahNominal`)
        VALUES (?, ?, ?, ?, ?)",
            [
                $request->idPemasukan,
                $request->tanggalMasuk,
                $request->keterangan,
                $request->sumberPemasukan,
                $request->jumlahNominal,
            ]
        );

        return redirect()->route('dataPemasukan.index')->with(['success' => 'Data Berhasil Disimpan']);
    }

        public function edit($id)
        {
            $data = DB::table('datapemasukan1')->where('idPemasukan', $id)->first();
            return view('dataPemasukan.edit', compact('data'));
        }


    public function update(Request $request, $id)
    {
        // ...

        DB::table('datapemasukan1')->where('idPemasukan', $id)->update([
            'tanggalMasuk' => $request->tanggalMasuk,
            'keterangan' => $request->keterangan,
            'sumberPemasukan' => $request->sumberPemasukan,
            'jumlahNominal' => $request->jumlahNominal,
        ]);

        return redirect()->route('dataPemasukan.index')->with(['success' => 'Data Berhasil Diupdate!']);
    }




    public function destroy($id)
    {
        DB::table('datapemasukan1')->where('idPemasukan', $id)->delete();
        return redirect()->route('dataPemasukan.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}

<?php

namespace App\Http\Controllers;
use Illuminate\Encryption\MissingAppKeyException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class DataPengeluaranControllerStaffBiasa extends Controller
{
  
    public function totalPengeluaran()
    {
        $totalPengeluaran = DB::table('datapengeluaran1')->sum('jumlahNominal');

        return view('dataPengeluaranStaffBiasa.index', compact('totalPengeluaran'));
    }

    private function generateBulanKeluarArray()
    {
        $bulanKeluar = [];

        for ($i = 1; $i <= 12; $i++) {
            $bulan = str_pad($i, 2, '0', STR_PAD_LEFT); // Format 2 digit untuk bulan
            $bulanKeluar[] = Carbon::parse("2024-$bulan-01")->format('M Y');
        }

        return $bulanKeluar;
    }

    public function index(Request $request)
    {
        $user = session('user');

        if (!$user || $user['levelUser'] !== 'staf') {
            // Mendapatkan URL sebelum perubahan
            $previousUrl = url()->previous();

            // Redirect ke halaman sebelum perubahan
            return redirect($previousUrl)->with('error', 'Unauthorized access');
        }
        $data = DB::table('datapengeluaran1')->orderBy('tanggalKeluar')->get();

        // Inisialisasi array untuk menyimpan jumlah nominal berdasarkan bulan
        $totalPengeluaranPerBulan = [];

        // Inisialisasi array untuk tanggalKeluar
        $tanggalKeluar = [];

        foreach ($data as $item) {
            $bulanTahun = Carbon::parse($item->tanggalKeluar)->format('M Y');

            // Jika belum ada entry untuk bulan tersebut, inisialisasi dengan nilai 0
            if (!isset($totalPengeluaranPerBulan[$bulanTahun])) {
                $totalPengeluaranPerBulan[$bulanTahun] = 0;
            }

            // Tambahkan jumlah nominal ke total untuk bulan tersebut
            $totalPengeluaranPerBulan[$bulanTahun] += $item->jumlahNominal;

            // Tambahkan tanggalKeluar ke array
            $tanggalKeluar[] = Carbon::parse($item->tanggalKeluar)->timestamp * 1000;
        }

        // Ambil hanya kunci (bulan dan tahun) dari array yang sudah dihitung
        $bulanKeluar = array_keys($totalPengeluaranPerBulan);

        // Ambil nilai (jumlah nominal) dari array yang sudah dihitung
        $jumlahNominal = array_values($totalPengeluaranPerBulan);

        $totalPengeluaran = array_sum($jumlahNominal);

        return view('dataPengeluaranStaffBiasa.index', compact('data', 'totalPengeluaran', 'bulanKeluar', 'tanggalKeluar', 'jumlahNominal'));
    }

    // ...




    public function create()
    {
        return view('dataPengeluaranStaffBiasacreate');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'idPengeluaran' ,
            'tanggalKeluar' ,
            'keterangan',
            'sumberPengeluaran',
            'jumlahNominal' ,
            
        ]);

        // // Upload image
        // if ($request->hasFile('photo')) {
        //     $image = $request->file('photo');
        //     $imagePath = $image->storeAs('public/datapengeluaran', $image->hashName());
        // } else {
        //     $imagePath = null;
        // }

        DB::insert("INSERT INTO datapengeluaran1 (
            `idPengeluaran`,
            `tanggalKeluar`,
            `keterangan`,
            `sumberPengeluaran`,
            `jumlahNominal`)
            VALUES (?, ?, ?, ?, ?)",
            [
                $request->idPengeluaran,
                $request->tanggalKeluar,
                $request->keterangan,
                $request->sumberPengeluaran,
                $request->jumlahNominal,     
            ]
        );
    
  
        return redirect()->route('dataPengeluaranStaffBiasaindex')->with(['success' => 'Data Berhasil Disimpan']);
    }

        public function edit($id)
        {
            $data = DB::table('datapengeluaran1')->where('idPengeluaran', $id)->first();
            return view('dataPengeluaranStaffBiasaedit', compact('data'));
        }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'tanggalKeluar' => 'required',
            'keterangan' => 'required',
            'sumberPengeluaran' => 'required',
            'jumlahNominal' => 'required',
        ]);

        // Lakukan update pada data sesuai kolom yang dibutuhkan
        DB::table('datapengeluaran1')->where('idPengeluaran', $id)->update([
            'tanggalKeluar' => $request->tanggalKeluar,
            'keterangan' => $request->keterangan,
            'sumberPengeluaran' => $request->sumberPengeluaran,
            'jumlahNominal' => $request->jumlahNominal,
            // Jangan termasuk 'idPengeluaran' pada bagian update
        ]);

        return redirect()->route('dataPengeluaranStaffBiasaindex')->with(['success' => 'Data Berhasil Diupdate!']);
    }




    public function destroy($id)
    {
        DB::table('datapengeluaran1')->where('idPengeluaran', $id)->delete();
        return redirect()->route('dataPengeluaranStaffBiasaindex')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}

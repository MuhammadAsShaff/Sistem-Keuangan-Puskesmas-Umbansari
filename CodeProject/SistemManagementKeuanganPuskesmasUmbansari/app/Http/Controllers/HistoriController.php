<?php

namespace App\Http\Controllers;

use Illuminate\Encryption\MissingAppKeyException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class HistoriController extends Controller
{
   
    public function totalPemasukan()
    {
        $totalPemasukan = DB::table('histori')->sum('jumlahNominal');

        return view('histori.index', compact('totalPemasukan'));
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

    public function totalLakiLaki()
    {
        return DB::table('histori')->where('jenisKelamin', 'Laki Laki')->count();
    }
    public function totalPerempuan()
    {
        return DB::table('histori')->where('jenisKelamin', 'Perempuan')->count();
    }
    public function index(Request $request)
    {
        $user = session('user');

        if (!$user || $user['levelUser'] !== 'admin') {
            // Mendapatkan URL sebelum perubahan
            $previousUrl = url()->previous();

            // Redirect ke halaman sebelum perubahan
            return redirect($previousUrl)->with('error', 'Unauthorized access');
        }
        $data = DB::SELECT(DB::raw("SELECT * from histori"));
        $totalLakiLaki = $this->totalLakiLaki();
        $totalPerempuan = $this->totalPerempuan();
        return view('histori.index', compact('data','totalLakiLaki','totalPerempuan'));
    }


    public function create()
    {
        return view('histori.create');
    }

    public function store(Request $request)
    {
        DB::insert("INSERT INTO histori. (
        `nik`,
        `nama`,
        `jenisKelamin`,
        `alamat`,
        `email`,
        `password`,
        `jabatan`,
        `levelUser`)
        VALUES (?, ?, ?, ?, ?,?,?,?)",
            [
                $request->nik,
                $request->nama,
                $request->jenisKelamin,
                $request->alamat,
                $request->email,
                $request->password,
                $request->jabatan,
                $request->levelUser,

            ]
        );

        return redirect()->route('histori.index')->with(['success' => 'Data Berhasil Disimpan']);
    }

    public function edit($id)
    {
        $data = DB::table('histori')->where('nik', $id)->first();
        return view('histori.edit', compact('data'));
    }


    public function update(Request $request, $id)
    {
        // ...

        DB::table('histori')->where('nik', $id)->update([
            'nama' => $request->nama,
            'jenisKelamin' => $request->jenisKelamin,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'password' => $request->password,
            'jabatan' => $request->jabatan,
            'levelUser' => $request->levelUser,
        ]);

        return redirect()->route('histori.index')->with(['success' => 'Data Berhasil Diupdate!']);
    }




    public function destroy($id)
    {
        DB::table('histori')->where('idHistori', $id)->delete();
        return redirect()->route('histori.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}

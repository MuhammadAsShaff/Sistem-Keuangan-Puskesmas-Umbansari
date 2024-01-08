<?php

namespace App\Http\Controllers;

use Illuminate\Encryption\MissingAppKeyException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class DataUserController extends Controller
{
    public function totalPemasukan()
    {
        $totalPemasukan = DB::table('datapemasukan1')->sum('jumlahNominal');

        return view('dataUser.index', compact('totalPemasukan'));
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
        return DB::table('user')->where('jenisKelamin', 'Laki Laki')->count();
    }
    public function totalPerempuan()
    {
        return DB::table('user')->where('jenisKelamin', 'Perempuan')->count();
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
        $data = DB::SELECT(DB::raw("SELECT * from user"));
        $totalLakiLaki = $this->totalLakiLaki();
        $totalPerempuan = $this->totalPerempuan();
        return view('dataUser.index', compact('data', 'totalLakiLaki', 'totalPerempuan'));
    }


    public function create()
    {
        return view('dataUser.create');
    }

    public function store(Request $request)
    {
        DB::insert("INSERT INTO user (
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

        return redirect()->route('dataUser.index')->with(['success' => 'Data Berhasil Disimpan']);
    }

    


    public function update(Request $request, $id)
    {
        // ...

        DB::table('user')->where('nik', $id)->update([
            'nama' => $request->nama,
            'jenisKelamin' => $request->jenisKelamin,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'password' => $request->password,
            'jabatan' => $request->jabatan,
            'levelUser' => $request->levelUser,
        ]);

        return redirect()->route('dataUser.index')->with(['success' => 'Data Berhasil Diupdate!']);
    }




    public function destroy($id)
    {
        DB::table('user')->where('nik', $id)->delete();
        return redirect()->route('dataUser.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }

    public function edit()
    {
        // Mengambil data user berdasarkan NIK dari session
        $user = session('user');
        $data = DB::table('user')->where('nik', $user['nik'])->first();

        return view('dataUser.edit', compact('data'));
    }

    public function updateProfile(Request $request)
    {
        // Validasi form jika diperlukan
        $request->validate([
            'nama' => 'required|string|max:255',
            'jenisKelamin' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:6',
            'jabatan' => 'required|string|max:255',
            'levelUser' => 'required|string|max:255',
            // Tambahkan validasi untuk kolom lain jika diperlukan
        ]);

        // Update data di tabel user
        DB::table('user')->where('nik', $request->input('nik'))->update([
            'nama' => $request->input('nama'),
            'jenisKelamin' => $request->input('jenisKelamin'),
            'alamat' => $request->input('alamat'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'jabatan' => $request->input('jabatan'),
            'levelUser' => $request->input('levelUser'),
            // Tambahkan perubahan untuk kolom lain jika diperlukan
        ]);

        // Simpan perubahan ke sesi
        $user = session('user');
        $user['nama'] = $request->input('nama');
        $user['jenisKelamin'] = $request->input('jenisKelamin');
        $user['alamat'] = $request->input('alamat');
        $user['email'] = $request->input('email');
        $user['jabatan'] = $request->input('jabatan');
        $user['levelUser'] = $request->input('levelUser');
        // Tambahkan perubahan untuk kolom lain jika diperlukan

        // Update data di sesi
        session(['user' => $user]);

        return redirect()->route('dashboard.index')->with(['message' => 'Profil berhasil diperbarui']);
    }



}

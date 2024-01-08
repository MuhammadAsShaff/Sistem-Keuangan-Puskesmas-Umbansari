<?php

namespace App\Http\Controllers;
use Illuminate\Encryption\MissingAppKeyException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class LaporanController extends Controller
{

  
    public function countReports()
    {
        $totalReports = DB::table('laporan1')->count();
        return view('dashboard.index', compact('totalReports'));
    }
    public function index() {
        $user = session('user');

        if (!$user || $user['levelUser'] !== 'staff_keuangan') {
            // Mendapatkan URL sebelum perubahan
            $previousUrl = url()->previous();

            // Redirect ke halaman sebelum perubahan
            return redirect($previousUrl)->with('error', 'Unauthorized access');
        }
        $data = DB::SELECT(DB::raw("SELECT * from laporan1"));
        return view('laporan.index', compact('data'));
    }


    public function create()
    {
        return view('laporan.create');
    }

    public function store(Request $request)
    {
      
            $this->validate($request, [
                'judulLaporan' => 'required',
                'keterangan' => 'required',
                'typeDana' => 'required',
                'jumlahNominal' => 'required',
                'file' => 'file|mimes:pdf,doc,docx',
            ]);

            $fileColumnValue = null;

            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('uploads', $fileName, 'public');
                $fileColumnValue = $fileName;
            }

            DB::table('laporan1')->insert([
                'judulLaporan' => $request->judulLaporan,
                'keterangan' => $request->keterangan,
                'typeDana' => $request->typeDana,
                'jumlahNominal' => $request->jumlahNominal,
                'file' => $fileColumnValue,
            ]);

            // Redirect ke halaman laporan dengan pesan sukses
            return redirect()->route('laporan.index')->with(['success' => 'Data Berhasil Disimpan']);

        
    }






    public function edit($id)
        {
            $data = DB::table('laporan1')->where('idLaporan', $id)->first();
            return view('laporan.edit', compact('data'));
        }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'sumber' => 'required',
            'keterangan' => 'required',
            'jumlahPengeluaran' => 'required',
            'jumlahPemasukan' => 'required',
        ]);

        // Lakukan update pada data sesuai kolom yang dibutuhkan
        DB::table('laporan1')->where('idLaporan', $id)->update([
            'sumber' => $request->sumber,
            'keterangan' => $request->keterangan,
            'jumlahPengeluaran' => $request->jumlahPengeluaran,
            'jumlahPemasukan' => $request->jumlahPemasukan,
            // Jangan termasuk 'idLaporan' pada bagian update
        ]);

        return redirect()->route('laporan.index')->with(['success' => 'Data Berhasil Diupdate!']);
    }




    public function destroy($id)
    {
        DB::table('laporan1')->where('idLaporan', $id)->delete();
        return redirect()->route('laporan.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}

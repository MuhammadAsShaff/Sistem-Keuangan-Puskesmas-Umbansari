<?php

namespace App\Http\Controllers;
use Illuminate\Encryption\MissingAppKeyException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class LaporanControllerStaffBiasa extends Controller
{
   
 
    public function index() {
        $user = session('user');

        if (!$user || $user['levelUser'] !== 'staf') {
            // Mendapatkan URL sebelum perubahan
            $previousUrl = url()->previous();

            // Redirect ke halaman sebelum perubahan
            return redirect($previousUrl)->with('error', 'Unauthorized access');
        }
        $data = DB::SELECT(DB::raw("SELECT * from laporan1"));
        return view('laporanStaffBiasa.index', compact('data'));
    }


    public function create()
    {
        return view('laporanStaffBiasacreate');
    }

    public function store(Request $request)
    {
        try {
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

            // Tambahkan header Content-Type dan Content-Disposition
            $file_path = public_path("storage/uploads/{$fileColumnValue}");

            return response()->download($file_path, $fileName, [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'attachment',
            ]);

        } catch (\Exception $e) {
            // Tangkap dan tampilkan kesalahan
            dd($e->getMessage());
        }
    }






    public function edit($id)
        {
            $data = DB::table('laporan1')->where('idLaporan', $id)->first();
            return view('laporanStaffBiasaedit', compact('data'));
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

        return redirect()->route('laporanStaffBiasaindex')->with(['success' => 'Data Berhasil Diupdate!']);
    }




    public function destroy($id)
    {
        DB::table('laporan1')->where('idLaporan', $id)->delete();
        return redirect()->route('laporanStaffBiasa.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Encryption\MissingAppKeyException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DashboardControllerStaffBiasa extends Controller
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

        if (!$user || $user['levelUser'] !== 'staf') {
            // Mendapatkan URL sebelum perubahan
            $previousUrl = url()->previous();

            // Redirect ke halaman sebelum perubahan
            return redirect($previousUrl)->with('error', 'Unauthorized access');
        }

        $totalPemasukan = $this->totalPemasukan();
        $totalPengeluaran = $this->totalPengeluaran();
        $data = DB::SELECT(DB::raw("SELECT * from datapemasukan1"));
        $dataPengeluaran = DB::select(DB::raw("SELECT * from datapengeluaran1"));

        return view('dashboardStaffBiasa.index', compact('data', 'totalPemasukan', 'totalPengeluaran', 'dataPengeluaran'));

    }


}
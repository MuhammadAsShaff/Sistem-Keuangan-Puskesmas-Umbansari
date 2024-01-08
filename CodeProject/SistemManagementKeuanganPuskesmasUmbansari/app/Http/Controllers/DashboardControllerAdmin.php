<?php

namespace App\Http\Controllers;
use Illuminate\Encryption\MissingAppKeyException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DashboardControllerAdmin extends Controller
{
    public function totalStaffAktif()
    {
        return DB::table('user')->count('nik');
    }

    public function totalStaffTidakAktif()
    {
        return DB::table('histori')->count('nik');
    }
   
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

        if (!$user || $user['levelUser'] !== 'admin') {
            // Mendapatkan URL sebelum perubahan
            $previousUrl = url()->previous();

            // Redirect ke halaman sebelum perubahan
            return redirect($previousUrl)->with('error', 'Unauthorized access');
        }

        $totalStaffAktif = $this->totalStaffAktif();
        $totalStaffTidakAktif = $this->totalStaffTidakAktif();
        $totalPemasukan = $this->totalPemasukan();
        $totalPengeluaran = $this->totalPengeluaran();
        $aktif = DB::SELECT(DB::raw("SELECT * from user"));
        $tidakAktif = DB::SELECT(DB::raw("SELECT * from histori"));
        $data = DB::SELECT(DB::raw("SELECT * from datapemasukan1"));
        $dataPengeluaran = DB::select(DB::raw("SELECT * from datapengeluaran1"));

        return view('dashboardAdmin.index', compact('data', 'totalPemasukan', 'totalPengeluaran', 'dataPengeluaran', 'aktif', 'tidakAktif', 'totalStaffAktif', 'totalStaffTidakAktif'));
    }

}
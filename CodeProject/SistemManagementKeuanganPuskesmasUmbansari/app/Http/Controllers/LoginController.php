<?php

// app/Http/Controllers/LoginController.php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class LoginController extends Controller
{
  public function index()
  {
    return view('login.index');
  }

  public function login(Request $request)
  {
    $request->validate([
      'email' => 'required|email',
      'password' => 'required',
    ]);

    $user = DB::table('user')
      ->where('email', $request->email)
      ->first();

    if (!$user || $request->password != $user->password) {
      return redirect()->route('login.index')->with('error', 'Invalid email or password');
    }

    // Simpan informasi pengguna di dalam session
    session([
      'user' => [
        'nik' => $user->nik,
        'nama' => $user->nama,
        'jenisKelamin' => $user->jenisKelamin,
        'alamat' => $user->alamat,
        'email' => $user->email,
        'password' => $user->password,
        'jabatan' => $user->jabatan,
        'levelUser' => $user->levelUser,
      ]
    ]);

  

    // Redirect berdasarkan levelUser
    switch ($user->levelUser) {
      case 'admin':
        return redirect()->route('dashboardAdmin.index');
      case 'staf':
        return redirect()->route('dashboardStaffBiasa.index');
      case 'staff_keuangan':
        return redirect()->route('dashboard.index');
      default:
        return redirect()->route('login.index')->with('error', 'Invalid user level');
    }
  }

  public function logout()
  {
    // Hanya lakukan logout jika pengguna sudah login
    if (session()->has('user')) {
      // Logika logout jika diperlukan

      // Hapus session
      session()->forget('user');

      // Redirect ke halaman landingPage.index
      return redirect()->route('landingPage.index');
    }

    // Jika pengguna belum login, mungkin ada tindakan lanjutan yang perlu diambil
    return redirect()->route('landingPage.index');
  }
}

  
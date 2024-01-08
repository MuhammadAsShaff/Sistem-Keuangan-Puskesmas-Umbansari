<!-- resources/views/edit-profile.blade.php -->

@extends('layouts.staffKeuangan.master')

@section('title') Sistem Keuangan Puskesmas
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/prism.css')}}">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/apexcharts@3.28.0/dist/apexcharts.min.css">
<!-- DataTables CSS -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
@endpush

@section('content')
@component('components.breadcrumb')
@slot('breadcrumb_title')
<h3>Laporan</h3>
@endslot
<li class="breadcrumb-item">Starter Kit</li>
<li class="breadcrumb-item">Color Version</li>
<li class="breadcrumb-item active">Laporan</li>
@endcomponent

<div class="container mt-5">
  <div class="row">
    <div class="col-md-12">
      <div class="card border-0 shadow rounded">
        <div class="card-body">
          <h2>Edit Profil</h2>

          @if ($data)
          <!-- Isi form edit profil di sini -->
          <form method="POST" action="{{ route('update-profile') }}">
            @csrf

            <div class="form-row">
              <!-- Field NIK -->
              <div class="form-group col-md-6">
                <label for="editNik">NIK</label>
                <input type="text" class="form-control" id="editNik" value="{{ session('user')['nik'] }}" readonly>
              </div>

              <!-- Field Nama -->
              <div class="form-group col-md-6">
                <label for="editNama">Nama</label>
                <input type="text" class="form-control" id="editNama" name="nama" value="{{ session('user')['nama'] }}"
                  placeholder="Masukkan Nama">
                @error('nama')
                <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
            </div>

            <!-- Field Jenis Kelamin -->
            <div class="form-group">
              <label for="editJenisKelamin">Jenis Kelamin</label>
              <input type="text" class="form-control" id="editJenisKelamin" name="jenisKelamin"
                value="{{ session('user')['jenisKelamin'] }}" placeholder="Masukkan Jenis Kelamin">
              @error('jenisKelamin')
              <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>

            <!-- Field Alamat -->
            <div class="form-group">
              <label for="editAlamat">Alamat</label>
              <input type="text" class="form-control" id="editAlamat" name="alamat"
                value="{{ session('user')['alamat'] }}" placeholder="Masukkan Alamat">
              @error('alamat')
              <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>

            <!-- Field Email -->
            <div class="form-group">
              <label for="editEmail">Email</label>
              <input type="email" class="form-control" id="editEmail" name="email"
                value="{{ session('user')['email'] }}" placeholder="Masukkan Email">
              @error('email')
              <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>

            <!-- Field Password -->
            <div class="form-group">
              <label for="editPassword">Password</label>
              <input type="text" class="form-control" id="editPassword" name="password"
                value="{{ session('user')['password'] }}" placeholder="Masukkan Password">
              @error('password')
              <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>

            <!-- Field Jabatan -->
            <div class="form-group">
              <label for="editJabatan">Jabatan</label>
              <input type="text" class="form-control" id="editJabatan" name="jabatan"
                value="{{ session('user')['jabatan'] }}" placeholder="Masukkan Jabatan" readonly>
              @error('jabatan')
              <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>

            <!-- Field Level User -->
            <div class="form-group">
              <label for="editLevelUser">Level User</label>
              <input type="text" class="form-control" id="editLevelUser" name="levelUser"
                value="{{ session('user')['levelUser'] }}" placeholder="Masukkan Level User" readonly>
              @error('levelUser')
              <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>

            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </div>
          </form>
          @else
          <p>Data tidak ditemukan.</p>
          @endif

        </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection

@push('scripts')
<!-- SweetAlert2 JS -->
<!-- SweetAlert2 JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
  $(document).ready(function () {
    // Cek jika ada pesan sukses dari session
    var successMessage = "{{ session('success') }}";

    if (successMessage) {
      // Pemisahan alert berdasarkan kata kunci
      if (successMessage.includes('Disimpan')) {
        showSuccessAlert('Data berhasil diupdate!');
      } else if (successMessage.includes('Diupdate')) {
        showSuccessAlert('Data berhasil diupdate!');
      } else if (successMessage.includes('Dihapus')) {
        showSuccessAlert('Data berhasil dihapus!');
      }
    }

    // Tambahkan event listener untuk tombol simpan
    document.getElementById('btnSimpan').addEventListener('click', function (event) {
      // Periksa apakah formulir valid
      var isFormValid = document.getElementById('tambahForm').checkValidity();

      if (isFormValid) {
        // Jika valid, kirim formulir
        document.getElementById('tambahForm').submit();
        // Tampilkan SweetAlert
        showSuccessAlert('Data berhasil disimpan!');
      } else {
        // Jika tidak valid, tampilkan pesan peringatan
        Swal.fire({
          title: 'Peringatan!',
          text: 'Harap isi semua kolom terlebih dahulu.',
          icon: 'warning'
        });
      }
    });

    function showSuccessAlert(message) {
      Swal.fire({
        title: 'Sukses!',
        text: message,
        icon: 'success',
        timer: 1500, // Durasi tampilan alert (ms)
        showConfirmButton: false
      });
    }
  });
</script>


<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script src="{{ asset('assets/js/prism/prism.min.js') }}"></script>
<script src="{{ asset('assets/js/clipboard/clipboard.min.js') }}"></script>
<script src="{{ asset('assets/js/custom-card/custom-card.js') }}"></script>
<script src="{{ asset('assets/js/tooltip-init.js') }}"></script>

@endpush
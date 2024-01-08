@extends('layouts.staffBiasa.master')

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/prism.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/apexcharts@3.28.0/dist/apexcharts.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<style>
  .custom-header {
    background-color: #d3d3d3;
    /* Warna abu-abu kustom */
  }

  .custom-card {
    height: 100%;
  }

  .custom-header h5 {
    color: #24695C;
    /* Menetapkan warna teks menjadi putih */
  }
</style>
@endpush

@section('content')
@component('components.breadcrumb')
@slot('breadcrumb_title')
<h3>Laporan</h3>
@endslot
<li class="breadcrumb-item active">Cetak Pelaporan</li>
@endcomponent

<div class="container mt-5">
  <div class="card shadow-lg rounded-lg">
    <div class="card-header bg-primary text-white">
      <h5 class="mb-0">Laporan Keuangan</h5>
    </div>
    <div class="card-body">
      <form id="laporanForm">
        <div class="form-row">
          <div class="col-md-4 mb-3">
            <label for="jenis-laporan">Jenis Laporan</label>
            <select id="jenis-laporan" class="form-control">
              <option value="Pemasukkan">Pemasukkan</option>
              <option value="Pengeluaran">Pengeluaran</option>
            </select>
          </div>
          <div class="col-md-4 mb-3">
            <label for="awal">Tanggal Awal</label>
            <input type="date" class="form-control" id="awal">
          </div>
          <div class="col-md-4 mb-3">
            <label for="akhir">Tanggal Akhir</label>
            <input type="date" class="form-control" id="akhir">
          </div>
        </div>
        <button class="btn btn-primary" type="button" id="tampilkanBtn">Tampilkan</button>
      </form>

      <div class="mt-4">
        <div id="laporanResult"></div>
      </div>
    </div>
  </div>
  
<div class="row">
  <!-- Card Langkah 1 -->
  <div class="col-md-4">
    <div class="card shadow-lg rounded-lg mb-4 custom-card">
      <div class="card-header custom-header">
        <h5 class="mb-0 ">Langkah 1</h5>
      </div>
      <div class="card-body">
        <p class="card-text">
          Pilih jenis pelaporan yang ingin Anda cetak, apakah pemasukan atau pengeluaran.
        </p>
      </div>
    </div>
  </div>

  <!-- Card Langkah 2 -->
  <div class="col-md-4">
    <div class="card shadow-lg rounded-lg mb-4 custom-card">
      <div class="card-header custom-header ">
        <h5 class="mb-0 ">Langkah 2</h5>
      </div>
      <div class="card-body">
        <p class="card-text">
          Tentukan tanggal awal data pemasukan atau pengeluaran.
        </p>
      </div>
    </div>
  </div>

  <!-- Card Langkah 3 -->
  <div class="col-md-4">
    <div class="card shadow-lg rounded-lg mb-4 custom-card">
      <div class="card-header custom-header ">
        <h5 class="mb-0 ">Langkah 3</h5>
      </div>
      <div class="card-body">
        <p class="card-text">
          Tentukan tanggal akhir data pemasukan atau pengeluaran, kemudian klik tombol "Tampilkan".
        </p>
      </div>
    </div>
  </div>
</div>

</div>
@endsection

@push('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function () {
    $("#tampilkanBtn").click(function () {
      var jenis = $('#jenis-laporan').val();
      var tanggalAwal = $('#awal').val();
      var tanggalAkhir = $('#akhir').val();

      var route = '{{ route("tampil-laporan-StaffBiasa") }}';
      var params = { jenis: jenis, awal: tanggalAwal, akhir: tanggalAkhir };

      window.location.href = `${route}?${$.param(params)}`;
    });
  });
</script>
@endpush
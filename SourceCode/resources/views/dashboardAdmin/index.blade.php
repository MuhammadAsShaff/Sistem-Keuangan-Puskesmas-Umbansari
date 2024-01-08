@extends('layouts.Admin.master')

@section('title')
Sistem Keuangan Umban Sari
@endsection

@push('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
  integrity="sha512-xr1nK3q+AER0Tiv6p9kTImfhJiJKcDzxysaKumfp2jSzgA9inF4f8dJdt1khJlqU7Nk0/6tiTSKVrE4z1vXq3ZQ=="
  crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
  .small-card p {
    text-align: justify;
    /* Teks di dalam elemen <p> akan diatur rata kanan kiri */
  }

  .chart-container {
    margin-bottom: 0px;
    /* Sesuaikan sesuai kebutuhan, tambahkan ruang di bagian bawah chart */
  }

  /* Bagian Kanan: Total Staff Laki Laki dan Perempuan */
  .small-card {
    max-width: 100%;
    /* Sesuaikan jika diperlukan */
    margin-bottom: 15px;
    /* Berikan jarak antar card */
  }

  /* Custom Grid */
  .row {
    display: flex;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
  }

  .col-md-6 {
    flex: 0 0 50%;
    /* 2 card per baris */
    max-width: 50%;
    padding-right: 30px;
    padding-left: 30px;
  }

  /* Responsive Grid untuk Layar yang Lebih Kecil */
  @media (max-width: 768px) {
    .col-md-6 {
      flex: 0 0 100%;
      max-width: 100%;
    }
  }

  /* Mengurangi jarak antar huruf */
  .card-title {
    letter-spacing: -1px;
    /* Sesuaikan sesuai kebutuhan */
  }

  .card-text {
    letter-spacing: -0.5px;
    /* Sesuaikan sesuai kebutuhan */
  }
</style>

<style>
  .custom-card {
    background-color: #ffffff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: box-shadow 0.3s ease-in-out;
    overflow: hidden;
  }

  .custom-card:hover {
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
  }

  .small-card {
    font-size: 14px;
    padding: 15px;
  }

  .chart-container {
    border-radius: 10px;
    overflow: hidden;
    border: 2px solid #e0e0e0;
  }

  #myChart {
    width: 100%;
    height: 400px;
  }
</style>
@endpush

@section('content')
@component('components.breadcrumb')
@slot('breadcrumb_title')
<h3>Sistem Keuangan Puskesmas Umban Sari</h3>
@endslot
<li class="breadcrumb-item">Dashboard</li>
@endcomponent

<div class="container mt-5">

  <div class="container mt-5">

    <!-- Card Dashboard -->
  <div class="card border-0 shadow custom-card">
    <div class="card-body">
      <div class="d-flex justify-content-center align-items-center mb-3">
        <img src="landingPage/images/logo1.png" alt="Dashboard Icon" class="img-fluid dashboard-icon"
          style="max-width: 150px; max-height: 100px;">
      </div>
      <h5 class="card-title text-center mb-3">Selamat datang di Sistem Keuangan Puskesmas Umban Sari</h5>
      <p class="card-text text-center">Dashboard ini memberikan gambaran umum tentang status keuangan dan kepegawaian.
        Anda dapat melihat statistik keuangan, jumlah staf aktif dan tidak aktif, serta perbandingan pemasukan dan
        pengeluaran
        pada grafik yang disediakan. Gunakan menu di sebelah kiri untuk menjelajahi fungsi-fungsi lainnya. Dengan
        menyediakan informasi yang lengkap, kami berharap Anda dapat mengelola sumber daya dengan lebih efektif dan
        efisien.
      </p>
    </div>
  </div>

<div class="card border-0 shadow custom-card">
  <div class="card-body">
    <div class="d-flex justify-content-center align-items-center mb-3">
      <h3 class="card-title text-center mb-3">Informasi Staff Puskesmas</h3>

    </div>
  </div>

    <div class="row">
      <!-- Bagian Kiri: Chart -->
      <div class="col-md-6">
        <div class="card border-0 shadow custom-card chart-container">
          <div class="card-body">
            <h5 class="card-title text-center">Perbandingan Staff Aktif Dan Tidak Aktif</h5>
            <div id="myChartStaff"></div>
          </div>
        </div>
      </div>

      <!-- Bagian Kanan: Total Staff Laki Laki dan Perempuan -->
      <div class="col-md-6">
        <!-- Card Total Staff Laki Laki -->
        <div class="card border-0 shadow custom-card small-card">
          <div class="card-body">
            <h5 class="card-title"><i data-feather="users"></i> Total Staff Aktif</h5>
            <p class="card-text h3 text-danger">{{ $totalStaffAktif }}</p>
            <p class="card-text">Total staff yang aktif bekerja di Puskesmas Umbansari adalah sebanyak {{
              $totalStaffAktif }} orang.
              Data ini mencakup semua informasi kepegawaian yang telah tercatat.</p>

          </div>
        </div>

        <!-- Card Total Staff Perempuan -->
        <div class="card border-0 shadow custom-card small-card mt-4">
          <div class="card-body">
            <h5 class="card-title"><i data-feather="users"></i> Total Staff Tidak Aktif</h5>
            <p class="card-text h3 text-danger">{{ $totalStaffTidakAktif }}</p>
            <p class="card-text">Total staff yang tidak aktif bekerja di Puskesmas Umbansari adalah sebanyak {{
              $totalStaffTidakAktif }} orang. Data ini mencakup semua informasi kepegawaian yang telah tercatat. Kami
              berkomitmen
              untuk menciptakan kesetaraan dalam lingkungan kerja dan memastikan bahwa setiap staf merasa dihargai .
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

<div class="card border-0 shadow custom-card">
  <div class="card-body">
    <div class="d-flex justify-content-center align-items-center mb-3">
      <h3 class="card-title text-center mb-3">Informasi Keuangan Puskesmas</h3>

    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <div class="card border-0 shadow custom-card small-card">
        <div class="card-body">
          <h5 class="card-title"><i data-feather="arrow-up"></i> Total Pemasukan</h5>
          <p class="card-text h3 text-success">Rp. {{ number_format(floatval($totalPemasukan), 0, ',', '.') }}</p>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="card border-0 shadow custom-card small-card">
        <div class="card-body">
          <h5 class="card-title"><i data-feather="arrow-down"></i> Total Pengeluaran</h5>
          <p class="card-text h3 text-danger">Rp. {{ number_format(floatval($totalPengeluaran), 0, ',', '.') }}</p>
        </div>
      </div>
    </div>
  </div>

  <div class="row mt-4">
    <div class="col-md-12">
      <div class="card border-0 shadow custom-card chart-container">
        <div class="card-body">
          <h5 class="card-title">Perbandingan Pemasukan dan Pengeluaran</h5>
          <div id="myChart"></div>
        </div>
      </div>
    </div>
  </div>




</div>

@push('scripts')
<script src="https://cdn.plot.ly/plotly-latest.min.js"></script>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    var data = [{
      x: ['Staff Aktif', 'Staff Tidak Aktif'],
      y: [{{ $totalStaffAktif }}, {{ $totalStaffTidakAktif }}],
    type: 'bar',
    marker: {
    color: ['#24695C', '#D22D3D']
  }
    }];

  var layout = {
    // title: 'Perbandingan Staff Laki Laki Dan Perempuan',
    font: {
      size: 16,
    },
    xaxis: {
      title: 'Kategori',
      tickfont: {
        size: 14,
      }
    },
    yaxis: {
      title: 'Jumlah ',
      tickfont: {
        size: 14,
      }
    },
    plot_bgcolor: '#ffffff',
    paper_bgcolor: '#ffffff',
    margin: {
      l: 70,
      r: 70,
      b: 80,
      t: 80,
      pad: -50
    },
  };

  Plotly.newPlot('myChartStaff', data, layout);
  });
</script>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    var data = [{
      x: ['Total Pemasukan', 'Total Pengeluaran'],
      y: [{{ $totalPemasukan }}, {{ $totalPengeluaran }}],
    type: 'bar',
    marker: {
    color: ['#24695C', '#D22D3D']
  }
    }];

  var layout = {
    title: 'Perbandingan Pemasukan dan Pengeluaran',
    font: {
      size: 16,
    },
    xaxis: {
      title: 'Kategori',
      tickfont: {
        size: 14,
      }
    },
    yaxis: {
      title: 'Jumlah (Rp)',
      tickfont: {
        size: 14,
      }
    },
    plot_bgcolor: '#ffffff',
    paper_bgcolor: '#ffffff',
    margin: {
      l: 70,
      r: 70,
      b: 80,
      t: 80,
      pad: -50
    },
  };

  Plotly.newPlot('myChart', data, layout);
  });
</script>
@endpush

@endsection
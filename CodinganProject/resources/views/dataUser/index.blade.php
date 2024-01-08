@extends('layouts.admin.master')

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
<!-- Tambahkan Bootstrap Icons Library -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.19.0/font/bootstrap-icons.css">

<style>
.small-card p {
    text-align: justify; /* Teks di dalam elemen <p> akan diatur rata kanan kiri */
}
.chart-container {
    margin-bottom: 0px; /* Sesuaikan sesuai kebutuhan, tambahkan ruang di bagian bawah chart */
}

/* Bagian Kanan: Total Staff Laki Laki dan Perempuan */
.small-card {
    max-width: 100%; /* Sesuaikan jika diperlukan */
    margin-bottom: 15px; /* Berikan jarak antar card */
}

/* Custom Grid */
.row {
    display: flex;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
}

.col-md-6 {
    flex: 0 0 50%; /* 2 card per baris */
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
    letter-spacing: -1px; /* Sesuaikan sesuai kebutuhan */
}

.card-text {
    letter-spacing: -0.5px; /* Sesuaikan sesuai kebutuhan */
}

</style>


@endpush

@section('content')
@component('components.breadcrumb')
@slot('breadcrumb_title')
<h3>Pemasukan</h3>
@endslot
<li class="breadcrumb-item active">Data User</li>
@endcomponent

<div class="container mt-5">
  <div class="row">
    <div class="col-md-12">
      <div class="card border-0 shadow rounded">
        <div class="card-body">
          <!-- Tombol Tambah Laporan -->
          <button type="button" class="btn btn-md btn-primary" data-toggle="modal" data-target="#tambahModal">
            Data Pemasukan
          </button><br><br>

          <!-- Modal Tambah Laporan -->
          <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="tambahModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="tambahModalLabel">Tambah Data USer</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form action="{{ route('dataUser.store') }}" method="post" enctype="multipart/form-data"
                    id="tambahForm">
                    @csrf
                    <div class="form-group">
                      <label class="font-weight-bold">NIK</label>
                      <input type="text" class="form-control @error('nik') is-invalid @enderror" name="nik"
                        placeholder="NIK" required>
                      @error('nik')
                      <div class="alert alert-danger mt-2">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label class="font-weight-bold">Nama</label>
                      <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                        placeholder="nama" required></input>
                      @error('nama')
                      <div class="alert alert-danger mt-2">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label class="font-weight-bold">Jenis Kelamin</label>
                      <select class="form-control @error('jenisKelamin') is-invalid @enderror" name="jenisKelamin"
                        required>
                        <option value="Laki Laki">Laki Laki</option>
                        <option value="Perempuan">Perempuan</option>
                      </select>
                      @error('jenisKelamin')
                      <div class="alert alert-danger mt-2">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label class="font-weight-bold">Alamat</label>
                      <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat"
                        placeholder="Alamat" required>
                      @error('alamat')
                      <div class="alert alert-danger mt-2">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label class="font-weight-bold">Email</label>
                      <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                        placeholder="Email" required>
                      @error('email')
                      <div class="alert alert-danger mt-2">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label class="font-weight-bold">Password</label>
                      <input type="text" class="form-control @error('password') is-invalid @enderror" name="password"
                        placeholder="Jumlah Nominal" required>
                      @error('password')
                      <div class="alert alert-danger mt-2">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label class="font-weight-bold">Jabatan</label>
                      <input type="text" class="form-control @error('jabatan') is-invalid @enderror" name="jabatan"
                        placeholder="Jabatan" required>
                      @error('jabatan')
                      <div class="alert alert-danger mt-2">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label class="font-weight-bold">Level User</label>
                      <select class="form-control @error('levelUser') is-invalid @enderror" name="levelUser" required>
                        <option value="admin">Admin</option>
                        <option value="staf">Staf</option>
                        <option value="staff_keuangan">Staff Keuangan</option>
                      </select>
                      @error('levelUser')
                      <div class="alert alert-danger mt-2">{{ $message }}</div>
                      @enderror
                    </div>
                    <button type="button" class="btn btn-md btn-primary" id="btnSimpan">SIMPAN</button>
                    <button type="reset" class="btn btn-md btn-warning">RESET</button>
                  </form>
                </div>
              </div>
            </div>
          </div>



          <!-- Tabel Data -->
          <table id="data-table" class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">No.</th>
                <th scope="col">NIK</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Alamat</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col">Jabatan</th>
                <th scope="col">Level User</th>
                <th scope="col">Aksi</th>

              </tr>
            </thead>
            <tbody>
              @forelse ($data as $dataUser)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $dataUser->nik }}</td>
                <td>{{ $dataUser->nama }}</td>
                <td>{{ $dataUser->jenisKelamin }}</td>
                <td>{{ $dataUser->alamat }}</td>
                <td>{{ $dataUser->email }}</td>
                <td>{{ $dataUser->password}}</td>
                <td>{{ $dataUser->jabatan }}</td>
                <td>{{ $dataUser->levelUser }}</td>




                <td class="text-center">
                  <div class="btn-group" role="group">
                    <button class="btn btn-pill btn-primary btn-air-primary btn-action" type="button" title="Edit" data-toggle="modal"
                      data-target="#editModal{{ $dataUser->nik }}">
                      <span class="feather-icon" data-feather="edit"></span>
                    </button>
                    <button class="btn btn-pill btn-danger btn-air-danger btn-action" type="button" title="Hapus" data-toggle="modal"
                      data-target="#hapusModal{{ $dataUser->nik }}">
                      <span class="feather-icon" data-feather="trash"></span>
                    </button>
                  </div>
                </td>
                <div class="modal fade" id="editModal{{ $dataUser->nik }}" tabindex="-1" role="dialog"
                  aria-labelledby="editModalLabel{{ $dataUser->nik }}" aria-hidden="true">
                  <div class="modal-dialog" role="document">

                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel{{ $dataUser->nik }}">Edit Data
                          Laporan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form action="{{ route('dataUser.update', $dataUser->nik) }}" method="post">
                          @csrf
                          @method('PUT')
                          <div class="form-group">
                            <label for="nama">NIK</label>
                            <input type="text" class="form-control" id="nik" name="nik" value="{{ $dataUser->nik }}"
                              readonly>
                          </div>
                          <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="{{ $dataUser->nama }}"
                              required>
                          </div>
                          <div class="form-group">
                            <label for="jenisKelamin">Jenis Kelamin</label>
                            <select class="form-control" id="jenisKelamin" name="jenisKelamin" required>
                              <option value="Laki Laki" {{ $dataUser->jenisKelamin == 'Laki Laki' ? 'selected' : ''
                                }}>Laki Laki</option>
                              <option value="Perempuan" {{ $dataUser->jenisKelamin == 'Perempuan' ? 'selected' : ''
                                }}>Perempuan</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat"
                              value="{{ $dataUser->alamat }}" required>
                          </div>
                          <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email"
                              value="{{ $dataUser->email }}" required>
                          </div>
                          <div class="form-group">
                            <label for="password">Password</label>
                            <input type="text" class="form-control" id="password" name="password"
                              value="{{ $dataUser->password }}" required>
                          </div>
                          <div class="form-group">
                            <label for="jabatan">Jabatan</label>
                            <input type="text" class="form-control" id="jabatan" name="jabatan"
                              value="{{ $dataUser->jabatan }}" required>
                          </div>
                          <div class="form-group">
                            <label for="levelUser">Level Usr</label>
                            <select class="form-control" id="levelUser" name="levelUser" required>
                              <option value="admin" {{ $dataUser->levelUser == 'admin' ? 'selected' : '' }}>Admin
                              </option>
                              <option value="staff_keuangan" {{ $dataUser->levelUser == 'staff_keuangan' ? 'selected' :
                                '' }}>Staff Keuangan</option>
                              <option value="staf" {{ $dataUser->levelUser == 'staf' ? 'selected' : '' }}>Staff Biasa
                              </option>
                            </select>
                          </div>
                          <!-- Tambahkan input untuk kolom lainnya -->
                          <button type="submit" class="btn btn-primary">Simpan
                            Perubahan</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>


                <!-- Modal Hapus -->
                <div class="modal fade" id="hapusModal{{ $dataUser->nik }}" tabindex="-1" role="dialog"
                  aria-labelledby="hapusModalLabel{{ $dataUser->nik }}" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="hapusModalLabel{{ $dataUser->nik }}">Konfirmasi
                          Hapus</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <p>Apakah Anda yakin ingin menghapus data?</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <form action="{{ route('dataUser.destroy', $dataUser->nik) }}" method="post">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger">Ya, Hapus</button>
                        </form>
                      </div>
                    </div>

                    @empty
              <tr>
                <td colspan="10" class="text-center">
                  <div class="alert alert-danger">Data formulir belum Tersedia.</div>
                </td>
              </tr>
              @endforelse
            </tbody>
          </table><br>
        </div>
      </div>

      <div class="container mt-5">
        <div class="row">
          <!-- Bagian Kiri: Chart -->
          <div class="col-md-6">
            <div class="card border-0 shadow custom-card chart-container">
              <div class="card-body">
                <h5 class="card-title text-center">Perbandingan Staff Laki Laki dan Perempuan</h5>
                <div id="myChart"></div>
              </div>
            </div>
          </div>

          <!-- Bagian Kanan: Total Staff Laki Laki dan Perempuan -->
          <div class="col-md-6">
            <!-- Card Total Staff Laki Laki -->
            <div class="card border-0 shadow custom-card small-card">
              <div class="card-body">
                <h5 class="card-title"><i data-feather="users"></i> Total Staff Laki Laki</h5>
                <p class="card-text h3 text-danger">{{ $totalLakiLaki }}</p>
                <p class="card-text">Total staff laki-laki yang bekerja di Puskesmas Umbansari ada {{ $totalLakiLaki }} mencakup semua data
                  kepegawaian yang telah tercatat. Ini mencerminkan komitmen kami untuk memberikan lingkungan kerja yang
                  inklusif.</p>
              </div>
            </div>

            <!-- Card Total Staff Perempuan -->
            <div class="card border-0 shadow custom-card small-card mt-4">
              <div class="card-body">
                <h5 class="card-title"><i data-feather="users"></i> Total Staff Perempuan</h5>
                <p class="card-text h3 text-danger">{{ $totalPerempuan }}</p>
                <p class="card-text">Total staff perempuan yang bekerja di Puskesmas Umbansari Ada {{ $totalPerempuan }} mencakup semua data
                  kepegawaian yang telah tercatat. Kami berkomitmen untuk menciptakan kesetaraan dalam lingkungan kerja
                  dan memastikan bahwa setiap staf merasa dihargai dan diperlakukan.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

@push('scripts')
<!-- ApexCharts JS -->
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

<!-- ApexCharts JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/apexcharts@3.28.0/dist/apexcharts.min.js"></script>


<!-- SweetAlert2 JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    var data = [{
      x: ['Total Laki Laki', 'Total Perempuan'],
      y: [{{ $totalLakiLaki }}, {{ $totalPerempuan }}],
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

  Plotly.newPlot('myChart', data, layout);
  });
</script>



<script>
  $(document).ready(function () {
    // Cek jika ada pesan sukses dari session
    var successMessage = "{{ session('success') }}";

    if (successMessage) {
      // Pemisahan alert berdasarkan kata kunci
      if (successMessage.includes('Disimpan')) {
        showSuccessAlert('Data berhasil ditambahkan!');
      } else if (successMessage.includes('Diupdate')) {
        showSuccessAlert('Data berhasil diupdate!');
      } else if (successMessage.includes('Dihapus')) {
        showSuccessAlert('Data berhasil dihapus!');
      }
    }

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

<script>
  document.addEventListener("DOMContentLoaded", function () {
    // Tambahkan event listener untuk tombol simpan
    document.getElementById('btnSimpan').addEventListener('click', function () {
      // Periksa apakah formulir valid
      if (document.getElementById('tambahForm').checkValidity()) {
        // Jika valid, kirim formulir
        document.getElementById('tambahForm').submit();
      } else {
        // Jika tidak valid, tampilkan pesan peringatan
        Swal.fire({
          title: 'Peringatan!',
          text: 'Harap isi semua kolom terlebih dahulu.',
          icon: 'warning'
        });
      }
    });
  });
</script>


<!-- chart Lingkaran -->


<script type="text/javascript">
  var div = document.querySelector("div.page-wrapper")
  if (div.classList.contains('compact-sidebar')) {
    div.classList.remove("compact-sidebar");
  }
  if (div.classList.contains('modern-sidebar')) {
    div.classList.remove("modern-sidebar");
  }

  $(document).ready(function () {
    var table = $('#data-table').DataTable({
      "paging": true, // Aktifkan paging
      "lengthMenu": [5, 10, 25], // Pilihan jumlah data yang ditampilkan
      "pageLength": 5, // Jumlah data yang ditampilkan secara default
      "ordering": true
    });

    // Tangkap perubahan pada dropdown pilihan jumlah data
    $('#data-table_length select').change(function () {
      table.page.len($(this).val()).draw();
    });
  });
</script>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<!-- ApexCharts JS -->
<script src="https://cdn.jsdelivr.net/npm/apexcharts@3.28.0/dist/apexcharts.min.js"></script>

<!-- SweetAlert2 JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Prism JS -->
<script src="{{ asset('assets/js/prism/prism.min.js') }}"></script>

<!-- Custom Scripts -->
<script src="{{ asset('assets/js/clipboard/clipboard.min.js') }}"></script>
<script src="{{ asset('assets/js/custom-card/custom-card.js') }}"></script>
<script src="{{ asset('assets/js/tooltip-init.js') }}"></script>

@stack('scripts')


@endpush

@endsection
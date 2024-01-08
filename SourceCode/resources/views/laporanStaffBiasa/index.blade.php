@extends('layouts.staffBiasa.master')

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
<li class="breadcrumb-item active">Laporan</li>
@endcomponent


<div class="container mt-5">
  <div class="row">
    <div class="col-md-12">
      <div class="card border-0 shadow rounded">
        <div class="card-body">
          <!-- Tombol Tambah Laporan -->
          <button type="button" class="btn btn-md btn-primary" data-toggle="modal" data-target="#tambahModal">
            Upload Laporan
          </button><br><br>

          <!-- Modal Tambah Laporan -->
          <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="tambahModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="tambahModalLabel">Tambah Laporan</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form action="{{ route('laporan.store') }}" method="post" enctype="multipart/form-data" id="tambahForm">
                    @csrf
                    <div class="form-group">
                      <label class="font-weight-bold">Judul Laporan</label>
                      <input type="text" class="form-control @error('judulLaporan') is-invalid @enderror" name="judulLaporan"
                        placeholder="Tanggal Masuk" required>
                      @error('judulLaporan')
                      <div class="alert alert-danger mt-2">{{ $message }}</div>
                      @enderror
                    </div>
                    <!-- Tambahkan validasi untuk input keterangan, typeDana, dan jumlahNominal -->
                    <div class="form-group">
                      <label class="font-weight-bold">Keterangan</label>
                      <textarea type="text" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan"
                        placeholder="Keterangan" required></textarea>
                      @error('keterangan')
                      <div class="alert alert-danger mt-2">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label class="font-weight-bold">Penggunaan Dana</label>
                      <input type="text" class="form-control @error('typeDana') is-invalid @enderror" name="typeDana"
                        placeholder="Penggunaan Dana" required>
                      @error('typeDana')
                      <div class="alert alert-danger mt-2">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label class="font-weight-bold">Jumlah Nominal</label>
                      <input type="number" class="form-control @error('jumlahNominal') is-invalid @enderror" name="jumlahNominal"
                        placeholder="Jumlah Nominal" required>
                      @error('jumlahNominal')
                      <div class="alert alert-danger mt-2">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label class="font-weight-bold">File Laporan</label>
                      <input type="file" class="form-control @error('file') is-invalid @enderror" name="file"
                        placeholder="File Laporan" required>
                      @error('file')
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

          <table id="data-table" class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">No.</th>
                <th scope="col">Judul Laporan</th>
                <th scope="col">Keterangan Laporan</th>
                <th scope="col">Penggunaan Dana</th>
                <th scope="col">Jumlah Dana</th>
                <th scope="col">File</th>
               
              </tr>
            </thead>

            <tbody>
              @forelse ($data as $dataLaporan)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $dataLaporan->judulLaporan }}</td>
                <td>{{ $dataLaporan->keterangan }}</td>
                <td>{{ $dataLaporan->typeDana }}</td>
                <td>Rp.{{ number_format($dataLaporan->jumlahNominal, 0, ',', '.') }}</td>
                <td>
                  @if ($dataLaporan->file)
                  @php
                  $fileExtension = pathinfo($dataLaporan->file, PATHINFO_EXTENSION);
                  @endphp
                  @if (in_array($fileExtension, ['pdf', 'doc', 'docx']))
                  <a href="{{ asset('storage/uploads/' . $dataLaporan->file) }}" class="btn btn-sm btn-success"
                    download>Unduh
                    Laporan</a>
                  @else
                  {{ $dataLaporan->file }}
                  @endif
                  @endif
            



                <!-- Modal Edit -->
                <div class="modal fade" id="editModal{{ $dataLaporan->idLaporan }}" tabindex="-1" role="dialog"
                  aria-labelledby="editModalLabel{{ $dataLaporan->idLaporan }}" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel{{ $dataLaporan->idLaporan }}">Edit Data Laporan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form action="{{ route('laporan.update', $dataLaporan->idLaporan) }}" method="post">
                          @csrf
                          @method('PUT')
                          <!-- Isi formulir edit di sini -->
                          <input type="hidden" class="form-control" id="idLaporan" name="idLaporan"
                            value="{{ $dataLaporan->idLaporan }}" readonly>
                          <div class="form-group">
                            <label for="judulLaporan">judulLaporan Data Laporan</label>
                            <input type="text" class="form-control" id="judulLaporan" name="judulLaporan"
                              value="{{ $dataLaporan->judulLaporan }}" required>
                          </div>
                          <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <textarea class="form-control" id="keterangan" name="keterangan" rows="3"
                              required>{{ $dataLaporan->keterangan }}</textarea>
                          </div>
                          <div class="form-group">
                            <label for="jumlahNominal">Jumlah Pemasukan</label>
                            <input type="number" class="form-control" id="jumlahNominal" name="jumlahNominal"
                              value="{{ $dataLaporan->jumlahNominal }}" required>
                          </div>
                          <div class="form-group">
                            <label for="typeDana">Jumlah Pengeluaran</label>
                            <input type="number" class="form-control" id="typeDana" name="typeDana"
                              value="{{ $dataLaporan->typeDana }}" required>
                          </div>
                          <!-- Tambahkan input untuk kolom lainnya -->
                          <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>




                <!-- Modal Hapus -->
                <div class="modal fade" id="hapusModal{{ $dataLaporan->idLaporan }}" tabindex="-1" role="dialog"
                  aria-labelledby="hapusModalLabel{{ $dataLaporan->idLaporan }}" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="hapusModalLabel{{ $dataLaporan->idLaporan }}">Konfirmasi Hapus</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <p>Apakah Anda yakin ingin menghapus data?</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <form action="{{ route('laporan.destroy', $dataLaporan->idLaporan) }}" method="post">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger">Ya, Hapus</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </tr>

              @empty
              <tr>
                <td colspan="10" class="text-center">
                  <div class="alert alert-danger">Data formulir belum Tersedia.</div>
                </td>
                @endforelse
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

@push('scripts')

<!-- SweetAlert2 JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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



<script src="{{ asset(' assets/js/prism/prism.min.js') }}"></script>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


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

<script src="{{ asset(' assets/js/prism/prism.min.js') }}"></script>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script src="{{ asset('assets/js/clipboard/clipboard.min.js') }}"></script>
<script src="{{ asset('assets/js/custom-card/custom-card.js') }}"></script>
<script src="{{ asset('assets/js/tooltip-init.js') }}"></script>
@endpush



@endsection
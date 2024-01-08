@extends('layouts.admin.master')

@section('title') Sistem Keuangan Puskesmas
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/prism.css')}}">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/apexcharts@3.28.0/dist/apexcharts.min.css">
<!-- DataTables CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">



@endpush

@section('content')
@component('components.breadcrumb')
@slot('breadcrumb_title')
<h3>Pengeluaran</h3>
@endslot
<li class="breadcrumb-item active">Data Pengeluaran</li>
@endcomponent

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow rounded">
                <div class="card-body">
                    <!-- Tombol Tambah Laporan -->
                    <button type="button" class="btn btn-md btn-primary" data-toggle="modal" data-target="#tambahModal">
                        Data Pengeluaran
                    </button><br><br>

                    <!-- Modal Tambah Laporan -->
                    <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog"
                        aria-labelledby="tambahModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="tambahModalLabel">Tambah Data Pengeluaran</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('dataPengeluaranAdmin.store') }}" method="post" enctype="multipart/form-data" id="tambahForm">
                                        @csrf
                                        <div class="form-group">
                                            <label class="font-weight-bold">Tanggal Keluar</label>
                                            <input type="date" class="form-control @error('tanggalKeluar') is-invalid @enderror" name="tanggalKeluar"
                                                placeholder="Tanggal Keluar" required>
                                            @error('tanggalKeluar')
                                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <!-- Tambahkan validasi untuk input keterangan, sumberPemasukan, dan jumlahNominal -->
                                        <div class="form-group">
                                            <label class="font-weight-bold">Keterangan</label>
                                            <textarea type="text" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan"
                                                placeholder="Keterangan" required></textarea>
                                            @error('keterangan')
                                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label class="font-weight-bold">Sumber Pengeluaran</label>
                                            <input type="text" class="form-control @error('sumberPengeluaran') is-invalid @enderror"
                                                name="sumberPengeluaran" placeholder="Sumber Pengeluaran" required>
                                            @error('sumberPengeluaran')
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
                                <th scope="col">Tanggal Keluar</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Tujuan Penggunaan Dana</th>
                                <th scope="col">Jumlah Nominal</th>
                                <th scope="col">Aksi</th>

                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($data as $dataPengeluaran)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $dataPengeluaran->tanggalKeluar }}</td>
                                <td>{{ $dataPengeluaran->keterangan }}</td>
                                <td>{{ $dataPengeluaran->sumberPengeluaran }}</td>
                                <td>Rp.{{ number_format($dataPengeluaran->jumlahNominal, 0, ',', '.') }}</td>

                                <td class="text-center">
                                    <button class="btn btn-pill btn-primary btn-air-primary btn-action" type="button" title="Edit" data-toggle="modal"
                                        data-target="#editModal{{ $dataPengeluaran->idPengeluaran }}">
                                        <span class="feather-icon" data-feather="edit"></span>
                                    </button>
                                    <button class="btn btn-pill btn-danger btn-air-danger btn-action" type="button" title="Hapus" data-toggle="modal"
                                        data-target="#hapusModal{{ $dataPengeluaran->idPengeluaran }}">
                                        <span class="feather-icon" data-feather="trash"></span>
                                    </button>

                                </td>

                                <!-- Modal Edit -->
                                <div class="modal fade" id="editModal{{ $dataPengeluaran->idPengeluaran }}"
                                    tabindex="-1" role="dialog"
                                    aria-labelledby="editModalLabel{{ $dataPengeluaran->idPengeluaran }}"
                                    aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title"
                                                    id="editModalLabel{{ $dataPengeluaran->idPengeluaran }}">Edit Data
                                                    Laporan</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form
                                                    action="{{ route('dataPengeluaranAdmin.update', $dataPengeluaran->idPengeluaran) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('PUT')
                                                    <!-- Isi formulir edit di sini -->
                                                    <input type="hidden" class="form-control" id="idPengeluaran"
                                                        name="idPengeluaran"
                                                        value="{{ $dataPengeluaran->idPengeluaran }}" readonly>

                                                    <div class="form-group">
                                                        <label for="tanggalKeluar">Tanggal Keluar</label>
                                                        <input type="date" class="form-control" id="tanggalKeluar"
                                                            name="tanggalKeluar"
                                                            value="{{ $dataPengeluaran->tanggalKeluar }}" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="keterangan">Keterangan</label>
                                                        <textarea class="form-control" id="keterangan" name="keterangan"
                                                            rows="3"
                                                            required>{{ $dataPengeluaran->keterangan }}</textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="sumberPengeluaran">Sumber Pengeluaran</label>
                                                        <input type="text" class="form-control" id="sumberPengeluaran"
                                                            name="sumberPengeluaran"
                                                            value="{{ $dataPengeluaran->sumberPengeluaran }}" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="jumlahNominal">Jumlah Nominal</label>
                                                        <input type="number" class="form-control" id="jumlahNominal"
                                                            name="jumlahNominal"
                                                            value="{{ $dataPengeluaran->jumlahNominal }}" required>
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
                                <div class="modal fade" id="hapusModal{{ $dataPengeluaran->idPengeluaran }}"
                                    tabindex="-1" role="dialog"
                                    aria-labelledby="hapusModalLabel{{ $dataPengeluaran->idPengeluaran }}"
                                    aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title"
                                                    id="hapusModalLabel{{ $dataPengeluaran->idPengeluaran }}">Konfirmasi
                                                    Hapus</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Apakah Anda yakin ingin menghapus data?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Batal</button>
                                                <form
                                                    action="{{ route('dataPengeluaranAdmin.destroy', $dataPengeluaran->idPengeluaran) }}"
                                                    method="post">
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
                            </tr>
                            @endforelse
                        </tbody>
                    </table><br>
                        </div>
                    </div>
                    <div class="row">
                        <!-- Chart Pie -->
                        <div class="col-md-6">
                            <div class="card border-0 shadow rounded">
                                <div class="card-header pb-0">
                                    <h5>Grafik</h5>
                                </div>
                                <div class="card-body">
                                    <div id="basic-apex" class="apex-charts"></div>
                                </div>
                            </div>
                        </div>
                    
                        <!-- Chart Lingkaran -->
                        <div class="col-md-6">
                            <div class="card border-0 shadow rounded">
                                <div class="card-header pb-0">
                                    <h5>Total Data Pengeluaran</h5>
                                </div>
                                <div class="card-body">
                                    <div id="circle-apex" class="apex-charts"></div>
                                </div>
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
<!-- SweetAlert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>


        <!-- ApexCharts JS -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/apexcharts@3.28.0/dist/apexcharts.min.js"></script>

<script>
    document.getElementById('btnSimpan').addEventListener('click', function () {
            console.log('Button clicked!'); // Tambahkan ini
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

</script>

<script>
    $(document).ready(function () {
        // Cek jika ada pesan sukses dari session
        var successMessage = "{{ session('success') }}";

        if (successMessage) {
            // Pemisahan alert berdasarkan kata kunci
            if (successMessage.includes('Disimpan')) {
                showSuccessAlert('Data pengeluaran berhasil ditambahkan!');
            } else if (successMessage.includes('Diupdate')) {
                showSuccessAlert('Data pengeluaran berhasil diupdate!');
            } else if (successMessage.includes('Dihapus')) {
                showSuccessAlert('Data pengeluaran berhasil dihapus!');
            }
        }

        function showSuccessAlert(message) {
            Swal.fire({
                title: 'Sukses!',
                text: message,
                icon: 'success',
                timer: 3000, // Durasi tampilan alert (ms)
                showConfirmButton: false
            });
        }

        // Tambahkan event listener untuk tombol simpan
        document.getElementById('btnSimpan').addEventListener('click', function () {
            // Periksa apakah formulir valid
            if (document.getElementById('tambahForm').checkValidity()) {
                // Jika valid, kirim formulir
                document.getElementById('tambahForm').submit();
            } else {
                // Jika tidak valid, tampilkan pesan peringatan
                showValidationErrorAlert('Harap isi semua kolom terlebih dahulu.');
            }
        });

        function showValidationErrorAlert(message) {
            Swal.fire({
                title: 'Peringatan!',
                text: message,
                icon: 'warning'
            });
        }
    });
</script>

<script>
    $(document).ready(function () {
        // Cek jika ada pesan sukses dari session
        var successMessage = "{{ session('success') }}";

        if (successMessage) {
            // Pemisahan alert berdasarkan kata kunci
            if (successMessage.includes('Disimpan')) {
                showSuccessAlert('Data pengeluaran berhasil ditambahkan!');
            } else if (successMessage.includes('Diupdate')) {
                showSuccessAlert('Data pengeluaran berhasil diupdate!');
            } else if (successMessage.includes('Dihapus')) {
                showSuccessAlert('Data pengeluaran berhasil dihapus!');
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

        // Tambahkan event listener untuk tombol simpan
        document.getElementById('btnSimpan').addEventListener('click', function () {
            // Periksa apakah formulir valid
            if (document.getElementById('tambahForm').checkValidity()) {
                // Jika valid, kirim formulir
                document.getElementById('tambahForm').submit();
            } else {
                // Jika tidak valid, tampilkan pesan peringatan
                showValidationErrorAlert('Harap isi semua kolom terlebih dahulu.');
            }
        });

        function showValidationErrorAlert(message) {
            Swal.fire({
                title: 'Peringatan!',
                text: message,
                icon: 'warning'
            });
        }
    });
</script>


        <!-- chart Lingkaran -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
                var bulanMasuk = {!! json_encode($bulanKeluar)!!};
            var jumlahNominal = {!! json_encode($jumlahNominal)!!};

            var options = {
                chart: {
                    type: 'radialBar',
                    height: 350,
                    toolbar: {
                        show: false
                    }
                },
                plotOptions: {
                    radialBar: {
                        dataLabels: {
                            total: {
                                show: true,
                                label: 'Total Pengeluaran',
                                formatter: function () {
                                    return 'Rp ' + jumlahNominal.reduce((a, b) => a + b, 0)
                                        .toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                                }
                            }
                        }
                    }
                },
                labels: bulanMasuk,
                series: jumlahNominal,
                colors: ["#24695C", "#4CAF50", "#2196F3", "#FF9800", "#FF5722"], // Sesuaikan dengan warna yang diinginkan
                responsive: [{
                    breakpoint: 600,
                    options: {
                        chart: {
                            toolbar: {
                                show: false
                            }
                        }
                    }
                }]
            };

            var chart = new ApexCharts(document.querySelector("#circle-apex"), options);
            chart.render();
    });


    </script>


        <script>
            document.addEventListener("DOMContentLoaded", function () {
                var bulanMasuk = {!! json_encode($bulanKeluar)!!};
            var jumlahNominal = {!! json_encode($jumlahNominal)!!};

            var options = {
                chart: {
                    height: 350,
                    type: 'area',
                    toolbar: {
                        show: false
                    }
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    curve: 'smooth',
                    width: 3
                },
                series: [{
                    name: 'Jumlah Nominal',
                    data: jumlahNominal
                }],
                xaxis: {
                    categories: bulanMasuk,
                    labels: {
                        style: {
                            fontSize: '14px',
                            fontWeight: 600,
                        }
                    }
                },
                yaxis: {
                    labels: {
                        formatter: function (value) {
                            return 'Rp ' + value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        },
                        style: {
                            fontSize: '14px',
                            fontWeight: 600,
                        }
                    }
                },
                fill: {
                    type: 'gradient',
                    gradient: {
                        shadeIntensity: 1,
                        opacityFrom: 0.7,
                        opacityTo: 0.2,
                        stops: [0, 100, 100, 100]
                    }
                },
                tooltip: {
                    y: {
                        formatter: function (value) {
                            return 'Rp ' + value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        }
                    }
                },
                grid: {
                    borderColor: '#f1f1f1',
                },
                colors: ["#24695C"], // Ganti dengan kode warna hijau yang diinginkan
                markers: {
                    size: 5,
                    colors: ["#24695C"], // Ganti dengan kode warna hijau yang diinginkan
                    strokeColors: "#fff",
                    strokeWidth: 3,
                    hover: {
                        size: 7,
                    }
                },
                responsive: [{
                    breakpoint: 600,
                    options: {
                        chart: {
                            toolbar: {
                                show: false
                            }
                        }
                    }
                }]
            };

            var chart = new ApexCharts(document.querySelector("#basic-apex"), options);
            chart.render();
        });

        </script>

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
    
        <script src="{{ asset('assets/js/prism/prism.min.js') }}"></script>
        
       <!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="{{ asset('assets/js/clipboard/clipboard.min.js') }}"></script>
        <script src="{{ asset('assets/js/custom-card/custom-card.js') }}"></script>
        <script src="{{ asset('assets/js/tooltip-init.js') }}"></script>
        

@endpush

@endsection
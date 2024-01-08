@extends('layouts.staffKeuangan.master')

@section('title') Sistem Keuangan Puskesmas @endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/prism.css') }}">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<!-- Perubahan -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<style>
  #exportBtn,
  #exportPdfBtn {
    margin-left: 10px;
  }

  #exportPdfBtn i {
    margin-right: 5px;
  }
</style>
@endpush

@section('content')
@component('components.breadcrumb')
@slot('breadcrumb_title')
<h3>Data {{ $jenis == 'Pemasukkan' ? 'Pemasukkan' : 'Pengeluaran' }}</h3>
@endslot
<li class="breadcrumb-item active">Data Pelaporan</li>
@endcomponent

<div class="container mt-5">
  <div class="row">
    <div class="col-md-12">
      <div class="card border-0 shadow rounded">
        <div class="card-body">

          <!-- Tabel Data -->
          <table id="data-table" class="table table-bordered"
            style="border-collapse: collapse; border-spacing: 0; width: 100%; border: 1px solid #ddd;">
            <thead>
              <tr>
                <th scope="col">No.</th>
                <th scope="col">Tanggal Masuk</th>
                <th scope="col">Keterangan</th>
                <th scope="col">
                  {{ $jenis == 'Pemasukkan' ? 'Sumber Pemasukan' : 'Keperluan Pengeluaran' }}
                </th>
                <th scope="col">Jumlah</th>
              </tr>
            </thead>

            <tbody>
              @forelse ($data as $row)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>
                  @if($jenis == 'Pemasukkan')
                  {{ $row->tanggalMasuk }}
                  @else
                  {{ $row->tanggalKeluar }}
                  @endif
                </td>
                <td>{{ $row->keterangan }}</td>
                <td>
                  @if($jenis == 'Pemasukkan')
                  {{ $row->sumberPemasukan }}
                  @else
                  {{ $row->sumberPengeluaran }}
                  @endif
                </td>
                <td>{{ $row->jumlahNominal }}</td>
              </tr>
              @empty
              <tr>
                <td colspan="5" class="text-center">
                  <div class="alert alert-danger">Data formulir belum Tersedia.</div>
                </td>
              </tr>
              @endforelse
            </tbody>
          </table>
        
          <!-- Button Export Excel dan PDF -->
          <div class="row">
            <div class="col-md-4 text-left mt-3">
              <a href="{{ route('cetak.index') }}" class="btn btn-primary">Kembali</a>
            </div>
            <div class="col-md-8 text-right mt-3">
              <a href="#" id="exportBtn" class="btn btn-success">Export to Excel</a>
              <a href="#" id="exportPdfBtn" class="btn btn-danger"><i class="fas fa-file-pdf"></i> Export to PDF</a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

@push('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="{{ asset('assets/js/prism/prism.min.js') }}"></script>
<script src="{{ asset('assets/js/clipboard/clipboard.min.js') }}"></script>
<script src="{{ asset('assets/js/custom-card/custom-card.js') }}"></script>
<script src="{{ asset('assets/js/tooltip-init.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.4/xlsx.full.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.5/FileSaver.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/exceljs/4.4.0/exceljs.min.js"></script>
<script src="https://cdn.rawgit.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.js"></script>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('exportBtn').addEventListener('click', exportToExcel);
    
    function exportToExcel() {
      var workbook = new ExcelJS.Workbook();
      var worksheet = workbook.addWorksheet('Laporan Keuangan');

      var titleRow = worksheet.addRow(['Laporan Keuangan Puskesmas Umban Sari']);
      titleRow.font = { size: 16, bold: true };
      titleRow.alignment = { horizontal: 'center' };
      worksheet.mergeCells(`A1:E1`);

      var data = [['No.', 'Tanggal Masuk', 'Keterangan', 'Sumber', 'Jumlah']];
      document.querySelectorAll('#data-table tbody tr').forEach(function (row, index) {
        var rowData = [
          index + 1,
          row.cells[1].textContent.trim(),
          row.cells[2].textContent.trim(),
          row.cells[3].textContent.trim(),
          row.cells[4].textContent.trim()
        ];
        data.push(rowData);
      });

      var headerRow = worksheet.addRow(data[0]);
      headerRow.font = { bold: true, color: { argb: 'FFFFFF' } };
      headerRow.eachCell({ includeEmpty: true }, function (cell, colNumber) {
        cell.border = { top: { style: 'thin' }, bottom: { style: 'thin' }, left: { style: 'thin' }, right: { style: 'thin' } };
        if (colNumber > 0) {
          cell.fill = { type: 'pattern', pattern: 'solid', fgColor: { argb: '24695c' } };
        }
        if (colNumber > 0) {
          cell.font = { color: { argb: 'FFFFFF' } };
        }
      });

      worksheet.getColumn(1).width = 5;
      worksheet.getColumn(2).width = 20;
      worksheet.getColumn(3).width = 50;
      worksheet.getColumn(4).width = 20;
      worksheet.getColumn(5).width = 15;

      for (var i = 1; i < data.length; i++) {
        var dataRow = worksheet.addRow(data[i]);
        dataRow.eachCell({ includeEmpty: true }, function (cell, colNumber) {
          cell.border = { top: { style: 'thin' }, bottom: { style: 'thin' }, left: { style: 'thin' }, right: { style: 'thin' } };
          cell.alignment = { vertical: 'middle', horizontal: 'left' };
          if (colNumber > 0) {
            cell.fill = { type: 'pattern', pattern: 'solid', fgColor: { argb: 'FFFFFF' } };
          }
        });
      }

      workbook.xlsx.writeBuffer().then(function (buffer) {
        var blob = new Blob([buffer], { type: 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet' });
        saveAs(blob, 'Laporan Keuangan.xlsx');
      });
    }
  });
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
<script src="https://rawgit.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.js"></script>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    // Menambahkan event listener ke tombol export PDF
    var exportPdfBtn = document.getElementById('exportPdfBtn');
    if (exportPdfBtn) {
      exportPdfBtn.addEventListener('click', handleExportToPDF);
    }

    // Fungsi untuk mengekspor tabel sebagai file PDF
    function handleExportToPDF() {
      var element = document.getElementById('data-table');
      if (element) {
        exportTableToPDF(element);
      } else {
        console.error('Table element not found.');
      }
    }

    // Fungsi untuk mengekspor tabel sebagai file PDF menggunakan html2pdf
    function exportTableToPDF(tableElement) {
      if (!html2pdf) {
        console.error('html2pdf library not found.');
        return;
      }

      // Mengambil judul besar
      var title = 'Laporan Keuangan Puskesmas Umban Sari';

      // Menggunakan html2pdf
      html2pdf(tableElement, {
        margin: 10,
        filename: 'Laporan Keuangan.pdf',
        image: { type: 'jpeg', quality: 0.98 },
        html2canvas: { scale: 2 },
        jsPDF: { unit: 'mm', format: 'a4', orientation: 'portrait' },
        letterRendering: true, // Menangani teks dengan cara yang lebih baik
        autoPaging: true, // Menangani konten yang melewati satu halaman
        onBeforeSave: function (pdf) {
          // Menambahkan judul di bagian atas PDF
          pdf.text(title, 15, 15);
        }
      });
    }
  });
</script>






@endpush

@endsection
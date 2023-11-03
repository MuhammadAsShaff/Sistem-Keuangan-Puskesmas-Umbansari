# Sistem Management Keuangan Puskesmas Umban Sari



# BAB I Pendahuluan

## 1.1 Tujuan
Dokument Software Requirement Specification (SRS) merupakan dokumen spesifikasi perangkat lunak untuk membangun "Sistem Management Keuangan Puskesmas Umban Sari".Dokumen ini di bangun untuk membantu dan memudahkan Petugas kesehatan Puskesmas Umban Sari untuk mengatur dan memanage keuangan di Puskesmas.Sehingga Dokumen ini dapat di jadikan acuan membangun perangkat lunak "Sistem Management Keuangan Puskesmas Umban Sari"


## 1.2 Lingkup
Sistem Management Keuangan Puskesmas Umban Sari merupakan sistem yang kami bangun untuk memudahkan petugas Puskesmas Umban Sari dalam mengatur keuangan, baik itu pemasukan keuangan, pengeluaran dalam pemebelian obat obatan,pengeluaran untuk pembayaran gaji petugas,serta pengeluaran terhadap pemeliharaan rutin Puskesmas.


## 1.3 Akronim,Singkatan,Definisi
| Istilah | Definisi |
| ------ | ------ |
| SRS |  Software Requirement Specification |
| Software Requirement Specification  | Dokumen yang menggambarkan secara rinci kebutuhan fungsional dan non-fungsional dari sistem yang kita kembangkan |
|Usecase|Situasi dimana sistem anda digunakan untuk memenuhi satu atau lebih kebutuhan pemakaian anda|
|Login|Digunakan untuk mengakses aplikasi|


## 1.4 Referensi
Referensi yang digunakan dalam pengembangan perangkat lunak ini adalah:
- blabla


## 1.5 Overview
Bab selanjutnya yaitu menjelaskan sistem yang di terapkan pada aplikasi. Menjelaskan gambaran umum dari aplikasi, sistem interface aplikasi dan alur sistemnya. Bab terakhir menjelaskan tentang setiap fungsi yang digunakan secara teknisnya. Pada bab 2 dan 3 merupakan deskripsi dari aplikasi yang akan diterapkan pada aplikasi yang dibuat.

# BAB II Gambaran umum
Pada zaman era globalisasi perkembangan teknologi begitu sangat pesat, salah satunya ialah perkembangan teknologi di bidang software engineering dimana software engineering dapat digunakan dalam kehidupan sehari - hari .dalam studi kasus Proyek II ini kami menganalisis kebutuhan Puskesmas dalam memanage keuangan Puskesmas tersebut.Kasus yang kami peroleh yaitu Sistem Management Keuangan Puskesmas. Maka dari itu kami sebagai software engineering merancang sebuah sistem sesuai dengan kebutuhan Kepala Puskesmas dengan menerapkan Sistem Management Keuangan Puskesmas Umban Sari. Sehingga memudahkan Petugas Puskesmas dalam mengelola keuangan.Software yang kami buat ini berbasis website dimana website sebagai admin itu petugas keuangan. Sistem yang kami buat di dalamnya terdapat
(Daftar keuangan masuk,keuangan keluar masih ragu).Berikut akan kami jelaskan sistem software kami, Petugas fungsi utama yaitu :
- Input
- Input 
- Input
- Input
- Input
- Input
- Input
- Input

## 2.1 Perspektif produk
Management Keuangan Puskesmas Umban Sari adalah sebuah Sistem Management Keuangan Puskesmas yang di aplikasiskan pada website. Terdapat 3 jenis yaitu admin,staff Keuangan dan staff biasa. Pengolahan data user di kelola oleh admin, pengolahan keuangan dikelola oleh staff keuangan,staff dan kepala Puskesmas hanya melihat grafik dan laporan pada website.

Pada sistem Management keuangan Puskesmas Umban Sari ini akan menampilkan grafik keuangan masuk dan keluar yang sudah di inputkan oleh staff keuangan

##### 2.1.1 Antarmuka sistem
Sistem aplikasi Management Keuangan Puskesmas Umban Sari memiliki 3 user yaitu staff keuangan, staff biasa dan admin. Staff biasa mempunyai fungsi yaitu melakukan view grafik dan bisa view laporan. Admin bertugas untuk mengelola data User,dan staff keuangan mempunyaifungsi yaitu untuk memasukkan data keuangan Puskesmas Umban Sari

##### 2.1.2 Antarmuka pengguna

- **Mockup Admin ( Website )**

##### 2.1.3 Antarmuka perangkat keras
Antarmuka perangkat keras yang digunakan untuk mengoperasikan Perangkat Lunak Manajemen Keuangan Puskesmas Umban Sari   antara lain :

PC / Laptop Untuk menjalankan Aplikasi ini admin membutuhkan sebuah PC yang menggunakan OS Windows, Linux, atau MAC dan sudah terinstall browser .

##### 2.1.4 Antarmuka perangkat lunak

Tidak ada

##### 2.1.5 Antarmuka Komunikasi

Antarmuka komunikasi yang digunakan untuk mengoperasikan Perangkat Lunak Manajemen Administrasi Data Kependudukan Desa Lohbener antara lain :

1. Kabel Lan UTP RJ45
2. Modem
3. Wifi

##### 2.1.6 Batasan memori

Tidak ada

##### 2.1.7 Operasi-operasi

| Operasi | Fungsi |
| ------ | ------ |
|Login|Di gunakan untuk masuk dan mengakses sistem Manajemen Keuangan|
|Input Data|Di gunakan untuk memasukkan data keuangan Puskesmas|
|Kembali|Digunakan untuk kembali ke halaman sebelumnya|
|Hapus|Menghapus Data Yang sudah di masukkan sebelumnya|
|Edit|Di gunakan untuk mengubah data yang sebelumnyasudah di masukkan|
|View|Digunakan untuk menampilkan data yang sudah di simpan|
|Simpan|Digunakan untuk menyimpan data yang kita masukkan|
|Cetak|Digunakan untuk mencetak pelaporan keuangan|

##### 2.1.8 Kebutuhan adaptasi

Tidak ada

## 2.2 Spesifikasi Kebutuhan fungsional

##### 2.2.1 Admin Login
Use Case: Login <br>
Diagram:
<br>
Deskripsi Singkat Admin melakukan login terlebih dahulu sebelum masuk ke tampilan home

1.Admin melakukan login dengan username dan password
2.Sistem melakukan validasi login
3.Bila sukses sistem akan mengarahkan ke halaman beranda
4.Bila gagal sistem akan menampilkan peringatan untuk login ulang

Xref: Bagian 3.2.1, Login Kepala Desa

##### 2.2.2 Staff Keuangan Login

Use Case: Login <br>
Diagram:
<br>
Deskripsi Singkat Staff Keuangan melakukan login terlebih dahulu sebelum masuk ke tampilan home

1.Staff Keuangan melakukan login dengan username dan password
2.Sistem melakukan validasi login
3.Bila sukses sistem akan mengarahkan ke halaman beranda
4.Bila gagal sistem akan menampilkan peringatan untuk login ulang

<!-- Use Case: Mengelola user <br>
Diagram:
<br>
Deskripsi Singkat Admin mengelola data user setelah melakukan login pada sistem

1.Admin melakukan inputkan data pribadi dari masing masing pengguna
2.Admin mengklik tombol simpan
3.Sistem menyimpan data user
4.Bila data sudah ada sistem akan menampilkan peringatan
5.Dan bila data belum ada maka akan menampilkan pemberitahuan berhasil -->

##### 2.2.3 Staff Biasa Login

Use Case: Login <br>
Diagram:
<br>
Deskripsi Singkat Staff Biasa melakukan login terlebih dahulu sebelum masuk ke tampilan home

1.Staff Biasa melakukan login dengan username dan password
2.Sistem melakukan validasi login
3.Bila sukses sistem akan mengarahkan ke halaman beranda
4.Bila gagal sistem akan menampilkan peringatan untuk login ulang

##### 2.2.4 Admin Mengelola User




<!-- Use Case: Mengelola Data Keuangan <br>
Diagram:
<br>
Deskripsi Singkat Staff Keuangan mengelola data keuangan setelah melakukan login pada sistem

1.Staff Keuangan melakukan inputkan data pribadi dari masing masing pengguna
2.Admin mengklik tombol simpan
3.Sistem menyimpan data user
4.Bila data sudah ada sistem akan menampilkan peringatan
5.Dan bila data belum ada maka akan menampilkan pemberitahuan berhasil -->

##### 2.2.5 Staff Keuangan Mengelola data Keuangan

##### 2.2.6 Staff Biasa Melihat Data Keuangan

##### 2.2.7 Staff Keuangan Mencetak Laporan Keuangan

##### 2.2.8 Staff Biasa Mencetak Laporan Keuangan

## 2.3 Spesifikasi Kebutuhan non-fungsional
- Tabel Kebutuhan Non-Fungsional
| No | 	Deskripsi |
| ------ | ------ |
|      1  |    Semua interface dan fungsi menggunakan Bahasa Indonesia  |
|    2    |  Perangkat Lunak dapat dipakai di semua platofrm OS ( Admin, Staff Keuangan dan Staff Biasa ) |


## 2.4 Karakteristik pengguna
Karakteristik pengguna dari perangkat lunak ini adalah pengguna langsung berinteraksi dengan sistem tanpa harus dihubungkan dengan hak akses atau level autentikasi.

## 2.5 Batasan-batasan
- Perangkat lunak web hanya dijalankan di windows (7,8,10).
- Waktu pengembangan perangkat lunak yang singkat membuat adanya kemungkinan tidak semua fungsi yang ada dapat dilaksanakan.

## 2.6 Asumsi-asumsi
Maksimal penginputan id atau memasukkan kode pada aplikasi ini adalah 9999, lebih dari itu program akan muncul peringatan"Anda telah melebihi batas maksimum".

## 2.7 Kebutuhan Penyeimbang
Tidak Ada

# BAB III Requirement specification

## 3.1 Persyaratan Antarmuka Eksternal
Salah satu cara mengakses aplikasi ini yaitu dengan hak akses yang di berikan oleh admmin, login melalui aplikasi ini dengan mencantumkan username kemudian sistem akan mencocokkan username Staff Keuangan dan Staff Biasa. Setelah login berhasil Staff Biasa melihat grafik Keuangan Puskesmas Umban Sari di aplikasi tersebut dan juga dapat melakukan pencetakan hasil pelaporan keuangan selama sebuan/pertahunnya.

## 3.2 Functional Requirement
Logika Struktur terdapat pada bagian 3.3.1

##### 3.2.1 Admin Login

| Nama Fungsi |Laporan |
| ------ | ------ |
|    Xref    |        |
|    Trigger    |        |
|Precondition||
|Basic Path||
|Alternative||
|Pos Condition||
|Exception Push||


##### 3.2.2 Staff Keuangan Login

| Nama Fungsi |Laporan |
| ------ | ------ |
|    Xref    |        |
|    Trigger    |        |
|Precondition||
|Basic Path||
|Alternative||
|Pos Condition||
|Exception Push||


##### 3.2.3 Staff Biasa Login

| Nama Fungsi |Laporan |
| ------ | ------ |
|    Xref    |        |
|    Trigger    |        |
|Precondition||
|Basic Path||
|Alternative||
|Pos Condition||
|Exception Push||


##### 3.2.4 Admin Mengelola User

| Nama Fungsi |Laporan |
| ------ | ------ |
|    Xref    |        |
|    Trigger    |        |
|Precondition||
|Basic Path||
|Alternative||
|Pos Condition||
|Exception Push||


##### 3.2.5 Staff Keuangan Mengelola data Keuangan

| Nama Fungsi |Laporan |
| ------ | ------ |
|    Xref    |        |
|    Trigger    |        |
|Precondition||
|Basic Path||
|Alternative||
|Pos Condition||
|Exception Push||


##### 3.2.6 Staff Biasa Melihat Data Keuangan

| Nama Fungsi |Laporan |
| ------ | ------ |
|    Xref    |        |
|    Trigger    |        |
|Precondition||
|Basic Path||
|Alternative||
|Pos Condition||
|Exception Push||


##### 3.2.7 Staff Keuangan Mencetak Laporan Keuangan

| Nama Fungsi |Laporan |
| ------ | ------ |
|    Xref    |        |
|    Trigger    |        |
|Precondition||
|Basic Path||
|Alternative||
|Pos Condition||
|Exception Push||


##### 3.2.8 Staff Biasa Mencetak Laporan Keuangan
| Nama Fungsi |Laporan |
| ------ | ------ |
|    Xref    |        |
|    Trigger    |        |
|Precondition||
|Basic Path||
|Alternative||
|Pos Condition||
|Exception Push||

## 3.3 Struktur Detail Kebutuhan Non-fungsional

##### 3.3.1 Logika Struktur Data<br>
Struktur data logika pada sistem Aplikasi presensi menggunakan kehadiran terdapat struktur Database yang dijelaskan menggunakan ERD.

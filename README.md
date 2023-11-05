<div align="center">

# <br> <br>PROPOSAL WORKSHOP <br> PEMROGRAMAN FRAMEWORK <br><br><br>


<!-- ##### 6 November 2023 -->

 <img width="600" src="image/Logo_Politeknik_Caltex_Riau.png" alt="PCR">

#### Sistem Manajemen <br> Keuangan Puskesmas Umban Sari 
<br><br><br>

Kelompok 6 <br>
Muhammad As Shaff (2257301088)<br>
Yoga Hermanda (2257301135)<br>
Indah Novitriani (2257301139)<br>
KELAS
2 SIA

<br><br>

DOSEN PENGAMPU : <br> 
Muhammad Mahrus Zain,S.S.T., M.T.I.<br>

AIL : <br>
Nur  Mufidah, S.Tr.Kom 
<br><br><br>

### PROGRAM STUDI SISTEM INFORMASI <br> POLITEKNIK CALTEX RIAU <br> TA 2023 / 2024

</div>

# BAB I Pendahuluan

## 1.1 Tujuan
Dokument Software Requirement Specification (SRS) merupakan dokumen spesifikasi perangkat lunak untuk membangun "Sistem Manajemen Keuangan Puskesmas Umban Sari".Dokumen ini di bangun untuk membantu dan memudahkan Petugas kesehatan Puskesmas Umban Sari untuk mengatur dan memanage keuangan di Puskesmas.Sehingga Dokumen ini dapat di jadikan acuan membangun perangkat lunak "Sistem Manajemen Keuangan Puskesmas Umban Sari"


## 1.2 Lingkup
Sistem Manajemen Keuangan Puskesmas Umban Sari merupakan sistem yang kami bangun untuk memudahkan petugas Puskesmas Umban Sari dalam mengatur keuangan, baik itu pemasukan keuangan, pengeluaran dalam pemebelian obat obatan,pengeluaran untuk pembayaran gaji petugas,serta pengeluaran terhadap pemeliharaan rutin Puskesmas.


## 1.3 Akronim,Singkatan,Definisi
| Istilah | Definisi |
| ------ | ------ |
| SRS |  Software Requirement Specification |
| Software Requirement Specification  | Dokumen yang menggambarkan secara rinci kebutuhan fungsional dan non-fungsional dari sistem yang kita kembangkan |
|Usecase|Situasi dimana sistem anda digunakan untuk memenuhi satu atau lebih kebutuhan pemakaian anda|
|Login|Digunakan untuk mengakses aplikasi|


## 1.4 Referensi
Referensi yang digunakan dalam pengembangan perangkat lunak ini adalah:
- Hasil wawancara dari kepala Puskesmas Umban Sari


## 1.5 Overview
Bab selanjutnya yaitu menjelaskan sistem yang di terapkan pada aplikasi. Menjelaskan gambaran umum dari aplikasi, sistem interface aplikasi dan alur sistemnya. Bab terakhir menjelaskan tentang setiap fungsi yang digunakan secara teknisnya. Pada bab 2 dan 3 merupakan deskripsi dari aplikasi yang akan diterapkan pada aplikasi yang dibuat.

# BAB II Gambaran umum
Pada zaman era globalisasi perkembangan teknologi begitu sangat pesat, salah satunya ialah perkembangan teknologi di bidang software engineering dimana software engineering dapat digunakan dalam kehidupan sehari - hari .dalam studi kasus Proyek II ini kami menganalisis kebutuhan Puskesmas dalam memanage keuangan Puskesmas tersebut.Kasus yang kami peroleh yaitu Sistem Manajemen Keuangan Puskesmas. Maka dari itu kami sebagai software engineering merancang sebuah sistem sesuai dengan kebutuhan Kepala Puskesmas dengan menerapkan Sistem Manajemen Keuangan Puskesmas Umban Sari. Sehingga memudahkan Petugas Puskesmas dalam mengelola keuangan.Software yang kami buat ini berbasis website dimana website sebagai admin, staff keuangan dan staff biasa. Sistem yang kami buat di dalamnya terdapat
Data pemasukan,data pengeluaran,laporan keuangan,grafik data pemasukan dan pengeluaran (Untuk staff keuangan), grafik data pemasukan, grafik data pengeluaran dan laporan (Untuk Staff biasa),pengelolaan data user (Untuk admin).<br>
Berikut akan kami jelaskan sistem software kami,Admin fungsi utama yaitu :
- Input Nama User (Staff Puskesmas)
- Input Tempat Lahir
- Input Tanggal Lahir
- Input E-mail
- Input Jenis Kelamin
- Input Agama
- Input No Telepon
- Input Alamat
- Input Jabatan

Berikut ini fungsi staff keuangan:
- Input Tanggal pengeluaran
- Input Keterangan pengeluaran
- Input Keperluan pengeluaran
- Input jumlah pengeluaran
- Input Tanggal pemasukan
- Input Keterangan pemasukan
- Input Sumber pemasukan
- Input jumlah pemasukan
- Mencetak laporan pemasukan
- Mencetak laporan pengeluaran

Berikut ini fungsi staff biasa:
- View grafik pengeluaran
- View grafik pemasukan
- Mencetak laporan

## 2.1 Perspektif produk
Manajemen Keuangan Puskesmas Umban Sari adalah sebuah Sistem Manajemen Keuangan Puskesmas yang di aplikasiskan pada website. Terdapat 3 jenis yaitu admin,staff Keuangan dan staff biasa. Pengolahan data user di kelola oleh admin, pengolahan keuangan dikelola oleh staff keuangan,staff dan kepala Puskesmas hanya melihat grafik dan laporan pada website.

Pada sistem Manajemen keuangan Puskesmas Umban Sari ini akan menampilkan grafik keuangan masuk dan keluar yang sudah di inputkan oleh staff keuangan

##### 2.1.1 Antarmuka sistem
![alt text](image/antarMukaSistem.png?raw=true)
Sistem aplikasi Manajemen Keuangan Puskesmas Umban Sari memiliki 3 user yaitu staff keuangan, staff biasa dan admin. Staff biasa mempunyai fungsi yaitu melakukan view grafik dan bisa view laporan. Admin bertugas untuk mengelola data User,dan staff keuangan mempunyaifungsi yaitu untuk memasukkan data keuangan Puskesmas Umban Sari

##### 2.1.2 Antarmuka pengguna

- **Mockup Admin ( Website )**

|  |  |
| ------ | ------ |
|    ![alt text](Interface/HalamanBerandaMasuk.jpeg?raw=true)    |  ![alt text](Interface/HalamanLogin.jpeg?raw=true)      |
|        |        |

##### 2.1.3 Antarmuka perangkat keras
![alt text](image/Antarmuka_Perangkat_Keras.png?raw=true)
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

![alt text](image/UseCaseDiagram.jpg?raw=true)

##### 2.2.1 Admin Login
Use Case: Login <br>
Diagram:![alt text](image/adminLogin.jpg?raw=true)
<br>
Deskripsi Singkat Admin melakukan login terlebih dahulu sebelum masuk ke tampilan home

1. Admin melakukan login dengan username dan password
2. Sistem melakukan validasi login
3. Bila sukses sistem akan mengarahkan ke halaman beranda
4. Bila gagal sistem akan menampilkan peringatan untuk login ulang

Xref: Bagian 3.2.1 Login Admin

##### 2.2.2 Staff Keuangan Login

Use Case: Login <br>
Diagram:![alt text](image/staffKeuanganLogin.jpg?raw=true)
<br>
Deskripsi Singkat Staff Keuangan melakukan login terlebih dahulu sebelum masuk ke tampilan home

1. Staff Keuangan melakukan login dengan username dan password
2. Sistem melakukan validasi login
3. Bila sukses sistem akan mengarahkan ke halaman beranda
4. Bila gagal sistem akan menampilkan peringatan untuk login ulang

Xref: Bagian 3.2.2 Login Staff Keuangan

##### 2.2.3 Staff Biasa Login

Use Case: Login <br>
Diagram:![alt text](image/staffBiasaLogin.jpg?raw=true)
<br>
Deskripsi Singkat Staff Biasa melakukan login terlebih dahulu sebelum masuk ke tampilan home

1. Biasa melakukan login dengan username dan password
2. Sistem melakukan validasi login
3. Bila sukses sistem akan mengarahkan ke halaman beranda
4. Bila gagal sistem akan menampilkan peringatan untuk login ulang

Xref: Bagian 3.2.3 Login Staff Biasa

##### 2.2.4 Admin Mengelola User
Use Case: Admin Mengelola User <br>
Diagram:![alt text](image/adminMengelolaUser.jpg?raw=true)
<br>
Deskripsi Singkat Sistem akan menampilkan dashboard admin yang di mana akan menampilkan form user<br>

1. Admin Mengklik menu kelola user,setelah keluar form user, admin menginputkan Nama user,Tempat lahir user,Tanggal lahir,E-mail, Jenis Kelamin,Agama,No telepon,Alamat, Jabatan Kemudian klik tambahahkan User
2. Sistem akan menyimpan data user yang telah di inputkan, serta akan menampilkan data user yang telah di inputkan
3. Admin bisa menghapus dan menupdate data user

Xref: Bagian 3.2.4 Admin Mengelola User

##### 2.2.5 Staff Keuangan Mengelola Data Keuangan

Use Case: Admin Mengelola User <br>
Diagram:![alt text](image/staffKeuanganMengelolaDataKeuangan.jpg?raw=true)
<br>
Deskripsi Singkat Sistem akan menampilkan dashboard Staff keuangan yang di mana akan menampilkan sidebar<br>

- Untuk Data Pemasukan
1. Staff keuangan Mengklik menu data pemasukan,Kemudian mengklik tambah data dan menginputkan tanggal pemasukan,keterangan pemasukan,sumber pemasukan,jumlah pemasukan kemudian klik tambah data 
2. Sistem akan menyimpan data user yang telah di inputkan, serta akan menampilkan data pemasukan yang telah diinputkan 
3. Staff bisa menghapus data pemasukan 
4. Staff juga bisa megedit data pemasukan

- Untuk Data pengeluaran
1. Staff keuangan Mengklik menu data pengeluaran,Kemudian mengklik tambah data dan menginputkan tanggal pengeluaran,keterangan pengeluaran,sumber pengeluaran,jumlah pengeluaran kemudian klik tambah data 
2. Sistem akan menyimpan data user yang telah di inputkan, serta akan menampilkan data pemasukan yang telah diinputkan 
3. Staff bisa menghapus data pengeluaran 
4. Staff juga bisa megedit data pengeluaran

Xref: Bagian 3.2.5 Staff Keuangan Mengelola Data Keuangan

##### 2.2.6 Staff Biasa Melihat Data Keuangan

Use Case: Staff Biasa Melihat data Keuangan <br>
Diagram:![alt text](image/staffBiasaMelihatDataKeuangan.jpg?raw=true)
<br>
Deskripsi Singkat Sistem akan menampilkan dashboard Staff biasa<br>

- Untuk Menampilkan Dashboard utama Staff Biasa
1. Staff Biasa akan masuk ke halaman dashboard
2. Sistem akan menampilkan grafik pemasukan dan pengeluaran
3. Staff biasa melihat grafik pemasukan dan pengeluaran

- Untuk Menampilkan data pengeluaran
1. Staff biasa mngklik data pengeluaran pada sidebar
2. Sistem akan menampilkan pengeluaran dalam bentuk tabel

- Untuk Menampilkan data pemasukan
1. Staff biasa mengklik data pemasukan pada sidebar
2. Sistem akan menampilkan pemasukan dalam bentuk tabel

Xref: Bagian 3.2.6 Staff Biasa Melihat Data keuangan

##### 2.2.7 Staff Keuangan Mencetak Laporan Keuangan

Use Case: Staff Keuangan Mencetak Laporan Keuangan <br>
Diagram:![alt text](image/staffKeuanganMencetakLaporanKeuangan.jpg?raw=true)
<br>
Deskripsi Singkat Sistem akan menampilkan dashboard Staff keuangan yang di mana akan menampilkan sidebar <br>

1. Staff Keuangan mengklik menu laporan
2. Sistem akan menampilkan data pemasukan dan pengeluaran dalam bentuk grafik
3. Staff Keuangan mengklik save to exel untuk menyimpan dalam bentuk exel di bagian pemasukan untuk menyimpan pemasukan
4. Staff Keuangan mengklik save to pdf untuk menyimpan dalam bentuk pdf di bagian pemasukan untuk menyimpan pemasukan
5. Staff Keuangan mengklik save to exel untuk menyimpan dalam bentuk exel di bagian pemasukan untuk menyimpan pengeluaran
6. Staff Keuangan mengklik save to pdf untuk menyimpan dalam bentuk pdf di bagian pemasukan untuk menyimpan pengeluaran

Xref: Bagian 3.2.7 Staff Keuangan Mencetak Laporan Keuangan

##### 2.2.8 Staff Biasa Mencetak Laporan Keuangan

Use Case: Staff Biasa Mencetak Laporan Keuangan <br>
Diagram:![alt text](image/staffBiasaMencetakLaporanKeuangan.jpg?raw=true)
<br>
Deskripsi Singkat Sistem akan menampilkan dashboard Staff biasa<br>

1. Staff Biasa akan masuk ke halaman dashboard
2. Sistem akan menampilkan grafik pemasukan dan pengeluaran
3. Staff biasa melihat grafik pemasukan dan pengeluaran
4. Staff Biasa mengklik save to exel untuk menyimpan dalam bentuk exel di bagian pemasukan untuk menyimpan pemasukan
5. Staff Biasa mengklik save to pdf untuk menyimpan dalam bentuk pdf di bagian pemasukan untuk menyimpan pemasukan
6. Staff Biasa mengklik save to exel untuk menyimpan dalam bentuk exel di bagian pemasukan untuk menyimpan pengeluaran
7. Staff Biasa mengklik save to pdf untuk menyimpan dalam bentuk pdf di bagian pemasukan untuk menyimpan pengeluaran

Xref: Bagian 3.2.7 Staff Biasa Mencetak Laporan Keuangan

## 2.3 Spesifikasi Kebutuhan non-fungsional
- Tabel Kebutuhan Non-Fungsional

| No | 	Deskripsi |
| ------ | ------ |
| 1  |    Semua interface dan fungsi menggunakan Bahasa Indonesia  |
| 2   |  Perangkat Lunak dapat dipakai di semua platofrm OS ( Admin, Staff Keuangan dan Staff Biasa ) |


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
|Xref|   Bagian 2.2.1 Admin Login     |
|Trigger|Membuka aplikasi sistem Manajemen Keuangan Puskesmas Umban Sari|
|Precondition|Halman Login|
|Basic Path| 1. Admin mengisi form login dengan E-Mail dan password<br>2. Admin mengklik tombol login<br>3. Sistem melakukan validasi login<br>4. Bila sukses sistem akan mengarahkan ke halaman beranda pengelolaan user<br>5. Bila gagal sistem akan menampilkan peringatan gagal<br>6. Sistem membawa kembali ke halaman login bila gagal|
|Alternative|Tidak ada|
|Pos Condition|Admin dapat login dan mengakses aplikasi di bagian Manajemen Keuangan Puskesmas Umban Sari dibagian pengelolaan user|
|Exception Push|E-Mail dan password salah|


##### 3.2.2 Staff Keuangan Login

| Nama Fungsi |Laporan |
| ------ | ------ |
|    Xref|Bagian 2.2.2 Staff Keuangan Login|
|    Trigger    |      Membuka aplikasi sistem Manajemen Keuangan Puskesmas Umban Sari  |
|Precondition|Halman Login|
|Basic Path|1. Staff keuangan mengisi form login dengan E-Mail dan password<br>2. Staff Keuangan mengklik tombol login<br> 3. Sistem melakukan validasi login<br>4. Bila sukses sistem akan mengarahkan ke halaman beranda pengelolaan keuangan Puskesmas <br> 5. Bila gagal sistem akan menampilkan peringatan gagal<br>6. Sistem akan membawa kembali ke halaman login bila gagal|
|Alternative|Tidak ada|
|Pos Condition|Staff Keuangan dapat login dan mengakses aplikasi di bagian Manajemen Keuangan Puskesmas Umban Sari di bagian pengelolaan Data Keuangan|
|Exception Push|E-Mail dan password salah|


##### 3.2.3 Staff Biasa Login

| Nama Fungsi |Laporan |
| ------ | ------ |
|    Xref    |  Bagian 2.2.3 Staff Biasa Login      |
|    Trigger    | Membuka aplikasi sistem Manajemen Keuangan Puskesmas Umban Sari|
|Precondition|Halman Login|
|Basic Path|1. Staff Biasa mengisi form login dengan E-Mail dan password<br>2. Staff biasa mengklik tombol login<br>3. Sistem melakukanvalidasi login<br>4. Bila sukses sistem akan menampilkan peringatan gagal<br>5. Bila gagal sistem akan menampilkan peringatan gagal<br>6. Sistem akan membawa kembali ke halaman login bila gagal|
|Alternative|Tidak ada|
|Pos Condition|Staff biasa dapat login dan mengakses aplikasi di bagian Manajemen Keuangan Puskesmas Umban Sari di bagian menampilkan grafik dan data keuangan |
|Exception Push|E-Mail dan password salah|


##### 3.2.4 Admin Mengelola User

| Nama Fungsi |Laporan |
| ------ | ------ |
|    Xref    |  Bagian 2.2.4 Admin Mengelola User      |
|    Trigger    |   Membuka aplikasi sistem Manajemen Keuangan Puskesmas Umban Sari |
|Precondition|Halman Dashboard Admin|
|Basic Path|1. Sistem menampilkan halaman dashboard Admin<br>2. Admin mengklik menu penambahan user <br>3. Admin menginputkan data untuk menambahkan user<br>4. Admin mengklik tombol tambah user<br>5. Sistem akan menyimpan data yang di inputkan<br><br>-Admin dapat melihat,menghapus,dan mengedit bila melakukan:<br><br>1. Admin mengklik menu daftar user <br>2. Sistem akan menampilkan data user yang terdaftar<br>3. Admin mengklik salah satu tombol edit/hapus <br>4. Sistem akan memvalidasi perintah edit/hapus<br>5. Sistem akan menampilkan data yang telah disesuaikan|
|Alternative|Tidak ada|
|Pos Condition|- Halaman penambahan User (Untuk penambahan data user)<br>- Halaman daftar user |
|Exception Push|Tidak ada koneksi, data belum di inputkan|


##### 3.2.5 Staff Keuangan Mengelola data Keuangan

| Nama Fungsi |Laporan |
| ------ | ------ |
|Xref|Bagian 2.2.5 Staff Keuangan Mengelola data Keuangan|
|Trigger|Membuka aplikasi sistem Manajemen Keuangan Puskesmas Umban Sari|
|Precondition|Halaman dashboard Staff Keuangan|
|Basic Path|1. Sistem Menampilkan halaman dashboard staff keuangan<br>2. Staff Keuangan mengklik menu data pemasukan<br>3. Staff menginputkan data pemasukan<br>4. Sistem akan menyimpan inputkan data<br> 5.Sistem menampilkan data yang telah disesuaikan dalam bentuk tabel<br><br>Untuk menambahkan data pengeluaran:<br><br>1. Staff keuangan mengklik menu data pengeluaran<br>2. staff keuangan menginputkan data pengeluaran<br>4. Sistem akan menyimpan inputkan data<br> 5.Sistem menampilkan data yang telah disesuaikan dalam bentuk tabel<br><br>Untuk edit/hapus data dapat dilakukan dengan:<br><br>1. Sitem akan menampilkan data pemasukan/pengeluaran <br>2. Staff Keuangan mengklik tombol hapus/edit<br>3. Sistem akan menyimpan perubahan<br>4. Sistem akan menampilkan data yang telah di ubah|
|Alternative|Tidak ada|
|Pos Condition|-Halaman data pengeluaran - Halaman data pemasukan|
|Exception Push|Tidak ada koneksi, data belum di inputkan|


##### 3.2.6 Staff Biasa Melihat Data Keuangan

| Nama Fungsi |Laporan |
| ------ | ------ |
|    Xref    | Bagian 2.2.6 Staff Biasa Melihat Data Keuangan       |
|    Trigger    |     Membuka aplikasi sistem Manajemen Keuangan Puskesmas Umban Sari   |
|Precondition|Halaman dashboard Staff biasa|
|Basic Path|1. Sistem menampilkan halaman dashboard staff biasa<br>2. Staff biasa dapat melihat data dalam bentuk tabel pemasukan dan pengeluaran |
|Alternative|Tidak ada|
|Pos Condition|Halaman dashboard Staff biasa|
|Exception Push|Tidak ada koneksi|


##### 3.2.7 Staff Keuangan Mencetak Laporan Keuangan

| Nama Fungsi |Laporan |
| ------ | ------ |
|    Xref    |    Bagian 2.2.7 Staff Keuangan Mencetak Laporan Keuangan    |
|    Trigger    |    Membuka aplikasi sistem Manajemen Keuangan Puskesmas Umban Sari    |
|Precondition|Halaman dashboard Staff Keuangan|
|Basic Path|1. Sistem akan menampilkan halaman dashboard staff keuangan dan sidebarnya<br> Staff Keuangan mengklik tombol laporan<br>3. Sistem akan menampilkan data laporan pemasukandan pengeluaran dalam bentuk grafik <br>4. Staff Keuangan mengklik tombol save to exel/ save to pdf <br>4. Staff keuangan mencetak berdasarkan format yang dia pilih sebelum |
|Alternative|Tidak ada|
|Pos Condition|Halaman Laporan staff keuangan|
|Exception Push|Tidak ada koneksi|


##### 3.2.8 Staff Biasa Mencetak Laporan Keuangan
| Nama Fungsi |Laporan |
| ------ | ------ |
|    Xref    |    Bagian 2.2.8 Staff Biasa Mencetak Laporan Keuangan    |
|    Trigger    |     Membuka aplikasi sistem Manajemen Keuangan Puskesmas Umban Sari   |
|Precondition|Halaman dashboard Staff Biasa|
|Basic Path|1. Sistem akan menampilkan halaman dashboard staff biasa dan sidebarnya<br> Staff biasa mengklik tombol laporan<br>3. Sistem akan menampilkan data laporan pemasukandan pengeluaran dalam bentuk grafik <br>4. Staff biasa mengklik tombol save to exel/ save to pdf <br>4. Staff biasa mencetak berdasarkan format yang dia pilih sebelum|
|Alternative|Tidak ada|
|Pos Condition|Halaman Laporan staff biasa|
|Exception Push|Tidak ada koneksi|

## 3.3 Struktur Detail Kebutuhan Non-fungsional

##### 3.3.1 Logika Struktur Data<br>
Struktur data logika pada sistem Aplikasi Manajemen Keuangan Puskesmas Umban Sari terdapat struktur Database yang dijelaskan menggunakan ERD.

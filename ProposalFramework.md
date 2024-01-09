<!-- <div align="center">

# <br> <br>PROPOSAL WORKSHOP <br> PEMROGRAMAN FRAMEWORK <br><br><br>




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

</div> -->
![alt text](image/CoverProposalFramework.jpg?raw=true)

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
Bab selanjutnya yaitu menjelaskan sistem yang di terapkan pada aplikasi. Menjelaskan gambaran umum dari aplikasi, sistem Interface aplikasi dan alur sistemnya. Bab terakhir menjelaskan tentang setiap fungsi yang digunakan secara teknisnya. Pada bab 2 dan 3 merupakan deskripsi dari aplikasi yang akan diterapkan pada aplikasi yang dibuat.

# BAB II Gambaran umum
Pada zaman era globalisasi perkembangan teknologi begitu sangat pesat, salah satunya ialah perkembangan teknologi di bidang software engineering dimana software engineering dapat digunakan dalam kehidupan sehari - hari .dalam studi kasus Proyek FRAMEWORK ini kami menganalisis kebutuhan Puskesmas dalam memanajemen keuangan Puskesmas tersebut.Kasus yang kami peroleh yaitu Sistem Manajemen Keuangan Puskesmas. Maka dari itu kami sebagai software engineering merancang sebuah sistem sesuai dengan kebutuhan Kepala Puskesmas dengan menerapkan Sistem Manajemen Keuangan Puskesmas Umban Sari. Sehingga memudahkan Petugas Puskesmas dalam mengelola keuangan.Software yang kami buat ini berbasis website dimana website sebagai admin, staff keuangan dan staff biasa. Sistem yang kami buat di dalamnya terdapat
Data pemasukan,data pengeluaran,laporan keuangan,grafik data pemasukan dan pengeluaran,cetak pelaporan pemasukan dan pengeluaran,upload pelaporan pemasukan dan pengeluaran (Untuk staff keuangan), grafik data pemasukan, grafik data pengeluaran,upload pelaporan pemasukan dan pengeluaran, cetak pelaporan pemasukan dan pengeluaran (Untuk Staff biasa),pengelolaan data user,Data pemasukan,data pengeluaran,laporan keuangan,grafik data pemasukan dan pengeluaran,cetak pelaporan pemasukan dan pengeluaran,upload pelaporan pemasukan dan pengeluaran (Untuk admin).<br>
Berikut akan kami jelaskan sistem software kami,Admin fungsi utama yaitu :
- Input Nama User (Staff Puskesmas)
- Input E-mail
- Input password
- Input nik
- Input Jenis Kelamin
- Input Alamat
- Input Jabatan
- Input level user

Berikut ini fungsi staff keuangan:
- Input Tanggal pengeluaran
- Input Keterangan pengeluaran
- Input judul laporan pengeluaran
- Input jumlah pengeluaran
- Input Tanggal pemasukan
- Input Keterangan pemasukan
- Input judul laporan pemasukan
- Input jumlah pemasukan
- Input file bukti pelaporan
- Mencetak laporan pemasukan
- Mencetak laporan pengeluaran
- View Laporan keuangan
- View Pelaporan Staff Biasa
- View Data Pengeluaran
- View Data Pemasukan

Berikut ini fungsi staff biasa:
- Input Pelaporan Keuangan Ke Staff Keuangan
- Input file bukti pelaporan
- View grafik pengeluaran
- View data pengeluaran
- View grafik pemasukan
- View data pemasukan
- Mencetak laporan


## 2.1 Perspektif produk
Manajemen Keuangan Puskesmas Umban Sari adalah sebuah Sistem Manajemen Keuangan Puskesmas yang di aplikasiskan pada website. Terdapat 3 jenis yaitu admin,staff Keuangan dan staff biasa. Pengolahan data user di kelola oleh admin, pengolahan keuangan dikelola oleh staff keuangan,staff dan kepala Puskesmas hanya melihat grafik dan laporan pada website.

Pada sistem Manajemen keuangan Puskesmas Umban Sari ini akan menampilkan grafik keuangan masuk dan keluar yang sudah di inputkan oleh staff keuangan

##### 2.1.1 Antarmuka sistem
![alt text](image/antarMukaSistem.png?raw=true)
Sistem aplikasi Manajemen Keuangan Puskesmas Umban Sari memiliki 3 user yaitu staff keuangan, staff biasa dan admin. Staff biasa mempunyai fungsi yaitu melakukan view grafik dan bisa view laporan. Admin bertugas untuk mengelola data User,dan staff keuangan mempunyaifungsi yaitu untuk memasukkan data keuangan Puskesmas Umban Sari

##### 2.1.2 Antarmuka pengguna

- **Mockup ( Figma )**

|  |  |
| ------ | ------ |
| ![alt text](InterfaceFigma/HalamanBerandaMasuk.jpeg?raw=true)  <br> Pada halaman awal ini akan menampilkan contact dan beberapa informasi lainnya  |  ![alt text](InterfaceFigma/HalamanLogin.jpeg?raw=true)    <br>Pada halaman ini user di harus memasukkan E-Mail dan password yang telah di daftarkan  |
|    ![alt text](InterfaceFigma/DashboardStaffKeuangan.jpeg?raw=true) <br> Pada halaman ini terdapat bagian bagian yang menjelaskan jumlah pengeluaran pemasukan dan jumlah simpanan dana dari Puskesmas dan juga menampilkan grafik pemasukan dan pengeluaran   |  ![alt text](InterfaceFigma/menuPemasukanStaffKeuangan.jpeg?raw=true)  <br>Pada halaman ini akan menampilkan tabel pemasukan dan juga terdapat tombol tambah data untuk menambahkan data pemasukan    |
| ![alt text](InterfaceFigma/menuPengeluaranStaffKeuangan.jpeg?raw=true) <br> Pada halaman ini terdapat tabel pengeluaran dan juga terdapat tambah data untuk menambahkan data pengeluaran|![alt text](InterfaceFigma/tambahDataPemasukanStaffKeuangan.jpeg?raw=true) <br> Pada halaman ini terdapat beberapa kolom untuk menginputkan data Pemasukan dan terdapat tombol tambah data yang berguna untuk menyimpan masukkan data|
|![alt text](InterfaceFigma/tambahDataPengeluaranStaffKeuangan.jpeg?raw=true) <br> Pada halaman ini ada halaman ini terdapat beberapa kolom untuk menginputkan data pengeluaran dan terdapat tombol tambah data yang berguna untuk menyimpan masukkan data |![alt text](InterfaceFigma/LaporanKeuanganPengeluaran.jpeg?raw=true) <br>Pada halaman ini terdapat sebuah grafik pengeluaran dan terdapat tombol untuk menyimpan ke dalam bentuk exel atau pdf|
|![alt text](InterfaceFigma/laporanStaffKeuanganPemasukan.jpeg?raw=true)<br>Pada halaman ini terdapat sebuah grafik pemasukan dan terdapat tombol untuk menyimpan ke dalam bentuk exel atau pdf|![alt text](InterfaceFigma/daftarUserAdmin.jpeg?raw=true)<br>Pada halaman ini terdapat tabel yang menampilkan daftar user yang aktif pada sistem Manajemen Keuangan Puskesmas Umban Sari|
|![alt text](InterfaceFigma/penambahanUserAdmin.jpeg?raw=true)<br>Pada halam ini terdapat inpitan untuk data diri dari seorang user yang ingin di daftarkan|![alt text](InterfaceFigma/penambahanUserAdmin__3_.jpeg?raw=true)<br>Pada halam ini terdapat inpitan untuk data diri dari seorang user yang ingin di daftarkan|
|![alt text](InterfaceFigma/dashboarStaffBiasa.jpeg?raw=true)<br>Pada halaman ini terdapat sebuah grafik pengeluaran dan terdapat tombol untuk menyimpan ke dalam bentuk exel atau pdf|![alt text](InterfaceFigma/konfirmasiHapus.jpeg?raw=true)<br>Pada modal ini terdapat konfirmasi terhadap data yang ingin di hapus|

- **Mockup Bagian Login ( Website )**

|  |  
| ------ |
|    ![alt text](InterfaceWebsite/login/1.png?raw=true)   |

- **Mockup Bagian Landing Page ( Website )**

|  |  |     |
| ------ | ------ |------ |
|    ![alt text](InterfaceWebsite/landingPage/1.png?raw=true)|![alt text](InterfaceWebsite/landingPage/2.png?raw=true)|![alt text](InterfaceWebsite/landingPage/3.png?raw=true)   |

- **Mockup Bagian Admin Dashboard ( Website )**

|  |  |     |
| ------ | ------ |------ |
|![alt text](InterfaceWebsite/admin/dashboard1.png?raw=true)|![alt text](InterfaceWebsite/admin/dashboard2.png?raw=true) |[alt text](InterfaceWebsite/admin/dashboard3.png?raw=true)  | 

- **Mockup Bagian Admin Data User ( Website )**

|  |  |
| ------ | ------  |
|   ![alt text](InterfaceWebsite/admin/dataUser.png?raw=true)        | ![alt text](InterfaceWebsite/admin/dataUser2.png?raw=true)  |

- **Mockup Bagian Admin Data Tidak aktif ( Website )**

|  |  |
| ------ | ------ |
|   ![alt text](InterfaceWebsite/admin/dataUserTidakAktif1.png?raw=true)   | ![alt text](InterfaceWebsite/admin/dataUserTidakAktif2.png?raw=true)   |

- **Mockup Bagian Admin Data Pemasukan ( Website )**

|  |  |
| ------ |------ |
|   ![alt text](InterfaceWebsite/admin/data pemasukan 1.png?raw=true)  |   ![alt text](InterfaceWebsite/admin/data pemasukan 2.png?raw=true)     |  

- **Mockup Bagian Admin Data Pemasukan ( Website )**

|  |  |
| ------ |------ |
|   ![alt text](InterfaceWebsite/admin/data pengeluaran 1.png?raw=true)| ![alt text](InterfaceWebsite/admin/data pengeluaran 2.png?raw=true)     | 

- **Mockup Bagian Admin Laporan ( Website )**

|  |  
| ------ |
|   ![alt text](InterfaceWebsite/admin/laporan.png?raw=true)     |        

- **Mockup Bagian Admin Cetak Laporan ( Website )**

|  |  |
| ------ |------ |
|   ![alt text](InterfaceWebsite/admin/cetak pelaporan.png?raw=true)|![alt text](InterfaceWebsite/admin/bagianCetakLaporan2.png?raw=true)|

- **Mockup Bagian Admin Profile ( Website )**

|  |  |     |
| ------ |------ |------ |
|   ![alt text](InterfaceWebsite/admin/modal profile.png?raw=true) |![alt text](InterfaceWebsite/admin/modalProfileDetail.png?raw=true)|![alt text](InterfaceWebsite/admin/editProfileAdmin.png?raw=true)|

- **Mockup Bagian Staff Keuangan Dashboard ( Website )**

|  |  |
| ------ |------ |
|   ![alt text](InterfaceWebsite/staffKeuangan/dashboard 1.png?raw=true)|![alt text](InterfaceWebsite/staffKeuangan/dashboard 2.png?raw=true) |

- **Mockup Bagian Staff Keuangan Data Pemasukan ( Website )**

|  |  |
| ------ |------ |
|   ![alt text](InterfaceWebsite/staffKeuangan/data pemasukan 1.png?raw=true)|![alt text](InterfaceWebsite/staffKeuangan/data pemasukan 2.png?raw=true) |

- **Mockup Bagian Staff Keuangan Data Pengeluaran ( Website )**

|  |  |
| ------ |------ |
|   ![alt text](InterfaceWebsite/staffKeuangan/data pengeluaran 1.png?raw=true)|![alt text](InterfaceWebsite/staffKeuangan/data pengeluaran 2.png?raw=true) |

- **Mockup Bagian Staff Keuangan Laporan( Website )**

|  |  
| ------ |
|   ![alt text](InterfaceWebsite/staffKeuangan/laporan.png?raw=true) |

- **Mockup Bagian Staff Keuangan Cetak Pelaporan Keuangan( Website )**

|  |  |
| ------ |------ |
|![alt text](InterfaceWebsite/staffKeuangan/cetak pelaporan.png?raw=true) |![alt text](InterfaceWebsite/staffKeuangan/bagian2CetakLaporan.png?raw=true)|

<!-- - **Mockup Bagian Staff Keuangan Cetak Keuangan( Website )**

|  |  |
| ------ |------ |
|   ![alt text](InterfaceWebsite/staffKeuangan/cetak pelaporan.png?raw=true)|
![alt text](InterfaceWebsite/staffKeuangan/bagian2CetakLaporan.png?raw=true)| -->

- **Mockup Bagian Staff Keuangan Profile( Website )**

|  |  |
| ------ |------ |
|   ![alt text](InterfaceWebsite/staffKeuangan/modalProfil.png?raw=true) |![alt text](InterfaceWebsite/staffKeuangan/detailModalProfile.png?raw=true)|![alt text](InterfaceWebsite/staffKeuangan/editProfile.png?raw=true)|

- **Mockup Bagian Staff Biasa Dashboard( Website )**

|  |  |
| ------ |------ |
|   ![alt text](InterfaceWebsite/staffBiasa/dashboard 1.png?raw=true)|![alt text](InterfaceWebsite/staffBiasa/dashboard 2.png?raw=true)|

- **Mockup Bagian Staff Biasa Data Pemasukan( Website )**

|  |  |
| ------ |------ |
|   ![alt text](InterfaceWebsite/staffBiasa/data pemasukan 1.png?raw=true) |![alt text](InterfaceWebsite/staffBiasa/data pemasukan 2.png?raw=true)|

- **Mockup Bagian Staff Biasa Data Pengeluaran( Website )**

|  |  |
| ------ |------ |
|   ![alt text](InterfaceWebsite/staffBiasa/data pengeluaran 1.png?raw=true) |![alt text](InterfaceWebsite/staffBiasa/data pengeluaran 2.png?raw=true)|

- **Mockup Bagian Staff Biasa Laporan( Website )**

|  |  
| ------ |
|   ![alt text](InterfaceWebsite/staffBiasa/laporan.png?raw=true)|

- **Mockup Bagian Staff Biasa Cetak Laporan( Website )**

|  |  
| ------ |
|   ![alt text](InterfaceWebsite/staffBiasa/cetak pelaporan.png?raw=true)|

- **Mockup Bagian Staff Biasa Profile( Website )**

|  |  |     |
| ------ |------ |------ |
|   ![alt text](InterfaceWebsite/staffBiasa/modalProfile.png?raw=true)|![alt text](InterfaceWebsite/staffBiasa/modalDetailProfile.png?raw=true)|![alt text](InterfaceWebsite/staffBiasa/EditProfile.png?raw=true)|

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

1. Admin Mengklik menu Data user,setelah keluar form user, admin menginputkan Nama user,E-mail, Jenis Kelamin,Alamat,Jabatan,Level User,Password Kemudian klik tambahahkan User
2. Sistem akan menyimpan data user yang telah di inputkan, serta akan menampilkan data user yang telah di inputkan
3. Admin bisa menghapus dan menupdate data user

Xref: Bagian 3.2.4 Admin Mengelola User

##### 2.2.5 Staff Keuangan Mengelola Data Keuangan

Use Case: Staff Keuangan Mengelola Data Keuangan <br>
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

##### 2.2.6 Admin Mengelola Data Keuangan

Use Case: Admin Mengelola Data Keuangan <br>
Diagram:![alt text](image/adminMengelolaDataKeuangan.jpg?raw=true)
<br>
Deskripsi Singkat Sistem akan menampilkan dashboard admin yang di mana akan menampilkan sidebar<br>

- Untuk Data Pemasukan
1. Admin Mengklik menu data pemasukan,Kemudian mengklik tambah data dan menginputkan tanggal pemasukan,keterangan pemasukan,sumber pemasukan,jumlah pemasukan kemudian klik tambah data 
2. Sistem akan menyimpan data Keuangan yang telah di inputkan, serta akan menampilkan data pemasukan yang telah diinputkan 
3. Admin bisa menghapus data pemasukan 
4. Admin juga bisa megedit data pemasukan

- Untuk Data pengeluaran
1. Admin keuangan Mengklik menu data pengeluaran,Kemudian mengklik tambah data dan menginputkan tanggal pengeluaran,keterangan pengeluaran,sumber pengeluaran,jumlah pengeluaran kemudian klik tambah data 
2. Sistem akan menyimpan data user yang telah di inputkan, serta akan menampilkan data pemasukan yang telah diinputkan 
3. Admin bisa menghapus data pengeluaran 
4. Admin juga bisa megedit data pengeluaran

Xref: Bagian 3.2.6 Admin Mengelola Data Keuangan

##### 2.2.7 Staff Biasa Melihat Data Keuangan

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

Xref: Bagian 3.2.7 Staff Biasa Melihat Data keuangan

##### 2.2.8 Staff Keuangan Mencetak Laporan Keuangan

Use Case: Staff Keuangan Mencetak Laporan Keuangan <br>
Diagram:![alt text](image/staffKeuanganMencetakLaporanKeuangan.jpg?raw=true)
<br>
Deskripsi Singkat Sistem akan menampilkan dashboard Staff keuangan yang di mana akan menampilkan sidebar <br>

1. Staff Keuangan akan masuk ke halaman dashboard
2. Staff Keuangan akan menampilkan grafik pemasukan dan pengeluaran
3. Staff Keuangan melihat grafik pemasukan dan pengeluaran
4. Staff Keuangan memilih cetak Pelaporan pada sidebar
5. Staff Keuangan Memilih Data Pemasukan Atau Pengeluaran
6. Staff Keuangan menentukan Rentan waktu data yang ingin di tampilkan,kemudian klik Tampilkan
6. Staff Keuangan mengklik save to exel untuk menyimpan dalam bentuk exel dan akan tersimpan tergantung dengan data yang di pilih sebelumnya
7. Staff Keuangan mengklik save to pdf untuk menyimpan dalam bentuk pdf dan akan tersimpan tergantung dengan data yang di pilih sebelumnya

Xref: Bagian 3.2.8 Staff Keuangan Mencetak Laporan Keuangan

##### 2.2.9 Staff Biasa Mencetak Laporan Keuangan

Use Case: Staff Biasa Mencetak Laporan Keuangan <br>
Diagram:![alt text](image/staffBiasaMencetakLaporanKeuangan.jpg?raw=true)
<br>
Deskripsi Singkat Sistem akan menampilkan dashboard Staff biasa<br>

1. Staff Biasa akan masuk ke halaman dashboard
2. Sistem akan menampilkan grafik pemasukan dan pengeluaran
3. Staff Biasa melihat grafik pemasukan dan pengeluaran
4. Staff Biasa memilih cetak Pelaporan pada sidebar
5. Staff Biasa Memilih Data Pemasukan Atau Pengeluaran
6. Staff Biasa menentukan Rentan waktu data yang ingin di tampilkan,kemudian klik Tampilkan
6. Staff Biasa mengklik save to exel untuk menyimpan dalam bentuk exel dan akan tersimpan tergantung dengan data yang di pilih sebelumnya
7. Staff Biasa mengklik save to pdf untuk menyimpan dalam bentuk pdf dan akan tersimpan tergantung dengan data yang di pilih sebelumnya

Xref: Bagian 3.2.9 Staff Biasa Mencetak Laporan Keuangan

##### 2.2.10 Admin Mencetak Laporan Keuangan

Use Case: Admin Mencetak Laporan Keuangan <br>
Diagram:![alt text](image/adminMencetakLaporanKeuangan.jpg?raw=true)
<br>
Deskripsi Singkat Sistem akan menampilkan dashboard Admin<br>

1. Admin akan masuk ke halaman dashboard
2. Sistem akan menampilkan grafik pemasukan dan pengeluaran
3. Admin melihat grafik pemasukan dan pengeluaran
4. Admin memilih cetak Pelaporan pada sidebar
5. Admin Memilih Data Pemasukan Atau Pengeluaran
6. Admin menentukan Rentan waktu data yang ingin di tampilkan,kemudian klik Tampilkan
6. Admin mengklik save to exel untuk menyimpan dalam bentuk exel dan akan tersimpan tergantung dengan data yang di pilih sebelumnya
7. Admin mengklik save to pdf untuk menyimpan dalam bentuk pdf dan akan tersimpan tergantung dengan data yang di pilih sebelumnya

Xref: Bagian 3.2.10 Admin Mencetak Laporan Keuangan

##### 2.2.11 Admin Melaporkan Keuangan

Use Case: Admin Melaporkan Keuangan <br>
Diagram:![alt text](image/adminMelaporkanKeuangan.jpg?raw=true)
<br>
Deskripsi Singkat Sistem akan menampilkan dashboard Admin<br>

1. Admin akan masuk ke halaman dashboard
2. Sistem akan menampilkan grafik pemasukan dan pengeluaran
3. Admin memilih Laporan pada sidebar
4. Admin mengklik button upload laporan
5. Admin mengisi form yang muncul 
6. Admin mengupload file bukti laporan keuangan
6. Klik simpan, dan sistem akan menampilkan laporan yang sudah di upload
7. Admin juga dapat menghapus laporan dengan cara klik icon sampah pada kolom aksi

Xref: Bagian 3.2.11 Admin Melaporkan Keuangan

##### 2.2.12 Staff Keuangan Melaporkan Keuangan

Use Case: Staff Keuangan Melaporkan Keuangan <br>
Diagram:![alt text](image/staffKeuanganMelaporkanKeuangan.jpg?raw=true)
<br>
Deskripsi Singkat Sistem akan menampilkan dashboard Staff Keuangan<br>

1. Staff Keuangan akan masuk ke halaman dashboard
2. Sistem akan menampilkan grafik pemasukan dan pengeluaran
3. Staff Keuangan memilih Laporan pada sidebar
4. Staff Keuangan mengklik button upload laporan
5. Staff Keuangan mengisi form yang muncul 
6. Staff Keuangan mengupload file bukti laporan keuangan
6. Klik simpan, dan sistem akan menampilkan laporan yang sudah di upload
7. Staff Keuangan juga dapat menghapus laporan dengan cara klik icon sampah pada kolom aksi

Xref: Bagian 3.2.12 Staff Keuangan Melaporkan Keuangan

##### 2.2.13 Staff Biasa Melaporkan Keuangan

Use Case: Staff Biasa Melaporkan Keuangan <br>
Diagram:![alt text](image/staffBiasaMelaporkanKeuangan.jpg?raw=true)
<br>
Deskripsi Singkat Sistem akan menampilkan dashboard Staff Biasa<br>

1. Staff BiasaKeuangan akan masuk ke halaman dashboard
2. Sistem akan menampilkan grafik pemasukan dan pengeluaran
3. Staff Biasa memilih Laporan pada sidebar
4. Staff biasa mengklik button upload laporan
5. Staff biasa mengisi form yang muncul 
6. Staff biasa mengupload file bukti laporan keuangan
6. Klik simpan, dan sistem akan menampilkan laporan yang sudah di upload

Xref: Bagian 3.2.13 Staff Biasa Melaporkan Keuangan

## 2.3 Spesifikasi Kebutuhan non-fungsional
- Tabel Kebutuhan Non-Fungsional

| No | 	Deskripsi |
| ------ | ------ |
| 1  |    Semua Interface dan fungsi menggunakan Bahasa Indonesia  |
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

##### 3.2.6 Admin Mengelola data Keuangan

| Nama Fungsi |Laporan |
| ------ | ------ |
|Xref|Bagian 2.2.6 Admin Mengelola data Keuangan|
|Trigger|Membuka aplikasi sistem Manajemen Keuangan Puskesmas Umban Sari|
|Precondition|Halaman dashboard Admin|
|Basic Path|1. Sistem Menampilkan halaman dashboard Admin<br>2. Admin mengklik menu data pemasukan<br>3. Admin menginputkan data pemasukan<br>4. Sistem akan menyimpan inputkan data<br> 5.Sistem menampilkan data yang telah disesuaikan dalam bentuk tabel<br><br>Untuk menambahkan data pengeluaran:<br><br>1. Admin mengklik menu data pengeluaran<br>2. Admin menginputkan data pengeluaran<br>4. Sistem akan menyimpan inputkan data<br> 5.Sistem menampilkan data yang telah disesuaikan dalam bentuk tabel<br><br>Untuk edit/hapus data dapat dilakukan dengan:<br><br>1. Sitem akan menampilkan data pemasukan/pengeluaran <br>2. Admin mengklik tombol hapus/edit<br>3. Sistem akan menyimpan perubahan<br>4. Sistem akan menampilkan data yang telah di ubah|
|Alternative|Tidak ada|
|Pos Condition|-Halaman data pengeluaran - Halaman data pemasukan|
|Exception Push|Tidak ada koneksi, data belum di inputkan|

##### 3.2.7 Staff Biasa Melihat Data Keuangan

| Nama Fungsi |Laporan |
| ------ | ------ |
|    Xref    | Bagian 2.2.7 Staff Biasa Melihat Data Keuangan       |
|    Trigger    |     Membuka aplikasi sistem Manajemen Keuangan Puskesmas Umban Sari   |
|Precondition|Halaman dashboard Staff biasa|
|Basic Path|Data Pemasukan:<br>1. Sistem menampilkan halaman dashboard staff biasa<br>2.Staff mngeklik Data Pemasukan untuk melihat data pemasukan dalam bentuk tabel<br><br>Data Pengeluaran:<br>1. Sistem menampilkan halaman dashboard staff biasa<br>2.Staff mngeklik Data Pengeluaran untuk melihat data pengeluaran dalam bentuk tabel |
|Alternative|Tidak ada|
|Pos Condition|-Halaman Data Pemasukan - Halaman Data Pengeluaran|
|Exception Push|Tidak ada koneksi|


##### 3.2.8 Staff Keuangan Mencetak Laporan Keuangan

| Nama Fungsi |Laporan |
| ------ | ------ |
|    Xref    |    Bagian 2.2.8 Staff Keuangan Mencetak Laporan Keuangan    |
|    Trigger    |    Membuka aplikasi sistem Manajemen Keuangan Puskesmas Umban Sari    |
|Precondition|Halaman dashboard Staff Keuangan|
|Basic Path|1. Sistem akan menampilkan halaman dashboard staff keuangan dan sidebarnya<br> Staff Keuangan mengklik tombol Cetak laporan<br>3. Sistem akan menampilkan data laporan pemasukandan pengeluaran dalam bentuk grafik <br>4. Staff Keuangan mengklik tombol save to exel/ save to pdf <br>5. Staff keuangan mencetak berdasarkan format yang dia pilih sebelum |
|Alternative|Tidak ada|
|Pos Condition|Halaman Cetak Laporan staff keuangan|
|Exception Push|Tidak ada koneksi|


##### 3.2.9 Staff Biasa Mencetak Laporan Keuangan
| Nama Fungsi |Laporan |
| ------ | ------ |
|    Xref    |    Bagian 2.2.9 Staff Biasa Mencetak Laporan Keuangan    |
|    Trigger    |     Membuka aplikasi sistem Manajemen Keuangan Puskesmas Umban Sari   |
|Precondition|Halaman dashboard Staff Biasa|
|Basic Path|1. Sistem akan menampilkan halaman dashboard staff biasa dan sidebarnya<br> Staff biasa mengklik tombol Cetak laporan<br>3. Sistem akan menampilkan data laporan pemasukandan pengeluaran dalam bentuk grafik <br>4. Staff biasa mengklik tombol save to exel/ save to pdf <br>5. Staff biasa mencetak berdasarkan format yang dia pilih sebelum|
|Alternative|Tidak ada|
|Pos Condition|Halaman Cetak Laporan staff biasa|
|Exception Push|Tidak ada koneksi|

##### 3.2.10 Admin Mencetak Laporan Keuangan
| Nama Fungsi |Laporan |
| ------ | ------ |
|    Xref    |    Bagian 2.2.10 Admin Mencetak Laporan Keuangan    |
|    Trigger    |     Membuka aplikasi sistem Manajemen Keuangan Puskesmas Umban Sari   |
|Precondition|Halaman dashboard Admin|
|Basic Path|1. Sistem akan menampilkan halaman dashboard Admin dan sidebarnya<br> Admin mengklik tombol Cetak laporan<br>3. Sistem akan menampilkan data laporan pemasukandan pengeluaran dalam bentuk grafik <br>4. Admin mengklik tombol save to exel/ save to pdf <br>5. Admin mencetak berdasarkan format yang dia pilih sebelum|
|Alternative|Tidak ada|
|Pos Condition|Halaman Cetak Laporan Admin|
|Exception Push|Tidak ada koneksi|

##### 3.2.11 Admin Melaporkan Keuangan
| Nama Fungsi |Laporan |
| ------ | ------ |
|    Xref    |    Bagian 2.2.11 Admin Melaporkan Keuangan    |
|    Trigger    |     Membuka aplikasi sistem Manajemen Keuangan Puskesmas Umban Sari   |
|Precondition|Halaman dashboard Admin|
|Basic Path|1. Sistem akan menampilkan halaman dashboard Admin dan sidebarnya<br>2.Admin mengklik tombol laporan<br>3. Sistem akan menampilkan data laporan yang sudah di upload <br><br>Mengupload file dan data Laporan Keuangan<br> 1. Admin mengklik tombol upload Laporan untuk mengupload file dan pengisian form laporan Keuangan <br>2. Admin Mengisi Form Laporan dan memilih file yang ingin di upload<br>3.Admin mengklik upload untuk mengupload laporan keuangan<br><br>Menghapus Laporan:<br>1.Admin dapat menhapus laporan dengan mengklik icob tong sampah pada kolom aksi<br>3.Setelah muncul modal konfirmasi klik tomol ya,yakin ingin menghapus<br>4.Simtem akan menampilkan data yang terbaru|
|Alternative|Tidak ada|
|Pos Condition|Halaman Laporan|
|Exception Push|Tidak ada koneksi|

##### 3.2.12 Staff Keuangan Melaporkan Keuangan
| Nama Fungsi |Laporan |
| ------ | ------ |
|    Xref    |    Bagian 2.2.12 Staff Keuangan Melaporkan Keuangan    |
|    Trigger    |     Membuka aplikasi sistem Manajemen Keuangan Puskesmas Umban Sari   |
|Precondition|Halaman dashboard Staff Keuangan|
|Basic Path|1. Sistem akan menampilkan halaman dashboard Staff Keuangan dan sidebarnya<br>2. Staff mengklik tombol laporan<br>3. Sistem akan menampilkan data laporan yang sudah di upload <br><br>Mengupload file dan data Laporan Keuangan<br> 1. Staff Keuangan mengklik tombol upload Laporan untuk mengupload file dan pengisian form laporan Keuangan <br>2. Staff Keuangan Mengisi Form Laporan dan memilih file yang ingin di upload<br>3. Staff Keuangan mengklik upload untuk mengupload laporan keuangan<br><br>Menghapus Laporan:<br>1. Staff Keuangan dapat menhapus laporan dengan mengklik icob tong sampah pada kolom aksi<br>3.Setelah muncul modal konfirmasi klik tomol ya,yakin ingin menghapus<br>4.Simtem akan menampilkan data yang terbaru|
|Alternative|Tidak ada|
|Pos Condition|Halaman Laporan|
|Exception Push|Tidak ada koneksi|

##### 3.2.13 Staff Biasa Keuangan Melaporkan Keuangan
| Nama Fungsi |Laporan |
| ------ | ------ |
|    Xref    |    Bagian 2.2.13 Staff Biasa Melaporkan Keuangan    |
|    Trigger    |     Membuka aplikasi sistem Manajemen Keuangan Puskesmas Umban Sari   |
|Precondition|Halaman dashboard Staff Biasa|
|Basic Path|1. Sistem akan menampilkan halaman dashboard Staff Biasa dan sidebarnya<br>2. Staff Biasa mengklik tombol laporan<br>3. Sistem akan menampilkan data laporan yang sudah di upload <br><br>Mengupload file dan data Laporan Keuangan<br> 1. Staff Biasa mengklik tombol upload Laporan untuk mengupload file dan pengisian form laporan Keuangan <br>2. Staff Biasa Mengisi Form Laporan dan memilih file yang ingin di upload<br>3. Staff Biasa mengklik upload untuk mengupload laporan keuangan<br>|
|Alternative|Tidak ada|
|Pos Condition|Halaman Laporan|
|Exception Push|Tidak ada koneksi|

## 3.3 Struktur Detail Kebutuhan Non-fungsional

##### 3.3.1 Logika Struktur Data<br>
Struktur data logika pada sistem Aplikasi Manajemen Keuangan Puskesmas Umban Sari terdapat struktur Database yang dijelaskan menggunakan ERD
![alt text](ERD/Sistem_Manajemen_Puskesmas_Umban_Sari.jpg?raw=true)


Tabel user
| Data Item |Type |Deskripsi|
| ------ | ------ |---------|
|    NIK    |  int      |Berisikan NIK yang sesuai dengan KTP|
|    Nama    |      Varchar  |Nama dari user|
|jenisKelamin|Varchar|Jenis kelamin dari user|
|Alamat|Varchar|Tempat tinggaluser|
|email|Varchar|alamat email yang di daftarkan|
|password|Varchar|berisikan password untuk login admin dan user|
|levelUser|Varchar|kondisi level akses bagi user|
|jabatan|Varchar|posisi peran seorang user|



Tabel Data Pemasukan
| Data Item |Type |Deskripsi|
| ------ | ------ |---------|
|    idPemasukan    |   int     |merupakan id dari pemasukan|
|      tanggalMasuk  |    date    |Tanggal masuk uang berdasarkan inputan user|
|keterangan|Varchar|Menjelaskan tujuan dan keterangan dari pemasukan|
|sumeberPemasukan|Varchar|sumber dana dari mana pemasukan berasal|
|JumlahNominal|int|jumlah kumulatif dari pemasukan|

Tabel Data Pengeluaran
| Data Item |Type |Deskripsi|
| ------ | ------ |---------|
|    idPengeluaran    |   int     |merupakan id dari pengeluaran|
|      tanggalKeluar  |    date    |Tanggal keluar uang berdasarkan inputan user|
|keterangan|Varchar|Menjelaskan tujuan dan keterangan dari pengeluaran|
|sumeberPengeluaran|Varchar|sumber dari mana pengeluaran berasal|
|JumlahNominal|int|jumlah kumulatif dari pengeluaran|

Tabel Laporan
| Data Item |Type |Deskripsi|
| ------ | ------ |---------|
|   idLaporan     |      int  |Menjelaskan id keberapa dari laporan ini|
|    judulLaporan    |     Varchar   |Menjelaskan tentang apa pelaporan yang di uploadkan|
|keterangan|Varchar|Menjelaskan tujuan dan keterangan dari laporan keuangan|
|JumlahNominal|int|jumlah kumulatif dari pelaporan yang di uploadkan|
|typeDana|Varchar|Menjelaskan kegunaan dana dalam sebuah kegiatan |
|file|Varchar|Untuk Menampung bukti pelaporan bagi seorang user |

Tabel Histori
| Data Item |Type |Deskripsi|
| ------ | ------ |---------|
|    idHistory    |  int      |Berisikan id yang sesuai dengan urutan data di tambahahkan|
|tanggalKeluar|date|tanggal dimana seorang user keluar dan tidak aktik lagi di Puskesmas|
|    NIK    |  int      |Berisikan NIK yang sesuai dengan KTP|
|    Nama    |      Varchar  |Nama dari user|
|jenisKelamin|Varchar|Jenis kelamin dari user|
|Alamat|Varchar|Tempat tinggaluser|
|email|Varchar|alamat email yang di daftarkan|
|password|Varchar|berisikan password untuk login admin dan user|
|levelUser|Varchar|kondisi level akses bagi user|
|jabatan|Varchar|posisi peran seorang user|
<br><br>

# Lampiran Bukti wawancara

![alt text](HasilWawancara/Hasil_Wawancara.jpg?raw=true)
![alt text](HasilWawancara/Hasil_Wawancara_2.jpg?raw=true)

# Foto Saat Wawancara

|  | |
| ------ | ------ |
|![alt text](image/foto1.jpg?raw=true)|   ![alt text](image/foto2.jpg?raw=true)     |

<br><br>

# Jobdesk

| Nama | Jobdesk |
| ------ | ------ |
|      Muhammad As Shaff  |  BAB I Pendahuluan <br> BAB II Gambaran umum <br>  BAB III Requirement specification <br> ERD|
|       Yoga Hermanda |  Antarmuka pengguna    |
| Indah Novitriani|Usecase Diagram<br> Hasil Wawancara|
